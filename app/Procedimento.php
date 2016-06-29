<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedimento extends Model {
	public function exame() {
		return $this->belongsTo('Exame');
	}
}
