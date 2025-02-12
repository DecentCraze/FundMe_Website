<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundraisersDbTable extends Migration
{
    public function up()
    {
        // Check if the table doesn't already exist before creating it
        if (!Schema::hasTable('fundraisers_db')) {
            Schema::create('fundraisers_db', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('adhar');
                $table->enum('cause', ['personal', 'education', 'animal']);
                $table->text('reason');
                $table->decimal('maxAmount', 15, 2);
                $table->integer('days');
                $table->string('image_video');
                $table->text('message');
                $table->timestamps(); // This automatically adds created_at and updated_at columns
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('fundraisers_db');
    }
}
