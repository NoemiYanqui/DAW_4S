<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes\Usuario;
use GestorImagenes\Album;
use GestorImagenes\Foto;

class FotosSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$albumes=Album::all();
		$contador=0;
		foreach ($albumes as $album) {

			$cantidad=rand(0,5);
			for ($i=0; $i < $cantidad ; $i++) { 
				$contador++;
				Foto::create(
			[
			'nombre'=>"Nombrex Foto$contador",
			'descripcion'=>"Descripcion foto$contador",
			'ruta'=> 'img/text.png',
			'album_id' =>$album->id		
			]			
				);
			}
		}
			
	}
}
