<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('nric')->nullable();
            $table->string('nama_syarikat')->nullable();
            $table->string('nama_cawangan')->nullable();
            $table->text('alamat_syarikat')->nullable();
            $table->text('alamat_cawangan')->nullable();
            $table->string('daerah')->nullable();
            $table->string('negeri')->nullable();
            $table->string('tel_mobile')->nullable();
            $table->string('tel_land')->nullable();
            $table->string('tel_fax')->nullable();
            $table->string('sijil_kompeten')->nullable();
            $table->string('kelayakan_akademik')->nullable();
            $table->string('status_akaun')->nullable();

        });

        Schema::table('projeks', function (Blueprint $table) {

            $table->string('id_skala')->nullable();
            $table->string('nama')->nullable();
            $table->text('alamat')->nullable();
            $table->integer('poskod')->nullable();
            $table->string('bandar')->nullable();
            $table->string('negeri')->nullable();
            $table->string('keluasan_tapak')->nullable();
            $table->integer('jumlah_blok_bangunan')->nullable();
            $table->string('kategori_bangunan')->nullable();
            $table->string('dokumen_sokongan')->nullable();
            $table->string('tarikh')->nullable();
            $table->string('tarikh_jangka_mula_pembinaan')->nullable();
            $table->string('tarikh_jangka_siap_pembinaan')->nullable();
            $table->string('kaedah_pelaksanaan')->nullable();
            $table->string('jenis_pelaksanaan')->nullable();
            $table->integer('kos_projek')->nullable();
            $table->string('jenis_projek')->nullable();

            $table->string('ulasan_gugur')->nullable();
            $table->string('dokumen_gugur')->nullable();
            $table->string('jenis_kategori_projek')->nullable();
            $table->string('tempoh_sijil')->nullable();
            $table->integer('jarak')->nullable();

            $table->string('status')->nullable();

        });    
        
        Schema::create('projek_roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projek_id')->nullable()->constrained('projeks')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignId('role_id')->nullable()->constrained('roles')->cascadeOnDelete();
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
        //
    }
};
