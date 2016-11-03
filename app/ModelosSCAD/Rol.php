<?php

namespace App\ModelosSCAD;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 */
class Rol extends Model
{
    protected $table = 'roles';
    protected $connection = 'docentes';

    protected $primaryKey = 'Id';

	public $timestamps = false;
	

    protected $fillable = [
        'Nombre'
    ];

    protected $guarded = [];

    public function sesiones(){

        return $this->belongsToMany('App\ModelosSCAD\Sesion');
    }

    public function sesionRoles(){
        return $this->hasMany('App\ModelosSCAD\SesionRol');
    }
 
}