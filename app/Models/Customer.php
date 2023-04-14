<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer' ;
    protected $primaryKey = 'id' ;
    protected $keyType='string';
    protected $fillable = [
        "first_name",
        "last_name",
        "sdt",
        "email",
        "sinhnhat",
        "quoctich",
        "gioitinh",
        "created_at",
        "updated_at"
    ];

}
