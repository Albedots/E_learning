<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoLesson extends Model
{
    public function module() {  // as lessons so podem ter um module
        return $this->belongsTo("App\Models\Module");
    }

    protected $guarded = []; // Tudo que for enviado (atualizado) pelo post pode ser atualizado sem restrição

}
