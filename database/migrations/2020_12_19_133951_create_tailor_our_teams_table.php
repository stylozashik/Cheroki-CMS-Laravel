<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTailorOurTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tailor_our_teams', function (Blueprint $table) {
            $table->id('team_member_id');
            $table->string('photo');
            $table->string('designation');
            $table->string('name');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('pinterest');
            $table->string('linkdin');
            $table->string('twitter');
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
        Schema::dropIfExists('tailor_our_teams');
    }
}
