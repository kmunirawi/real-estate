<?php

use App\Models\City;
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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $cities = [
            ['name'=> 'شمال غزة' ],
            ['name'=> 'غزة' ],
            ['name'=> 'الوسطى' ],
            ['name'=> 'خان يونس' ],
            ['name'=> 'رفح' ],
        ];

        foreach ($cities as  $value) {
            City::create($value);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
};
