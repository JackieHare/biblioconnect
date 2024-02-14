<?php

use Illuminate\Database\Events\MigrationsStarted;
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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('agreed_to_processing')->default(false)->after('email'); // Dodaj kolumnę agreed_to_processing
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('agreed_to_processing'); // W przypadku cofnięcia migracji usuń kolumnę
        });
    }
};
