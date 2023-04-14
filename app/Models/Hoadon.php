<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    use HasFactory;
    protected $table = 'hoa_don' ;
    protected $primaryKey = 'id' ;
    protected $keyType='string';
    protected $fillable = [
        "user_id",
        "idchuyenbay",
        "created_at",
        "updated_at"
    ];
    public  function  scopeID($query,$ID = null){
        if($ID != null){
            return $query->where("user_id", '=', $ID);
        }
        return $query;
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function chuyenbay(){
        return $this->belongsTo(Chuyenbay::class,"idchuyenbay","id");
    }

    public function chitiethoadon(){
        return $this->hasOne(ChiTietHoaDon::class,"bill_id","id");
    }


}
