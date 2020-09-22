<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buypackage extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id', 'PackageName', 'Packageprice','platform','Transactionid','app','del',
    ];
}
