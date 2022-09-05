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
            $table->foreignId('product_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('status_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');    
            $table->string('invoice_number');
            $table->string('created_by');
            $table->string('discount');
            $table->string('rate_vat');
            $table->text('notes')->nullable();
            $table->decimal('amount_collection',8,2)->nullable();
            $table->decimal('amount_commission',8,2)->nullable();
            $table->decimal('value_vat', 8, 2);
            $table->decimal('total', 8, 2);
            $table->date('due_date');
            $table->date('invoice_date')->nullable();
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
