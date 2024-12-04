<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('attendances', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('classid');
        $table->unsignedBigInteger('studentid');
        $table->boolean('isPresent');
        $table->string('comments', 200);
        $table->timestamps();

        $table->foreign('classid')->references('id')->on('classes');
        $table->foreign('studentid')->references('id')->on('users');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
