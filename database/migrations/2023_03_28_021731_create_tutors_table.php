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
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->integer("ID Tutor")->unique();
            $table->text("email");
            $table->integer("periode mengajar");
            $table->text("alamat");
            $table->boolean("gender");
            $table->integer("usia");
            $table->text("bidang keahlian");
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
        Schema::dropIfExists('tutors');
    }
};
