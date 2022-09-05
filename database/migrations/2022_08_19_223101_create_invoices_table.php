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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('invoice_number');
            $table->date('invoice_date')->nullable();
            $table->string('due_date');
            $table->string('product');
            $table->decimal('amount_collection',8,2)->nullable();
            $table->decimal('amount_commission',8,2)->nullable();
            $table->string('discount');
            $table->decimal('value_vat', 8, 2);
            $table->string('rate_vat');
            $table->decimal('total', 8, 2);
            $table->string('status',50);
            $table->integer('value_status');
            $table->text('notes')->nullable();
            $table->date('payment_date')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('invoices');
    }
};
