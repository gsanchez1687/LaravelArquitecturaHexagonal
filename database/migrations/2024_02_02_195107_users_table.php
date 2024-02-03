<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("users", function (Blueprint $table) {

            $table->bigIncrements("id");
            $table->bigInteger('state_id')->unsigned();
            $table->string('username',50);
            $table->string('password',100);
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email',100)->unique();
            $table->string('phone',20);
            $table->string('document_number',20);
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("users");
    }
};
