<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chuyenbay extends Model
{
    use HasFactory;
    protected $table = 'chuyen_bay' ;
    protected $primaryKey = 'id' ;
    protected $keyType='string';
    protected $fillable = [
        "idmaybay",
        "idhangbay",
        "machuyenbay",
        "ngaydi",
        "ngayden",
        "trangthai",
        "quangduong",
        "sanbaydi",
        "sanbayden",
        "giave",
        "created_at",
        "updated_at"
    ];
    public  function scopeSanbaydi($query,$sanbaydi = null){
        if($sanbaydi != null){
            return $query->whereHas("sanbay1", function ($q) use ($sanbaydi) {
                $q->where('id', '=', $sanbaydi);
            });
        }
        return $query;
    }
    public  function scopeSanbayden($query,$sanbayden = null){
        if($sanbayden != null){
            return $query->whereHas("sanbay2", function ($q) use ($sanbayden) {
                $q->where('id', '=', $sanbayden);
            });
        }
        return $query;
    }
    public  function scopeNgaydi($query,$ngaydi=''){
        if($ngaydi != null && $ngaydi!=''){
            return $query->where("ngaydi","like","%".$ngaydi."%");
        }
        return $query;
    }
    public  function scopeNgayden($query,$ngayden=''){
        if($ngayden != null && $ngayden!=''){
            return $query->where("ngayden","like","%".$ngayden."%");
        }
        return $query;
    }
    public  function scopeTrangthai($query, $trangthai = null){
        if($trangthai != null
        ){
            return $query->where("trangthai", '=', $trangthai);
        }
        return $query;
    }



    public function sanbay1(){
        return $this->belongsTo(Sanbay::class,"sanbaydi","id");
    }
    public function sanbay2(){
        return $this->belongsTo(Sanbay::class,"sanbayden","id");
    }
    public function maybay(){
        return $this->belongsTo(Maybay::class,"idmaybay","id");
    }
}
