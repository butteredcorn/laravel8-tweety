<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Traits\Followable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'password',
        'username'
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

    public function sanityTest()
    {
        return "hello world!";
    }

    public function getAvatarAttribute($value) 
    {
        $asset = asset($value); //asset helper function creates a url to the asset
        if ($value) {
            return $asset;
        }
        return "https://i.pravatar.cc/150?u=".$this->email;
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function timeline()
    {
        //include all of the user's tweets as well as the tweets of everyone they follow, in desc. order by date
        
        $followed = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $followed)
                    ->orWhere('user_id', $this->id)
                    ->withLikes()
                    ->latest()
                    ->paginate(10);
    }

    public function tweets() 
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    //rebind to path on the view
    public function path($append = '')
    {
        $path = route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $path;
    }

    // bound to the route file as user:name as well
    public function getRouteKeyName()
    {
        return 'username';
    }

}
