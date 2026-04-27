<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('title');
            $table->string('duration')->nullable();
            $table->text('description')->nullable();

            $table->string('project_url')->nullable();
            $table->enum('url_type', ['video', 'website', 'drive'])->nullable();

            $table->json('photos')->nullable(); // store paths as array
            $table->json('skills')->nullable(); // selected skills (IDs or names)

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
