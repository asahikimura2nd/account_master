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
            $table->string('admin_email')->unique()->nullable();
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
            $table->text('user_content')->nullable();
            

            /**
             * 
             * お問い合わせ側(user)
             * 
             */
            $table->string('contact_id')->nullable();
            $table->string('company',20)->nullable();
            $table->string('name',20)->nullable();
            $table->string('tel')->nullable(); //https://webukatu.com/questions/detail/ec2c60b8195ea2b4ac9901a24777d1cf/
            $table->string('email')->nullable();
            $table->date('birth_date')->nullable();//https://code-kitchen.dev/html/input-date/#%E6%97%A5%E4%BB%98%E3%81%AE%E5%80%A4%E3%81%AF%E3%81%A9%E3%82%93%E3%81%AA%E5%BD%A2%E5%BC%8F%E3%81%AB%E3%81%AA%E3%81%A3%E3%81%A6%E3%82%8B%EF%BC%9F
            $table->string('gender')->nullable();
            $table->string('job')->nullable();
            $table->string('content')->nullable();
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
