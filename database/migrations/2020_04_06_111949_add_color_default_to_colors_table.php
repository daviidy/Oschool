<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColorDefaultToColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('colors', function (Blueprint $table) {
            $table->string('navbar_footer')->default('000000')->change();
            $table->string('navbar_links')->default('FFFFFF')->change();
            $table->string('navbar_links_transparent')->default('FFFFFF')->change();
            $table->string('headings')->default('000000')->change();
            $table->string('homepage_heading_subtitle')->default('4D90CC')->change();
            $table->string('course_page_heading')->default('4D90CC')->change();
            $table->string('body_text')->default('000000')->change();
            $table->string('buttons_links')->default('4D90CC')->change();
            $table->string('logo_width')->default('50');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('colors', function (Blueprint $table) {
            //
        });
    }
}
