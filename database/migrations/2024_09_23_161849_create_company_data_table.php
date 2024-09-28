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
        Schema::create('company_data', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('director_name',50);
            $table->string('director_lastname',50);
            $table->string('street',100);
            $table->string('zip',5);
            $table->string('city',100);

            $table->string('email',100);
            $table->string('website',100)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('mobile',20);
            $table->string('whatsapp',20)->nullable();

            $table->string('logo_path', 1000)->nullable();
            $table->string('icon',1000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_data');
    }
};
