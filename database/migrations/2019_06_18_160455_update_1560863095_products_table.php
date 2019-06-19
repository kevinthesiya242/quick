<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1560863095ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            if(Schema::hasColumn('products', 'photo2')) {
                $table->dropColumn('photo2');
            }
            if(Schema::hasColumn('products', 'photo3')) {
                $table->dropColumn('photo3');
            }
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
                        $table->string('photo2')->nullable();
                $table->string('photo3')->nullable();
                
        });

    }
}
