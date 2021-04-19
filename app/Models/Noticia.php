<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Claseblog;

class Noticia extends Model
{
    use HasFactory;

    protected $guarded = [];

        public function categoria(){

        return $this->belongsTo(Claseblog::class, 'claseblog_id');
    }
}