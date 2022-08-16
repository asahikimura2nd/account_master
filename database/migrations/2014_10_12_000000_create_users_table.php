<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            //管理者
            // $table->string('name',100)->nullable();
            $table->string('email')->unique()->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            // $table->rememberToken();
            //お問い合わせ
            
            $table->string('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_tel')->nullable();
            $table->string('user_prefectures')->nullable();
            $table->string('user_city')->nullable();
            $table->string('user_address_and_building')->nullable();
            //詳細
            $table->string('user_company')->nullable();
            $table->string('user_name_katakana')->nullable();
            $table->string('user_password')->nullable();
            $table->string('user_postcode')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
