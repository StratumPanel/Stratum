<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cluster')->default("proxmox");
            $table->string('hostname');
            $table->string('username');
            $table->string('password');
            $table->integer('port');
            $table->string('auth_type');
            //$table->foreignId('group_id')->constrained()->onDelete('cascade');
            $table->integer('latency')->nullable();
            $table->timestamp('last_pinged')->nullable();
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
        Schema::dropIfExists('nodes');
    }
}
