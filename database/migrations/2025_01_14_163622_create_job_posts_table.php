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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('company_id')->constrained('company_profiles')->onDelete('cascade');
            $table->string('email');
            $table->string('title');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('job_locations')->onDelete('cascade');
            
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('job_types')->onDelete('cascade');
            
            $table->text('description');
            $table->text('qualification');
            $table->text('responsibility');
            $table->string('experience');
            $table->string('salary');
            $table->text('benefits');
            $table->string('gender');
            $table->integer('vacancy');
            $table->date('deadline');
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
