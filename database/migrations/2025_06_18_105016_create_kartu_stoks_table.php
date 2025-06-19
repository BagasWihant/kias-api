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
        Schema::create('kartu_stoks', function (Blueprint $table) {
            $table->id();
            $table->string('matl_no',100);
            $table->string('matl_nm',100);
            $table->string('wire_cd',100)->nullable();
            $table->string('loc_cd',100)->nullable();
            $table->string('matl_kind',100)->nullable();
            $table->string('iss_unit',2)->nullable();
            $table->integer('iss_min_lot')->nullable();
            $table->integer('qty')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartu_stoks');
    }
};
