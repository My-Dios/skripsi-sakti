<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class OtpCode extends Model
{
    use HasFactory, UsesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //mess assigment untuk semua kolom
    protected $guarded = [];

    public function users(){
        return $this->belongsTo('App\Users');
    }
}
