<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;
use App\Users;

class Role extends Model
{
    use HasFactory,  UsesUuid;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    protected $primaryKey = 'id';


    // Relasi 1 Role memiliki Beberapa users atau 1 to m
    public function user () {
        return $this->hasMany(User::class);
    }

}
