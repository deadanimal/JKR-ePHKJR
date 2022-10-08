

//manual dan standard
Schema::create('manual_dan_standards', function (Blueprint $table) {
            $table->id();
            $table->string('namaManual')->nullable();
            $table->string('failManual')->nullable();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

//hebahan
Schema::create('hebahans', function (Blueprint $table) {
            $table->id();
            $table->string('tajukHebahan')->nullable();
            $table->string('jenisHebahan')->nullable();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

//faq
Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('namaFAQ')->nullable();
            $table->string('soalanFAQ')->nullable();
            $table->text('JawapanFAQ')->nullable();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

//maklum_balas
Schema::create('maklum_balas', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('subjek')->nullable();
            $table->string('kategori')->nullable();
            $table->string('tarikhStatus')->nullable();
            $table->string('statusMaklumbalas')->nullable();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });







//peranan_projek


//gugur_projek
Schema::create('gugur_projeks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Projek::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Role::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('Ulasan')->nullable();
            $table->string('DokumenSokongan')->nullable();
            $table->timestamps();
        });

//pengesahan_pendaftaran_projek
Schema::create('pengesahan_pendaftaran_projeks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Projek::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Role::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('Pengesahan')->nullable();
            $table->timestamps();
        });

//add_new_column_to_selenggara_kriteria_penilaian
Schema::table('selenggara_kriteria_penilaians', function (Blueprint $table) {
            
            $table->string('nama_kriteria')->nullable();
            $table->string('jenis_kriteria')->nullable();
            $table->string('kategori_kriteria')->nullable();
            $table->string('kod_kriteria')->nullable();
        });


// JALAN //
// penilaian_ephjkr
Schema::create('penilaian_ephjkrs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Projek::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Peringkat::class)->nullable()->constrained()->cascadeOnDelete();
            $table->integer('jumlahMarkah')->nullable();
            $table->string('peratusan')->nullable();
            $table->string('penarafan')->nullable();
            $table->string('pengesahan')->nullable();
            $table->string('ulasan')->nullable();
            $table->string('rayuan')->nullable();
            $table->string('pengesahanRayuan')->nullable();
            $table->timestamps();
        });

//kriteria_phjkr_jalan
Schema::create('kriteria_phjkr_jalans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PenilaianEphjkr::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('jenisKategori')->nullable();
            $table->integer('markahSM1')->nullable();
            $table->integer('markahSM2')->nullable();
            $table->integer('markahSM3')->nullable();
            $table->integer('markahSM4')->nullable();
            $table->integer('markahPT1')->nullable();
            $table->integer('markahPT2')->nullable();
            $table->integer('markahPT3')->nullable();
            $table->integer('markahPT4')->nullable();
            $table->integer('markahEW1')->nullable();
            $table->integer('markahEW2')->nullable();
            $table->integer('markahAE1')->nullable();
            $table->integer('markahCA1')->nullable();
            $table->integer('markahCA2')->nullable();
            $table->integer('markahCA3')->nullable();
            $table->integer('markahCA4')->nullable();
            $table->integer('markahCA5')->nullable();
            $table->integer('markahCA6')->nullable();
            $table->integer('markahCA7')->nullable();
            $table->integer('markahMR1')->nullable();
            $table->integer('markahMR2')->nullable();
            $table->integer('markahMR3')->nullable();
            $table->integer('markahMR4')->nullable();
            $table->integer('markahSM5EC')->nullable();
            $table->integer('markahSM6EC')->nullable();
            $table->integer('markahEW3EC')->nullable();
            $table->integer('markahAE2EC')->nullable();
            $table->integer('markahAE3EC')->nullable();
            $table->integer('markahAE4EC')->nullable();
            $table->integer('markahAE5EC')->nullable();
            $table->integer('markahAE6EC')->nullable();
            $table->integer('markahINI')->nullable();
            $table->timestamps();
        });

//pemudah_caras
Schema::create('pemudah_caras', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('syarikat_cawangan')->nullable();
            $table->string('no_tel')->nullable();
            $table->string('no_fax')->nullable();
            $table->string('email')->nullable();
            $table->string('disiplin')->nullable();
            $table->foreignIdFor(Projek::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('kategori')->nullable();
            $table->timestamps();
        });





