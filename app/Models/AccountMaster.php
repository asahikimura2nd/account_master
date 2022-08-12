<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountMaster extends Model
{
    use HasFactory;
    protected $fillable = [    
    'name',
    'email',
    'tel',
    'prefectures',
    'city',
    'address_and_building'
    ];

    public function home(){
        
    }
    public function user(){

    }
    
}
