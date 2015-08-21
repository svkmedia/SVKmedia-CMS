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
		Schema::create('users', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';

			$table->increments('id');
            $table->boolean('status');
            $table->integer('role_id')->unsigned();
			$table->string('name');
			$table->string('surname');
			$table->string('titleURL')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->date('profileValidStart')->nullable();
            $table->date('profileValidEnd')->nullable();

            $table->date('birthdate')->nullable();
            $table->integer('sex')->unsigned()->nullable();
            $table->boolean('newsletter');

            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->integer('zip')->unsigned()->nullable();
            $table->integer('country')->unsigned()->nullable()->index();
            $table->string('phone')->nullable();
            $table->string('cell')->nullable();

            $table->string('billingName')->nullable();
            $table->string('billingIco')->nullable();
            $table->string('billingDic')->nullable();
            $table->string('billingIcDph')->nullable();
            $table->string('billingAddress')->nullable();
            $table->string('billingCity')->nullable();
            $table->integer('billingZip')->unsigned()->nullable();
            $table->integer('billingCountry')->unsigned()->nullable()->index();

			$table->rememberToken();
            $table->timestamp('online')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();
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
