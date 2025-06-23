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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('login_type')->default(0)->after('status');
            $table->integer('seller_status')->default(0)->after('login_type');
            $table->integer('buyer_status')->default(0)->after('seller_status');
            $table->char('cnic')->default('')->after('login_type');
            $table->char('contact_number')->unique()->after('cnic');
            $table->integer('contact_number_verified')->default(0)->after('contact_number');
            $table->string('last_otp_number')->default('')->after('contact_number');
            $table->string('business_username')->unique()->default('null')->after('cnic');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            
        });
    }
};
