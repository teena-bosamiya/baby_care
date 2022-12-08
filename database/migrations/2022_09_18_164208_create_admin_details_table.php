<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_details', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('admin_name',50);
            $table->string('admin_email',100);
            $table->biginteger('admin_phone');
            $table->string('admin_psw',100);
            $table->text('admin_pic')->default(NULL);
            $table->text('admin_address_line1');
            $table->text('admin_address_line2');
            $table->text('admin_city');
            $table->text('admin_state');
            $table->bigInteger('admin_pin_code');
            $table->text('admin_varification_question');
            $table->text('admin_varification_answer');
            $table->boolean('admin_status')->default(1);
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
        Schema::dropIfExists('admin_details');
    }
}
