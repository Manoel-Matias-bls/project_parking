<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntradaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Entrada', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('entrada')->nullable();
			$table->dateTime('saida')->nullable();
			$table->string('placa', 7)->nullable();
			$table->float('valor_total', 10, 0)->nullable();
			$table->integer('Valores_id')->index('fk_Veiculo_Valores_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Entrada');
	}

}
