<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('username', 15)->unique();
            $table->string('password');
            $table->string('first_name', 25)->nullable();
            $table->string('last_name', 25)->nullable();
            $table->boolean('is_mentor');
            $table->text('bio')->nullable();
            $table->string('img_url')->nullable();
            $table->string('address')->nullable();
            $table->string('github_name')->unique()->nullable();
            $table->timestamps();
            $table->string('confirmation_code')->nullable();
            $table->boolean('confirmed')->default(0);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
