<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
    protected $fillable = [
        'id',
        'accountNumber',
        'accountStatus',
        'transferAmount',
        'userIdSender',
        'userIdrecipient'
    ];
}
