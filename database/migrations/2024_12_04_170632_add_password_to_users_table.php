<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // In the generated migration file, inside the up() method
public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('password')->nullable(); // Add password column
    });
}

// In the down() method, to reverse the change
public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('password'); // Drop the password column if we roll back the migration
    });
}

};
