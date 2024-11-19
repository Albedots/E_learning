<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    public function user() {    // O event so pode ter um criado(usuário)
        return $this->belongsTo("App\Models\User");
    }

    protected $guarded = []; // Tudo que for enviado (atualizado) pelo post pode ser atualizado sem restrição

    public function users() {   // TODO: o event pode ter muitos usuário  
        return $this->BelongsToMany("App\Models\User");
    }

    public function modules() {
        return $this->hasMany("App\Models\Module");
    }
}
