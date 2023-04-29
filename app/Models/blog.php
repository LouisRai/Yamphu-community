<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    // laravel automatically takes the table as plural of the class name blogs for blog
    //  if u want to coget data of diffrent table asign manually lkie this
    //  protected $table = 'table_name';
    use HasFactory;
}
