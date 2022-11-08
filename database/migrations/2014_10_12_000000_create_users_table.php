<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('en_name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->default(0);
            $table->string('img')->nullable();
            $table->string('national_id');
            $table->date('date_national_id');
            $table->string('passport_id');
            $table->date('date_passport_id');
            $table->integer('country_id');
            $table->integer('converted_num');
            $table->date('birth_date');
            $table->string('address');
            $table->integer('type');
            $table->integer('religion');
            $table->integer('relationship');
            $table->integer('job_num')->unique();
            $table->date('start_job_date');
            $table->integer('mainJob_id');
            $table->integer('subJob_id');
            $table->integer('management');
            $table->integer('bank_id');
            $table->integer('ipan');
            $table->integer('jobLevel');
            $table->integer('jobPercent');
            $table->integer('badalat');
            $table->integer('category_id');
            $table->integer('insurance_id');
            $table->integer('comp_insurance_percent');
            $table->integer('emp_insurance_percent');
            $table->integer('contract_num')->unique();
            $table->date('start_contract_date')->nullable();
            $table->string('decision_point')->nullable();
            $table->date('end_contract_date')->nullable();
            $table->integer('isActive')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
