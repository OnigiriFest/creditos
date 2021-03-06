<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashEntry extends Model
{
    protected $guarded = [];

    public function seller() {
        return $this->belongsTo('App\User', 'seller_id');
    }
}
