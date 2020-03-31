<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operations;

class OperationsController extends Controller
{
    public function moneyTransfer(){
        return view ('egzaminas.pages.money_transfer');
    }
}
