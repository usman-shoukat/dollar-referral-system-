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


 public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
    
     public function buypackage()
    {
        return $this->belongsTo(Buypackage::class, 'user_id','user_id');
    }
    
}
