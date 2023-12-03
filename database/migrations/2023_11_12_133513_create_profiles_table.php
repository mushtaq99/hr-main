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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->constrained()->cascadeOnDelete()->cascadeOnUpdate();;
            $table->string('mobile_no');
            $table->string('alternate_mobile_no');
            $table->string('cnic');
            $table->enum('gender',['male','female']);
            $table->date('date_of_birth');
            $table->enum('marital_status',['married','single']);
            $table->string('father_name');
            $table->string('spouse_name');
            $table->string('spouse_cnic');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {



        Schema::create('profiles', function (Blueprint $table) {
            $table->dropForeign('profiles_user_id_foreign');
            $table->dropColumn('user_id');
        });

    }
};
