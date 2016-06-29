<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model {
	public function procedimentos() {
		return $this->hasMany('Procedimento');
	}

	public function pacientes() {
		return $this->hasMany('Paciente');
	}
}
