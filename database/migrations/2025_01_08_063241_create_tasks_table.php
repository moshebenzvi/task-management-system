<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            // Title,Description,Status (e.g., To Do, In Progress, Done),Priority (e.g., Low, Medium, High),Due Date,Assigned User (Member),Associated Project
            $table->foreignId('projects_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('description');
            $table->enum('status', ['To Do', 'Progress', 'Done'])->default('To Do');
            $table->enum('priority', ['Low', 'Medium', 'High'])->default('Low');
            $table->date('due_date');
            $table->date('finish_date');
            $table->timestamps();

            $table->softDeletes();
        });

        Schema::create('user_tasks', function (Blueprint $table) {
            $table->id();
            // Title,Description,Status (e.g., To Do, In Progress, Done),Priority (e.g., Low, Medium, High),Due Date,Assigned User (Member),Associated Project
            $table->foreignId('task_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->date('finish_date');
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
