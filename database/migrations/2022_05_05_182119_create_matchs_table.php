<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_id');
            $table->unsignedBigInteger('visit_id');
            $table->foreign('home_id')
                ->nullable()
                ->references('id')
                ->on('results')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('visit_id')
                ->nullable()
                ->references('id')
                ->on('results')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('visit_name')->nullable();
            $table->string('home_name')->nullable();
            $table->integer('week_number')->nullable();
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
        Schema::dropIfExists('matchs');
    }
}
