<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachersModel extends Model
{
    use HasFactory;

    protected $table = "teachers";

    public $timestamps = false;
}
