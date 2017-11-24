 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarColumnaIdCategoriaClaveForanea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->integer('id_categorias')->unsigned()->nullable();

            $table->foreign('id_categorias')->references('id')->on('categorias');
        });
      }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('productos', function (Blueprint $table) {
          $table->dropColumn('id_categorias');
      });
    }
}
