<?php

namespace App;

class Paciente extends Authenticatable {
	protected $table = 'pacientes';
	public $timestamp = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'nome', 'login',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'senha',
	];

	public function getAuthPassword() {
		return $this->senha;
	}
}
