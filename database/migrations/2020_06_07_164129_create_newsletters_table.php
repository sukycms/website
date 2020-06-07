<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewslettersTable extends Migration
{
    public function up(): void
    {
        Schema::create('newsletters', static function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->index();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }
}
