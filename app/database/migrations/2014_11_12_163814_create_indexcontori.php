<?php //app/database/migrations/2014_11_12_163814_create_indexcontori

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexcontori extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('indexcontori', function($table){
			$table->increments('id');
			$table->integer('Bucatarie apa rece');
			$table->integer('Bucatarie apa calda');
			$table->integer('Baie apa rece');
			$table->integer('Baie apa calda');
			$table->integer('Gaze');
			$table->integer('Calorifer 6263 sufragerie');
			$table->integer('Calorifer 6262 dormitor1');
			$table->integer('Calorifer 6261 dormitor2');
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
		//
		Schema::drop('indexcontori');
	}

}
