<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = [
    'name','course','phone','email',
    'mark1','mark2','mark3','total'
];
}
