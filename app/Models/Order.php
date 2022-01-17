<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function orderRelation()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function productRelation()
    {
        return $this->belongsTo(product::class,'product_id','id');     
    }
}
