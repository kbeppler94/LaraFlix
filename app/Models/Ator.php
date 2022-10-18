<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    use HasFactory;
    protected $table = "atores";
    //pra forçar que o nome da tabela é ATORES, que mudamos lá no arquivo de migration ATORS.
    protected $fillable = ['nome', 'nacionalidade_id', 'dt_nascimento', 'inicio_atividades'];

    public function nacionalidade()
    {
        return $this->belongsTo("App\Models\Nacionalidade");
    }
}
