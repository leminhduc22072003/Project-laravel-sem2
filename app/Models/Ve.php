<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;
    protected $table = 've' ;
    protected $primaryKey = 'id' ;
    protected $fillable = [
        "user_id",
        "idhoadon",
        "idchuyenbay",
        "created_at",
        "updated_at"
    ];
    public function chuyenbay() {
        return $this->belongsTo(Chuyenbay::class,"idchuyenbay","id");
    }
    public function user() {
        return $this->belongsTo(User::class,"user_id","id");
    }
    public function hoadon() {
        return $this->belongsTo(Hoadon::class,"idhoadon","id");
    }
}
