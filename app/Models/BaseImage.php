<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class BaseImage extends Model
{
    use HasFactory;


    protected $table = 'images';
    protected $fillable = ['name'];

    public function spots(){
        return $this->hasMany(Spot::class);

    }

}
