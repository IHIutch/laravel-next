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
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('sbl');
            $table->string('tax_district')->nullable();
            $table->text('prop_class_description')->nullable();
            $table->string('previous_property_class')->nullable();
            $table->string('owner_1')->nullable();
            $table->string('owner_2')->nullable();
            $table->string('mail_1')->nullable();
            $table->string('mail_2')->nullable();
            $table->string('mail_3')->nullable();
            $table->string('mail_4')->nullable();
            $table->string('house_number')->nullable();
            $table->string('street')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('roll')->nullable();
            $table->integer('total_value')->nullable();
            $table->integer('land_value')->nullable();
            $table->integer('sale_price')->nullable();
            $table->integer('year_built')->nullable();
            $table->string('council_district')->nullable();
            $table->string('police_district')->nullable();
            $table->string('census_tract')->nullable();
            $table->string('census_block_group')->nullable();
            $table->string('census_block')->nullable();
            $table->string('neighborhood')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->text('description_3')->nullable();
            $table->text('overall_condition_description')->nullable();
            $table->string('special_district_code')->nullable();
            $table->string('used_as_code')->nullable();
            $table->string('mail_zipcode')->nullable();
            $table->string('mail_zipcode_extension')->nullable();
            $table->string('swis');
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};
