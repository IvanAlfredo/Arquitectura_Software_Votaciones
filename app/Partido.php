<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillable = [
        'Sigla','Descripcion','CandidatoPresidente','CandidatoVicepresidente','Estado'];
    protected $table = 'partidos';
}
