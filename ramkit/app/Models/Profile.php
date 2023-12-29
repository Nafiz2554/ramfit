<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'cover_img','profile_img','f_name', 'l_name','phone','gender','college','session','city','position','address','bio','website','facebook','twitter','linkedin','user_id'];

}
