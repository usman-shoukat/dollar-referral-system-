<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

     protected $fillable = [
        'user_id', 'perfectmoneyuserid', 'amount','bitcoinaddress','advcash', 'cashemail', 'JazzCashName','JazzCashphone','paisaName', 'easypaisaphone', 'skrillmail','payeeremail','platform','app','del',
    ];
}
