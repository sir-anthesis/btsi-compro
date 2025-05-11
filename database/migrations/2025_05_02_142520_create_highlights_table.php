<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHighlightsTable extends Migration
{
    public function up(): void
    {
        Schema::create('highlights', function (Blueprint $table) {
            $table->id(); // auto-increment primary key
            $table->string('image'); // path or URL of the photo
            $table->string('icon')->nullable(); // path or icon class
            $table->string('title'); // title of the highlight
            $table->text('description'); // longer description
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('highlights');
    }
}
