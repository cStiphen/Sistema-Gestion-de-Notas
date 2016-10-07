<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programaacademico
 */
class Programaacademico extends Model
{
    protected $table = 'programaacademico';
    protected $connection = 'docentes';

    protected $primaryKey = 'Id';

	public $timestamps = false;

    protected $fillable = [
        'NombrePrograma',
        'UsuarioID',
        'CodigoPrograma'
    ];

    protected $guarded = [];

    /*public function asignaturas(){
    	return $this->belonsToMany('App\Asignatura','programaacademico_asignatura','AsignaturaId','programaacademicoId');
    }*/

    public function usuario(){
    	return $this->belonsTo('App\Programaacademico','UsuarioID');
    }

    public function programasAcademicosAsignaturas(){
    	return $this->hasMany('App\ProgramaacademicoAsignatura','programaacademicoId');
    }

        
}