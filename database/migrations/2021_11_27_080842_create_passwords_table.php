<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passwords', function (Blueprint $table) {
            $table->id();
            $table->text('password_hash')
                ->nullable()
                ->comment('Хеш пароля');
            $table->integer('password_lenth')
                ->nullable()
                ->comment('Длина пароля');
            $table->text('symbols')
                ->nullable()
                ->comment('Символы в пароле');
            $table->dateTime('created_at')
                ->comment('Дата создания');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passwords');
    }
}
