<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEntradaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Entrada', function(Blueprint $table)
		{
			$table->foreign('Valores_id', 'fk_Veiculo_Valores')->references('id')->on('Valores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Entrada', function(Blueprint $table)
		{
			$table->dropForeign('fk_Veiculo_Valores');
		});
	}

}
