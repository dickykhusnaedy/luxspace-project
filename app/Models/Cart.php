<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	use HasFactory;

	protected $fillable = [
		'users_id',
		'products_id'
	];

	// relation to table products
	public function product()
	{
		return $this->hasOne(Product::class, 'id', 'products_id');
	}

	// relation to table users
	public function user()
	{
		return $this->belongsTo(User::class, 'users_id', 'id');
	}
}
