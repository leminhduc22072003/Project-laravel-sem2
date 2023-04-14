<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhPho extends Model
{
    use HasFactory;
    protected $table = 'thanh_pho' ;
    protected $primaryKey = 'id' ;
    protected $fillable = [
        "name",
        "mathanhpho",
        "created_at",
        "updated_at"
    ];

    public  function scopeName($query, $name = ''){
        if($name != null && $name!=''){
            return $query->where("name", $name);
        }
        return $query;
    }
}
