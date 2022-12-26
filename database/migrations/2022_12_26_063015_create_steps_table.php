<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
            $table->string('stepName');
            $table->string('stepIcon')->nullable();
            $table->string('stepLink')->nullable();
            $table->smallInteger('stepOrder')->unsigned();
            $table->string('stepTitle')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        DB::table('steps')->insert(['stepName' => 'Step 1','stepIcon' => 'number-1.png','stepOrder' => '1','stepLink' => 'step/1', 'stepTitle' => 'Getting On-Board','created_at' => now()]);
        DB::table('steps')->insert(['stepName' => 'Step 2','stepIcon' => 'number-2.png','stepOrder' => '2','stepLink' => 'step/2', 'stepTitle' => 'Business Pre-Launch','created_at' => now()]);
        DB::table('steps')->insert(['stepName' => 'Step 3','stepIcon' => 'number-3.png','stepOrder' => '3','stepLink' => 'step/3', 'stepTitle' => 'Business Launch','created_at' => now()]);
        DB::table('steps')->insert(['stepName' => 'Step 4','stepIcon' => 'number-4.png','stepOrder' => '4','stepLink' => 'step/4', 'stepTitle' => 'Licensing/Contracting','created_at' => now()]);
        DB::table('steps')->insert(['stepName' => 'Step 5','stepIcon' => 'number-5.png','stepOrder' => '5','stepLink' => 'step/5', 'stepTitle' => 'Products/Business','created_at' => now()]);
        DB::table('steps')->insert(['stepName' => 'Step 6','stepIcon' => 'number-6.png','stepOrder' => '6','stepLink' => 'step/6', 'stepTitle' => 'Get Trained As CFM','created_at' => now()]);
        DB::table('steps')->insert(['stepName' => 'Step 7','stepIcon' => 'number-7.png','stepOrder' => '7','stepLink' => 'step/7', 'stepTitle' => 'Get Certified As CFM','created_at' => now()]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ladders');
    }
};
