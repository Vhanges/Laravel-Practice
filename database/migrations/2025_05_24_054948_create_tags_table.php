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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('jobs_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Jobs::class, 'job_listing_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Tags::class)->constrained()->cascadeOnDelete();
            $table->timestamps();

            /**
             * constrained(): Establishes a foreign key relationship by automatically referencing the parent table
             * cascadeOnDelete(): Ensures that when a job or tag is deleted, the related pivot table row is also removed 
             */

             
        });

        Schema::create('comment_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Comments::class, 'comment_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Tags::class)->constrained()->cascadeOnDelete();
            $table->timestamps();



             
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('job_tags');
        Schema::dropIfExists('comment_tags');
    }
};
