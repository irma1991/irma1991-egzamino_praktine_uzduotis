<?php

namespace App\Http\Controllers;

use App\Accounts;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountsController extends Controller
{

    public function createAccount(Request $request){
        $account = Accounts::create([
            'name' => 'Irma',
            'surname' => 'Linartaite',
            'accountNumber' => 'LT601010012345699999',
            'accountBalance' => '500',
            'iplaukos' => '0',
            'islaidos' => '0',
            'accountStatus' => 'Main account',
            'userId' => Auth::id()
        ]);

        $account2 = Accounts::create([
            'name' => 'Irma',
            'surname' => 'Linartaite',
            'accountNumber' => 'LT601010012345633333',
            'accountBalance' => '500',
            'iplaukos' => '0',
            'islaidos' => '0',
            'accountStatus' => 'Other account',
            'userId' => Auth::id()
        ]);

        return view ('egzaminas.pages.home');
    }

    public function userAccount(){
            $accounts = Accounts::all();
            return view ('egzaminas.pages.user_account', compact('accounts'));
    }
}
