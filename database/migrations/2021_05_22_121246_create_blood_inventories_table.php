<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_inventories', function (Blueprint $table) {
            $table->id();
            $table->String('blood_group',25);
            $table->String('volume',25);
            $table->String('status',25);
            $table->String('donor_id',25);
            $table->String('request_id',25);
            
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
        Schema::dropIfExists('blood_inventories');
    }
}
