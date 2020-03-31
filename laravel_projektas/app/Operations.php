<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
    protected $fillable = [
        'id',
        'userIdSender',
        'accountNumber',
        'accountStatus',
        'transferAmount',
        'recipientName',
        'recipientSurname'
    ];
}
