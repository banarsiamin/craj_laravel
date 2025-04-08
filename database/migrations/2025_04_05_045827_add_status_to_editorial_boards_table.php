<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\EditorialBoard;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('editorial_boards', function (Blueprint $table) {
            $table->string('status')->default(EditorialBoard::STATUS_PENDING)->after('photo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('editorial_boards', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
