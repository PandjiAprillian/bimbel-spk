<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = ['c1', 'c2', 'c3', 'c4'];

    public function alternative()
    {
        return $this->belongsTo(Alternative::class);
    }
}
