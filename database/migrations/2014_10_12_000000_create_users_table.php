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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // $table->foreignIdFor(Role::class);
            // $table->foreignId('role_id');
            $table->unsignedBigInteger('role_id')->nullable();
            $table->enum('status',['active', 'inactive'])->default('active');
            $table->string('display_order')->nullable();
            $table->string('remarks')->nullable();
            $table->enum('created_by', ['admin','agent','self'])->default('self');


            $table->rememberToken();
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
