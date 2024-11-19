<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function lessons() {     // um module pode ter varias lessons
        return $this->hasMany("App\Models\VideoLesson");
    }

    public function event() {   // um module so pode ter um event
        return $this->belongsTo("App\Models\Event");
    }

    protected $guarded = []; // Tudo que for enviado (atualizado) pelo post pode ser atualizado sem restrição
}
