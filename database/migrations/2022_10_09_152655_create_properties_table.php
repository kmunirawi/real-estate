<?php

use App\Models\City;
use App\Models\Type;
use App\Models\User;
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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->integer('area')->required();
            $table->integer('rooms')->nullable();
            $table->double('price')->required();
            $table->tinyInteger('status')->default(1)->comment('1-available, 2-ordered'); // 1
            $table->tinyInteger('kind')->required(); // SALE - RENT
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(City::class);
            $table->foreignIdFor(Type::class);
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
        Schema::dropIfExists('properties');
    }
};
