<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
