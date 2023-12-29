<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lession extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title','url1','url2', 'pdf1name','pdf1file_name','pdf1file_path','pdf2name','pdf2file_name','pdf2file_path','course_id','img_1','img_2'];
}
