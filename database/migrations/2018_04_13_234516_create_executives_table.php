<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExecutivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });

        DB::table('executives')->insert([
            ['name' => 'Alberto Galleguillos', 'email' => 'ai.galleguillosr@gmail.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Zvonimic Tenorio', 'email' => 'zvonimic.tenoriohbo@gmail.com', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('executives');
    }
}
