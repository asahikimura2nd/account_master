<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Database\Factories\Administration\MemberFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     */


    protected $fillable = [
        //管理者
        'admin_email',
        'password',
        //会員一覧
        'user_id',
        'user_name',
        'user_email',
        'user_tel',
        'user_prefectures',
        'user_city',
        'user_address_and_building',
        //詳細
        'user_company',
        'user_name_katakana',
        'user_password',
        'user_postcode',
        'user_content',
        //対応状況
        'status',
        //お問い合わせ備考
        'remarks',

        /**
         * 
         * お問い合わせ側(user)
         * 
         */
        'contact_id',
        'company',
        'name',
        'tel',
        'email',
        'birth_date',
        'gender',
        'job',
        'content'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
