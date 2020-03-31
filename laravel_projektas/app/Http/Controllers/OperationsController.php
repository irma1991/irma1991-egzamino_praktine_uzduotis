<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operations;
use App\Accounts;
use App\User;
use Illuminate\Support\Facades\Auth;

class OperationsController extends Controller
{
    public function moneyTransfer(){
        return view ('egzaminas.pages.money_transfer');
    }

    public function storeOperation(Request $request){
        $validateData = $request->validate([
            'accountNumber' => 'required',
            'accountStatus' => 'required',
            'transferAmount' => 'required',
            'recipientName' => 'required',
            'recipientSurname' => 'required'
        ]);

        $moneyTransfer = Operations::create([
            'userIdSender' => Auth::id(),
            'accountNumber' => request('accountNumber'),
            'accountStatus' => request('accountStatus'),
            'transferAmount' => request('transferAmount'),
            'recipientName' => request('recipientName'),
            'recipientSurname' => request('recipientSurname')
        ]);

        Accounts::where('accountNumber', request('accountNumber'))->update([
            'iplaukos'=>request('transferAmount')
        ]);

        return redirect('/money_transfer');
    }
}
