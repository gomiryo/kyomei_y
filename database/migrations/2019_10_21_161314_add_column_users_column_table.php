<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUsersColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profile_img_path')->nullable();
            $table->dateTime('profile_img_upload')->nullable();
            $table->string('profile_text')->nullable();
            $table->string('catch_phrase')->nullable();
            $table->string('area')->nullable();
            $table->string('category')->nullable();
            $table->string('attribute')->nullable();
            $table->string('account_twitter')->nullable();
            $table->string('account_facebook')->nullable();
            $table->string('account_instagram')->nullable();
            $table->string('url_twitter')->nullable();
            $table->string('url_facebook')->nullable();
            $table->string('url_instagram')->nullable();
            $table->string('url_main')->nullable();
            $table->string('interest')->nullable();
            $table->string('credit_card')->nullable();
            $table->string('bank_account')->nullable();
            $table->integer('is_identified')->nullable();
            $table->integer('is_active')->nullable();
            $table->integer('is_login')->nullable();
            $table->integer('is_requested')->nullable();
            $table->dateTime('last_login_date')->nullable();
            $table->integer('is_official')->nullable();
            $table->integer('is_nda_contracted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
