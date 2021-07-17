<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'sale_date',
        'tax',
        'total',
        'status',
        'user_id',
        'client_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function saleDetails(){
        return $this->hasMany(SaleDetails::class);
    }
}
