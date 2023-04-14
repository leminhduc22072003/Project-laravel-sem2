<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maybay extends Model
{
    use HasFactory;
    protected $table = 'may_bay' ;
    protected $primaryKey = 'id' ;
    protected $keyType='string';
    protected $fillable = [
        "idhangbay",
        "tenmaybay",
        "created_at",
        "updated_at"
    ];
    public  function  scopeTenmaybay($query,$tenmaybay=''){
        if($tenmaybay != null && $tenmaybay != ''){
            return $query->where("tenmaybay","like","%".$tenmaybay."%");
        }
        return $query;
    }

    public function hangbay() {
        return $this->belongsTo(Hangbay::class, 'idhangbay', 'id');
    }
}
