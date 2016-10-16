<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllTables extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('first_name', 15);
            $table->string('last_name', 15);
            $table->string('email', 70)->unique();
            $table->string('phone_number', 20)->unique();
            $table->string('password');
            $table->integer('type_id');
            $table->integer('dist_id');
            $table->integer('is_admin');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('cat_id');
            $table->string('cat_name', 15);
            $table->string('cat_code', 8);
            $table->timestamps();
        });
        Schema::create('services', function (Blueprint $table) {
            $table->increments('ser_id');
            $table->string('ser_name', 20);
            $table->string('ser_code', 8)->unique();
            $table->string('cat_code', 8);
            $table->string('ser_logo', 70);
            $table->timestamps();
        });
        Schema::create('wallets', function (Blueprint $table) {
            $table->increments('wal_id');
            $table->integer('user_id');
            $table->float('wal_balance');
            $table->timestamps();
        });
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('sta_id');
            $table->string('sta_name', 20);
            $table->string('sta_code', 8);
            $table->string('sta_desc', 70);
            $table->timestamps();
        });
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('pr_id');
            $table->string('pr_name', 20)->unique();
            $table->string('ser_code', 8);
            $table->float('pr_text', 70);
            $table->timestamps();
        });
        Schema::create('wallets_topup', function (Blueprint $table) {
            $table->increments('topup_id');
            $table->integer('wal_id');
            $table->float('bal_before');
            $table->float('topup_amount');
            $table->float('bal_after');
            $table->timestamps();
        });
        Schema::create('distributors', function (Blueprint $table) {
            $table->increments('dist_id');
            $table->integer('user_id');
            $table->timestamps();
        });
        Schema::create('user_type', function (Blueprint $table) {
            $table->increments('type_id');
            $table->string('type_text', 50);
            $table->string('type_desc', 150);
            $table->timestamps();
        });
        
//        Schema::create('adminuser', function (Blueprint $table) {
//            $table->increments('admin_id');
//            $table->string('user_name', 15);
//            $table->string('user_pass');
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_type');
        Schema::dropIfExists('wallets_topup');
        Schema::dropIfExists('prices');
        Schema::dropIfExists('statuses');
        Schema::dropIfExists('wallets');
        Schema::dropIfExists('services');
        Schema::dropIfExists('distributors');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('adminuser');
    }

}
