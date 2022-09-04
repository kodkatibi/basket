<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('description')->nullable();
            $table->string('contains')->default('ALL;')->comment('ALL; PRODUCT:1:2:3; CATEGORY:1:2:3;');
            $table->string('condition')->default('NONE;')->comment('NONE; QUANTITY:100; PRICE:1000;');
            $table->enum('condition_type', ['<', '<=', '=', '=>', '>'])->default('>')->comment('condition can be grater than or less than');
            $table->enum('discount_type', ['percentage', 'fixed'])->default('percentage');
            $table->float('value', 12, 5)->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('discounts');
    }
};
