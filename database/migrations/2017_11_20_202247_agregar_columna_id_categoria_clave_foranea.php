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
            $table->integer('categorias_id')->unsigned()->nullable();

            $table->foreign('categorias_id')->references('id')->on('categorias');
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
