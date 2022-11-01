<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Spot extends Model
{
    use HasFactory;


    protected $table = 'spots';
    protected $fillable = ['path','image_id'];

    public function baseImage(){
        return $this->belongsTo(BaseImage::class);
    }

}
