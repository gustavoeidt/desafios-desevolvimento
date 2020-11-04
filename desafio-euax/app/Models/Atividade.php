<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $dates = ['inicio', 'fim'];

    use HasFactory;

    protected $fillable = [
        'atividade',
        'inicio',
        'fim',
        'finalizada',
        'projeto_id'
    ];

    public function projeto()
    {
        return $this->belongsTo('App\Models\Projeto');
    }
}
