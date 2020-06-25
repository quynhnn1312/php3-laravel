<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;

class MyAccountController extends FrontendController
{
    public function index()
    {
        $idUser = Auth::user()->id;
        $userTransaction = Transaction::where('user_id',$idUser)->get();
        return view('client.my-account', compact('userTransaction'));
    }

    public function cancelTransaction (Request $request, $id)
    {
        if($request->ajax())
        {
            $transaction = Transaction::find($id);
            $transaction->status = -1;
            $transaction->save();
            $html = view('client.component.cancel-transaction-ajax', compact('transaction'))->render();

            return response()->json(['html' => $html]);
        }
    }

    public function viewOrder (Request $request)
    {
        if($request->ajax())
        {
            $orders = Order::with('product')->where('transaction_id',$request->id)->get();
            $status = $request->status;
            $html = view('client.component.view-order', compact('orders','status'))->render();
            return response()->json($html);
        }
    }
}
