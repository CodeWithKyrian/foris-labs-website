<?php

namespace App\Models;

use App\Notifications\VerifyEmail;
use App\Traits\HasPermissionsTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Haruncpi\LaravelUserActivity\Traits\Loggable;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasPermissionsTrait, Loggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'position',
        'profile_img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeAdmins($query)
    {
        return $query->whereHas('roles', function (Builder $query) {
            $query->whereIn('slug', ['super-admin', 'admin']);
        });
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }
}
