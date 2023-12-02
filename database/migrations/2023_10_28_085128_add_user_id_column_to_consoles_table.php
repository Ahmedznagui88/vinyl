<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('consoles', function (Blueprint $table) {

            //! creo la colonna user_id assegnandolo ad un valore con un numero intero
           $table->unsignedBigInteger('user_id')->after('description')->nullable(); //(creo la colonna)
           //! user_id e1 una chiave esterna che si riferisce all'ID della tabella users
           $table->foreign('user_id')->references('id')->on('users'); //(creo un collegamento)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consoles', function (Blueprint $table) {
            $table->dropForeign(['user_id']);

            $table->dropColumn('user_id');
        });
    }
};
