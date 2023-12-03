<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('operational');
            $table->string('code')->unique();
            $table->bigInteger('operational_district_id')->nullable();
            $table->enum('division', ['Bannu', 'Dikhan', 'Kohat', 'Mardan', 'Peshawar', 'Malakand', 'Hazara'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
