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
        Schema::create('usercomments', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            $table->string('comments');
            $table->smallInteger('unqId');
            // $table->string('like');
            // $table->smallInteger('user_type')->nullable()->comment('1-admin 2-users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
