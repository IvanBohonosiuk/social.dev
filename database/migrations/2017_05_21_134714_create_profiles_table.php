<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->string('location')->nullable();
			$table->text('about')->nullable();
			$table->string('phone')->nullable();
			$table->string('status')->nullable();
			$table->string('political')->nullable();
			$table->string('fb')->nullable();
			$table->string('tw')->nullable();
			$table->string('inst')->nullable();
			$table->string('site')->nullable();
			$table->text('hobbies')->nullable();
			$table->text('tv_shows')->nullable();
			$table->text('movies')->nullable();
			$table->text('games')->nullable();
			$table->text('music')->nullable();
			$table->text('books')->nullable();
			$table->text('writers')->nullable();
			$table->text('others')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
