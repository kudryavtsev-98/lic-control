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
        Schema::create('product_versions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->index()->index();
            $table->foreignId('product_id')->nullable()->constrained()->nullOnDelete();
            
            $table->string('version')->nullable();
            $table->string('edition')->nullable()->comment('Компектация');
            $table->boolean('active')->default('true');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_versions');
    }
};
