<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class My_user extends Authenticatable
{
    protected $table="My_user";

    protected $fillable=['id','first_name','second_name','email','password','repassword',
                        'area_code','mobile','gender'];

    protected $hidden=['created_at','updated_at','remember_token'];
    protected $guard = 'my-user';
}
