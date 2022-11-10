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
            $table->bigInteger('fpuid')->unsigned()->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('en_name')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('role')->default(0)->nullable();
            $table->string('img')->nullable();
            $table->string('national_id')->nullable();
            $table->date('date_national_id')->nullable();
            $table->string('passport_id')->nullable();
            $table->date('date_passport_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('converted_num')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->integer('type')->nullable();
            $table->integer('religion')->nullable();
            $table->integer('relationship')->nullable();
            $table->integer('job_num')->unique()->nullable();
            $table->date('start_job_date')->nullable();
            $table->integer('mainJob_id')->nullable();
            $table->integer('subJob_id')->nullable();
            $table->string('management')->nullable();
            $table->integer('bank_id')->nullable();
            $table->string('ipan')->nullable();
            $table->integer('jobLevel')->nullable();
            $table->integer('jobPercent')->nullable();
            $table->integer('badalat')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('insurance_id')->nullable();
            $table->integer('comp_insurance_percent')->nullable();
            $table->integer('emp_insurance_percent')->nullable();
            $table->integer('contract_num')->nullable();
            $table->integer('contract_status')->default(1);
            $table->longText('contract_reason')->nullable();
            $table->string('start_contract_date')->nullable();
            $table->string('decision_point')->nullable();
            $table->string('end_contract_date')->nullable();
            $table->integer('isActive')->default(1);
            $table->integer('bonuses_id')->nullable();
            $table->string('groups_id')->nullable();
            $table->string('signature_img')->nullable();
            $table->string('notation_img')->nullable();
            $table->string('public_cost')->nullable();
            $table->integer('contract_duration');
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
