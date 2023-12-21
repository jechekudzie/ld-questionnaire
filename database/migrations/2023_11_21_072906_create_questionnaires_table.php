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
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('mission')->nullable();
            $table->string('vision')->nullable();
            $table->text('products_services')->nullable();
            $table->text('goals_objectives')->nullable();
            $table->text('audience_profile')->nullable();
            $table->text('design_inspirations')->nullable();
            $table->text('branding_preferences')->nullable();
            $table->text('custom_features')->nullable();
            $table->text('third_party_integrations')->nullable();
            $table->text('content_management_needs')->nullable();
            $table->text('traffic_strategies')->nullable();
            $table->text('budget_timeline')->nullable();
            $table->text('maintenance_needs')->nullable();
            $table->text('seo_requirements')->nullable();
            $table->text('digital_marketing_services')->nullable();
            $table->text('compliance_security')->nullable();
            $table->text('additional_requirements')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionnaires');
    }
};
