<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
    protected $table='product';
    protected $primaryKey = 'pro_id';
    protected $fillable = ['pro_name', 'pro_img', 'pro_price', 'pro_description'];
}
