<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skyreferral extends Model
{
    use HasFactory;

     protected $fillable = ['user_id', 'referred_by_id', 'position'];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
    
     public function buypackage()
    {
        return $this->belongsTo(Buypackage::class, 'user_id','user_id');
    }


    /**
     * @return BelongsTo
     */
    public function referredByUser()
    {
        return $this->belongsTo(User::class, 'referred_by_id');
    }

}
