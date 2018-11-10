<?php namespace GestorImagenes;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {
		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'albumes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','nombre','descripción','usuario_id'];

	public function fotos(){
	return $this-> hasMany('GestorImagenes\Foto'); // cardinalidad : un album tiene muchas fotos
	}

	public function propietario(){
	return $this-> belongsTo('GestorImagenes\Usuario'); // cardinalidad : Un albúm pertenece a un único usuario
	}


}
