<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('first_name', 127);
            $table->string('last_name', 255);
            $table->string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('is_admin')->default(0);
            $table->tinyInteger('is_vaccinated')->default(0);
            $table->string('birth_date', 10)->nullable(false);
            $table->string('document', 11)->nullable();
            $table->foreignId('club_id')->constrained('clubs')->onUpdate('cascade')->onDelete('restrict');
            $table->tinyInteger('local_accommodation')->default(0);
            $table->tinyInteger('is_present')->default(0);
            $table->tinyInteger('use_medication')->default(0);
            $table->string('password', 255);
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
};
