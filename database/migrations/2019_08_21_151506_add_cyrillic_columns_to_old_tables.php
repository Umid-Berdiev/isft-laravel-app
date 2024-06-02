<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCyrillicColumnsToOldTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function ($table)
        {
            $table->string('title_oz', 255)->nullable()->after('title_uz');
            $table->text('text_oz')->nullable()->after('text_uz');
        });

        Schema::table('faqs', function ($table)
        {
            $table->string('title_oz', 255)->nullable()->after('title_uz');
            $table->text('text_oz')->nullable()->after('text_uz');
        });

        Schema::table('pages', function ($table)
        {
            $table->string('title_oz', 255)->nullable()->after('title_uz');
            $table->text('text_oz')->nullable()->after('text_uz');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function ($table)
        {
            $table->dropColumn(['title_oz']);
            $table->dropColumn(['text_oz']);
        });
        
        Schema::table('faqs', function ($table)
        {
            $table->dropColumn(['title_oz']);
            $table->dropColumn(['text_oz']);
        });
        
        Schema::table('pages', function ($table)
        {
            $table->dropColumn(['title_oz']);
            $table->dropColumn(['text_oz']);
        });
    }
}
