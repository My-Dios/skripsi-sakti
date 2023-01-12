<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Post extends Model
{


    use HasFactory, UsesUuid;
    protected $fillable = ['title', 'content'];
    protected $primaryKey = 'id';


}
