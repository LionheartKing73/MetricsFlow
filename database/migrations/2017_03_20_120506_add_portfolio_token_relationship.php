1 <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPortfolioTokenRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            // $table->integer('token_id')->unsigned()->nullable();
            // $table->foreign('token_id')
            //       ->references('id')->on('tokens')
            //       ->onDelete('cascade');
        });

        Schema::table('tokens', function (Blueprint $table) {
            $table->integer('portfolio_id')->unsigned();
            $table->foreign('portfolio_id')
                  ->references('id')->on('portfolios')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            // $table->dropForeign(['token_id']);
            // $table->dropColumn('token_id');
        });

        Schema::table('tokens', function (Blueprint $table) {
            // $table->dropForeign(['portfolio_id']);
            // $table->dropColumn('portfolio_id');
        });
    }
}
