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
        Schema::table('alats', function (Blueprint $table) {
            $table->dropColumn('nama');

            $table->decimal('harga', 10, 2)->after('merk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('alats', function (Blueprint $table) {
            $table->string('nama')->after('jenis_alat');

            $table->dropColumn('harga');
        });
    }
};
