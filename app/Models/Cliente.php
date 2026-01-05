<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clients";

    public function category() {
        return $this->belongsTo(Categoria::class);
    }
}
