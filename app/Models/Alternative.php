<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat'];

    public function score()
    {
        return $this->hasOne(Score::class);
    }
}
