<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Accounts extends Model
{
    protected $fillable = [
        'id',
        'name',
        'surname',
        'accountNumber',
        'accountBalance',
        'accountStatus',
        'userId'
    ];
}
