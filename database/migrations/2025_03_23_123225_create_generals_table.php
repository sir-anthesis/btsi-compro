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
        Schema::create('generals', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('logo')->nullable(); // Company Logo
            $table->string('abt_title')->nullable(); // About Section Title
            $table->text('abt_desc')->nullable(); // About Description
            $table->string('abt_link')->nullable(); // About Link
            $table->string('abt_img')->nullable(); // About Image
            $table->string('why_title')->nullable(); // Why Choose Us Title
            $table->text('why_desc')->nullable(); // Why Choose Us Description
            $table->string('prod_title')->nullable(); // Product Section Title
            $table->text('prod_desc')->nullable(); // Product Section Description
            $table->string('contact')->nullable(); // Contact Number
            $table->string('contact_img')->nullable(); // Contact Image Number
            $table->string('email')->nullable(); // Contact Email
            $table->string('address')->nullable(); // Company Address
            $table->string('ctc_title')->nullable(); // Contact Title
            $table->string('footer_desc')->nullable(); // Footer Description
            $table->timestamps(); // Created & Updated At
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};
