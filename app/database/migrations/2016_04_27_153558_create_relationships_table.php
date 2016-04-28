<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relationships', function($table)
        {
            $table->increments('id');
            $table->integer('mentor_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->boolean('is_pending');
            $table->timestamps();
			$table->foreign('mentor_id')->references('id')->on('users');
			$table->foreign('student_id')->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('relationships');
	}

}
