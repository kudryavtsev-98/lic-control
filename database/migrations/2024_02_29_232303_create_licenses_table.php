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
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();

            $table->string('name')->index();
            $table->foreignId('product_version_id')->nullable()->constrained()->nullOnDelete();
            $table->boolean('active')->default('true');

            $table->string('type_id');
            $table->foreign('type_id')->references('id')->on('license_types')->nullable()->nullOnDelete();

            $table->string('metric_id');
            $table->foreign('metric_id')->references('id')->on('license_metrics')->nullable()->nullOnDelete();

            $table->foreignId('key_id')->nullable()->constrained()->nullOnDelete();

            $table->text('note')->nullable();

            $table->string('number')->comment('Число закупленных лицензий');
            $table->date('expiration_date')->nullable();

            $table->decimal('price', 19, 2)->default('00000000000000000');
            $table->foreignId('purchase_id')->nullable()->constrained()->nullOnDelete();
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
        Schema::dropIfExists('licenses');
    }
};
