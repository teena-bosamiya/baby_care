<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDetailsModel extends Model
{
    use HasFactory;
    protected $table='user_details';
    protected $primaryKey = 'user_id';
}
