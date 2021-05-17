<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $default_image='/image/defaultimage.png';
            $table->id();
            $table->string('NameVacancy');
            $table->string('NameCompany');
            $table->text('ScopeCompany')->nullable();
            $table->string('ActivityCompany')->nullable();
            $table->string('WebsiteCompany')->nullable();
            $table->string( 'NumberCompany');
            $table->string('EmailCompany');
            $table->string('LogoCompany')->default($default_image);
            $table->text('VacancyDescription');
            $table->boolean('Approved')->default(False);
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
        Schema::dropIfExists('vacancies');
    }
}
