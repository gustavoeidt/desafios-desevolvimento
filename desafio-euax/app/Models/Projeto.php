<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $dates = ['inicio', 'fim'];

    protected $fillable = [
        'projeto',
        'inicio',
        'fim',
        'user_id'
    ];

    public function atividades()
    {
        return $this->hasMany('App\Models\Atividade');
    }

    public function progresso()
    {
        // Calcula o andamento do projeto
        // (atividades finalizadas / total de atividades ) * 100
        // Arredondamento para baixo e conversão para int
        $totalAtividades = $this->hasMany('App\Models\Atividade')->count();
        $totalFinalizadas = $this->hasMany('App\Models\Atividade')->where('finalizada',1)->count();
        
        // Verifica se algum dos valores é zero
        if ($totalAtividades*$totalFinalizadas) {
            $progresso = (int)floor(($totalFinalizadas / $totalAtividades) * 100);
        } else {
            $progresso = 0;
        }
        return $progresso;
    }

    public function atrasado()
    {
        // Busca as atividades não finalizadas
        $atividadesNaoFinalizadas = $this->hasMany('App\Models\Atividade')->where('finalizada',0);
        // Verifica se há alguma com a data de fim maior que a data de fim do projeto
        $emAtraso = $atividadesNaoFinalizadas->whereDate('fim','>',$this->fim->format('Y-m-d'))->count();

        return ($emAtraso ? true : false);
    }
}
