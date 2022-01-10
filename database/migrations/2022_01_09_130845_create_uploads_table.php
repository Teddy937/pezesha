<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('InvoiceNo')->nullable();
            $table->string('StockCode')->nullable();
            $table->string('Description')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('InvoiceDate')->nullable();
            $table->string('UnitPrice')->nullable();
            $table->string('CustomerID')->nullable();
            $table->string('Country')->nullable();
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
        Schema::dropIfExists('uploads');
    }
}
