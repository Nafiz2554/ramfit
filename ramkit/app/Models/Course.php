<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title','subtitle','type', 'price','price_a','tutor','duration','tag','short_desc','full_desc','img_1','img_2'];

}
