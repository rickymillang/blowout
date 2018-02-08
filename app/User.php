<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar', 'provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function establishment()
    {
        return $this->hasOne(Establishment::class);
    }

    public function received_messages()
    {
        return $this->hasMany(Message::class, 'to_user_id');
    }

    public function sent_messages()
    {
        return $this->hasMany(Message::class, 'from_user_id');
    }
}
