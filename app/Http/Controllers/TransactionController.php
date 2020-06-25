<?php

namespace App\Http\Controllers;

use App\Order;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index (Request $request)
    {
        $transactions = Transaction::whereRaw(1);
        if ($request->id) $transactions->where('id',$request->id);
        if ($email = $request->email) {
            $transactions->where('email','like','%'.$email.'%');
        }

        if ($type = $request->type) {
            if ($type == 1)
            {
                $transactions->where('user_id','<>',0);
            }else {
                $transactions->where('user_id',0);
            }
        }

        if ($status = $request->status) {
            $transactions->where('status',$status);
        }
        if($request->price_min && $request->price_max) {
            $price_min = (int)str_replace("." , "" , $request->price_min);
            $price_max = (int)str_replace("." , "" , $request->price_max);
            $transactions->where('total','>=',$price_min);
            $transactions->where('total','<=',$price_max);
        }
        if($request->price_min && !$request->price_max){
            $price_min = (int)str_replace("." , "" , $request->price_min);
            $transactions->where('total','>=',$price_min);
        }
        if(!$request->price_min && $request->price_max){
            $price_max = (int)str_replace("." , "" , $request->price_max);
            $transactions->where('total','<=',$price_max);
        }
        $transactions = $transactions->orderByDesc('id')
            ->paginate(5);
//        if ($request->export) {
//            // Gọi tới export excel
//            return \Excel::download(new TransactionExport($transactions), 'don-hang.xlsx');
//        }
        return view('transaction.index',compact('transactions'));
    }

    public function delete($id)
    {
        $transaction = Transaction::find($id);
        if ($transaction) {
            $transaction->delete();
            \DB::table('orders')->where('transaction_id', $id)
                ->delete();
        }
        return redirect()->back()->with('message', 'Xóa thành đơn hàng thành công !');
    }

    public function getAction(Request $request,$action,$id)
    {
        $transaction = Transaction::find($id);
        if ($transaction) {
            switch ($action) {
                case 'process':
                    $transaction->status = 1;
                    break;
                case 'success':
                    $transaction->status = 2;
                    break;
                case 'cancel':
                    $transaction->status = -1;
                    # code...
                    break;
            }
            $transaction->save();
        }

        return redirect()->back();
    }

    public function detailTransaction (Request $request)
    {
        if($request->ajax())
        {
            $orders = Order::with('product')->where('transaction_id',$request->id)->get();
            $status = $request->status;
            $html = view('component.order', compact('orders','status'))->render();
            return response()->json($html);
        }
    }

}
