<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_summaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('summary_title', 250);
            $table->string('summary_location', 250);
            $table->text('summary_detail');
            $table->tinyInteger('summary_status');
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
        Schema::dropIfExists('package_summaries');
    }
}
