<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanSubscriptionUsageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {

        Schema::table(config('rinvex.subscriptions.tables.plans'), function (Blueprint $table) {
            $table->string('tag_text')->nullable();
            $table->string('tag_text_color')->nullable();
            $table->string('tag_bg_color')->nullable();
            $table->string('sku')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table(config('rinvex.subscriptions.tables.plans'), function (Blueprint $table) {
            $table->dropColumn(['tag_text','tag_text_color','tag_bg_color','sku']);
        });

    }
}
