<?php

use App\Models\User;
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
        Schema::table('countries', function (Blueprint $table) {
            $table->foreignIdFor(User::class)
                ->after('id')
                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            // first drop the constarints first that it could covert to simple text like childtable_userid_forign keyword
            $table->dropForeign('countries_user_id_foreign');
            // then drop column which is simple text
            $table->dropColumn('user_id');
        });
    }
};
