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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            
            $table->string('name')->index();
            $table->timestamp('conclusion_date')->nullable();
            $table->decimal('price', 19, 2)->default('00000000000000000');
            $table->decimal('full_price', 19, 2)->default('00000000000000000');
            $table->string('number');
            $table->string('gpz');
            $table->string('contruct_number');

            $table->foreignId('dealer_id')->nullable()->constrained()->nullOnDelete();
            
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
        Schema::dropIfExists('purchases');
    }
};
