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
        Schema::create('customers',function (Blueprint $table)
        {
            $table->id('customer_id'); //rename id by customer_id   
            $table->string('name',60);
            $table->string('email',100); //100 represts the character lenght
            $table->enum('gender',['M','F','O'])->nullable();
            $table->text('address')->nullable();
            $table->date('dob');
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->timestamps(); //it make two column created_at and updated_at to keep track of the records
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};