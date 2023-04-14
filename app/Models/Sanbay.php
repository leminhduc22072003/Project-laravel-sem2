<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanbay extends Model
{
    use HasFactory;
    protected $table = 'san_bay' ;
    protected $primaryKey = 'id' ;
    protected $keyType='string';
    protected $fillable = [
        "tensanbay",
        "idthanhpho",
        "created_at",
        "updated_at"
    ];
    public function scopeSearchByThanhpho($query, $thanhpho = ''){
        if($thanhpho != null && $thanhpho != ''){
            return $query->whereHas("thanhpho", function ($q) use ($thanhpho) {
                $q->where('name', 'LIKE', '%'.$thanhpho.'%');
            });
        }
        return $query;
    }

    public function thanhpho(){
        return $this->belongsTo(ThanhPho::class,"idthanhpho","id");
    }
}
