<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name',50);
            $table->string('user_email',100);
            $table->biginteger('user_phone');
            $table->string('user_psw',100);
            $table->text('user_pic')->default(NULL);
            $table->text('user_address_line1');
            $table->text('user_address_line2');
            $table->text('user_city');
            $table->text('user_state');
            $table->bigInteger('user_pin_code');
            $table->text('user_varification_question');
            $table->text('user_varification_answer');
            $table->boolean('user_status')->default(1);
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
        Schema::dropIfExists('user_details');
    }
}
