<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('site_uid', 30)->unique();
            $table->unsignedBigInteger('user_id');
            $table->string('stripe_plan');
            $table->string('name');
            $table->string('domain')->nullable();
            $table->string('ipaddress')->nullable();
            $table->string('admin_email')->nullable();
            $table->text('settings')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
