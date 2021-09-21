<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $filable = ['label'];

    public $timestamps = false;

    public function articles() {
        return $this->belongsToMany(Article::class);
    }
}
