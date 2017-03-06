<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
	protected $table = 'users_socials';

	protected $fillable = ['social_id', 'service'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
