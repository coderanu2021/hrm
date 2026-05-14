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
        Schema::create('employee_details', function (Blueprint $table) {

        $table->id();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->string('first_name');
        $table->string('last_name');
        $table->enum('gender', ['1', '2', '3']);
        $table->date('dob');
        $table->string('marital_status');
        $table->string('guardian_name');
        $table->string('profile_photo')->nullable();
        $table->date('joining_date');
        $table->string('reporting_manager');
        $table->string('additional_manager');
        $table->unsignedBigInteger('job_role');
        $table->string('company');
        $table->string('location');
        $table->unsignedBigInteger('department');
        $table->string('adhar_num');
        $table->string('name_as_per_adhar');
        $table->string('pan_num');
        $table->string('name_as_per_pan');
        $table->enum('emp_type', ['full_time', 'on_contract']);
        $table->string('nationality');
        $table->timestamps();
});
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
