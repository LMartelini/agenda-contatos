<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categories";

    public function clients() {
        return $this->hasMany(Cliente::class);
    }
}
