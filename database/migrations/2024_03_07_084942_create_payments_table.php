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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('ref_number');
            $table->integer('amount');
            $table->string('status');
            $table->timestamps();
        });


        // Schema::create('example_table', function (Blueprint $table) {
        //     $table->id();
        //     // Add your columns here
        //     $table->timestamps();
        // })->batch(2);
// Then run `php artisan migrate:rollback --batch=2`
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
