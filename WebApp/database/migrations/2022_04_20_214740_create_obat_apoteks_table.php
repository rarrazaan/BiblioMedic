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
        Schema::create('obat_apoteks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('obat_id')->constrained();
            $table->foreignId('apotek_id')->nullable()->constrained('apoteks')->onDelete('set null');
            $table->integer('harga');
            $table->integer('qty');
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
        Schema::dropIfExists('obat_apoteks');
    }
};