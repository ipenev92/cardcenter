<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model {
    use SoftDeletes;

    protected $fillable = [
    	'name',
    	'expansion',
    	'number',
    	'rarity',
    	'src',
    ];
}