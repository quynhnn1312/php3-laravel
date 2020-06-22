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
            $html = view('component.order', compact('orders'))->render();
            return response()->json($html);
        }
    }

    public function deleteOrderItem(Request $request)
    {
        if($request->ajax())
        {
            Order::destroy($request->id);
            $transaction = Transaction::find($request->transactionId);
            $transaction->total = $transaction->total - $request->price;
            $transaction->save();
            return response()->json(['message' => 'Xóa thành công !', 'totalTransaction' => number_format($transaction->total,0,',','.') ]);
        }
    }
}
