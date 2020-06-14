<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnAvatarAndPhoneAndAddressAndStatusAndRoleIdInUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();
            $table->char('phone')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('status')->default(1)->index();
            $table->tinyInteger('role_id')->default(1)->index();
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
            $table->dropColumn('avatar');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('status');
            $table->dropColumn('role_id');
        });
    }
}
