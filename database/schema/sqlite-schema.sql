CREATE TABLE IF NOT EXISTS "migrations"(
  "id" integer primary key autoincrement not null,
  "migration" varchar not null,
  "batch" integer not null
);
CREATE TABLE IF NOT EXISTS "users"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "email" varchar not null,
  "email_verified_at" datetime,
  "password" varchar not null,
  "remember_token" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "users_email_unique" on "users"("email");
CREATE TABLE IF NOT EXISTS "password_reset_tokens"(
  "email" varchar not null,
  "token" varchar not null,
  "created_at" datetime,
  primary key("email")
);
CREATE TABLE IF NOT EXISTS "sessions"(
  "id" varchar not null,
  "user_id" integer,
  "ip_address" varchar,
  "user_agent" text,
  "payload" text not null,
  "last_activity" integer not null,
  primary key("id")
);
CREATE INDEX "sessions_user_id_index" on "sessions"("user_id");
CREATE INDEX "sessions_last_activity_index" on "sessions"("last_activity");
CREATE TABLE IF NOT EXISTS "cache"(
  "key" varchar not null,
  "value" text not null,
  "expiration" integer not null,
  primary key("key")
);
CREATE INDEX "cache_expiration_index" on "cache"("expiration");
CREATE TABLE IF NOT EXISTS "cache_locks"(
  "key" varchar not null,
  "owner" varchar not null,
  "expiration" integer not null,
  primary key("key")
);
CREATE INDEX "cache_locks_expiration_index" on "cache_locks"("expiration");
CREATE TABLE IF NOT EXISTS "jobs"(
  "id" integer primary key autoincrement not null,
  "queue" varchar not null,
  "payload" text not null,
  "attempts" integer not null,
  "reserved_at" integer,
  "available_at" integer not null,
  "created_at" integer not null
);
CREATE INDEX "jobs_queue_index" on "jobs"("queue");
CREATE TABLE IF NOT EXISTS "job_batches"(
  "id" varchar not null,
  "name" varchar not null,
  "total_jobs" integer not null,
  "pending_jobs" integer not null,
  "failed_jobs" integer not null,
  "failed_job_ids" text not null,
  "options" text,
  "cancelled_at" integer,
  "created_at" integer not null,
  "finished_at" integer,
  primary key("id")
);
CREATE TABLE IF NOT EXISTS "failed_jobs"(
  "id" integer primary key autoincrement not null,
  "uuid" varchar not null,
  "connection" varchar not null,
  "queue" varchar not null,
  "payload" text not null,
  "exception" text not null,
  "failed_at" datetime not null default CURRENT_TIMESTAMP
);
CREATE INDEX "failed_jobs_connection_queue_failed_at_index" on "failed_jobs"(
  "connection",
  "queue",
  "failed_at"
);
CREATE UNIQUE INDEX "failed_jobs_uuid_unique" on "failed_jobs"("uuid");
CREATE TABLE IF NOT EXISTS "articles"(
  "id" integer primary key autoincrement not null,
  "title" varchar not null,
  "slug" varchar not null,
  "category" varchar not null default 'Berita',
  "thumbnail" varchar,
  "excerpt" text,
  "content" text not null,
  "published_at" datetime,
  "is_published" tinyint(1) not null default '1',
  "views" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "articles_slug_unique" on "articles"("slug");
CREATE TABLE IF NOT EXISTS "defense_schedules"(
  "id" integer primary key autoincrement not null,
  "student_name" varchar not null,
  "student_id" varchar not null,
  "type" varchar not null,
  "title" text not null,
  "supervisor_1" varchar not null,
  "supervisor_2" varchar,
  "examiner_1" varchar,
  "examiner_2" varchar,
  "room" varchar not null,
  "date_time" datetime not null,
  "status" varchar not null default 'Terjadwal',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "penelitians"(
  "id" integer primary key autoincrement not null,
  "judul" varchar not null,
  "penulis" text not null,
  "nama_jurnal" varchar not null,
  "volume" varchar,
  "terbitan" varchar,
  "index_type" varchar not null default 'SINTA',
  "index_detail" varchar,
  "eyebrow" varchar,
  "tahun" integer,
  "doi_label" varchar,
  "doi_url" varchar,
  "cover" varchar,
  "cover_alt" varchar,
  "article_id" varchar,
  "is_published" tinyint(1) not null default '1',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "bukus"(
  "id" integer primary key autoincrement not null,
  "judul" varchar not null,
  "penulis" varchar not null,
  "penulis_route" varchar,
  "kategori" varchar not null default 'non-fiksi',
  "label" varchar,
  "tahun" integer,
  "isbn" varchar,
  "cover" varchar,
  "is_published" tinyint(1) not null default '1',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "pengabdians"(
  "id" integer primary key autoincrement not null,
  "judul" varchar not null,
  "penulis" text not null,
  "nama_jurnal" varchar not null,
  "volume" varchar,
  "terbitan" varchar,
  "index_type" varchar not null default 'PKM',
  "index_detail" varchar,
  "eyebrow" varchar,
  "tahun" integer,
  "doi_label" varchar,
  "doi_url" varchar,
  "cover" varchar,
  "cover_alt" varchar,
  "article_id" varchar,
  "is_published" tinyint(1) not null default '1',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "prestasis"(
  "id" integer primary key autoincrement not null,
  "judul" varchar not null,
  "mahasiswa" varchar,
  "kategori" varchar not null default 'lomba',
  "label_meta" varchar,
  "tingkat" varchar,
  "tahun" integer,
  "penyelenggara" varchar,
  "deskripsi" text,
  "foto" varchar,
  "link_url" varchar,
  "is_published" tinyint(1) not null default '1',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "dosens"(
  "id" integer primary key autoincrement not null,
  "slug" varchar not null,
  "nama" varchar not null,
  "kbk" varchar not null default 'struktur',
  "profile_route" varchar,
  "foto" varchar,
  "urutan" integer not null default '0',
  "is_published" tinyint(1) not null default '1',
  "created_at" datetime,
  "updated_at" datetime,
  "badge_peran" varchar,
  "jabatan_akademik" varchar,
  "jabatan_fungsional" varchar,
  "nidn" varchar,
  "homebase" varchar,
  "email" varchar,
  "telepon" varchar,
  "cv_file" varchar,
  "meta_description" text,
  "biografi" text,
  "fokus_label_style" varchar,
  "tautan_riset" text,
  "ringkasan_statistik" text,
  "fokus_keahlian" text,
  "pendidikan" text,
  "keahlian_grup" text,
  "pengalaman_kerja" text,
  "penghargaan" text,
  "pelatihan" text,
  "pengajaran" text,
  "publikasi" text,
  "konferensi" text,
  "pengabdian_list" text,
  "roadmap" text,
  "bagian_tambahan" text,
  "urutan_bagian" text,
  "kata_kunci_riset" text,
  "sinkron_penelitian" tinyint(1) not null default '1',
  "sinkron_pengabdian" tinyint(1) not null default '1'
);
CREATE UNIQUE INDEX "dosens_slug_unique" on "dosens"("slug");
CREATE TABLE IF NOT EXISTS "site_settings"(
  "id" integer primary key autoincrement not null,
  "mahasiswa_aktif" integer not null default '567',
  "total_lulusan" integer not null default '1186',
  "prestasi_mahasiswa" integer not null default '80',
  "aktivitas_dosen" integer not null default '264',
  "kaprodi_nama" varchar not null default 'Andhy Romdani, S.T., M.Eng., Ph.D.',
  "kaprodi_jabatan" varchar not null default 'Ketua Program Studi Teknik Sipil',
  "kaprodi_foto" varchar,
  "kaprodi_kutipan" varchar,
  "kaprodi_sambutan" text,
  "akreditasi_peringkat" varchar not null default 'BAIK',
  "akreditasi_lembaga" varchar not null default 'LAM Teknik(Keteknikan)',
  "akreditasi_sk" varchar not null default '0182/SK/LAM Teknik/AS/VIII/2023',
  "akreditasi_berlaku" varchar not null default '21 Agustus 2023 - 20 Agustus 2028',
  "kontak_email" varchar not null default 'sipil@unsil.ac.id',
  "jam_layanan" varchar not null default 'Senin s.d. Jumat, 07.30 - 16.00 WIB',
  "created_at" datetime,
  "updated_at" datetime
);

INSERT INTO migrations VALUES(1,'0001_01_01_000000_create_users_table',1);
INSERT INTO migrations VALUES(2,'0001_01_01_000001_create_cache_table',1);
INSERT INTO migrations VALUES(3,'0001_01_01_000002_create_jobs_table',1);
INSERT INTO migrations VALUES(4,'2026_11_24_065844_create_articles_table',2);
INSERT INTO migrations VALUES(5,'2026_11_24_070012_create_documents_table',2);
INSERT INTO migrations VALUES(6,'2026_11_24_070025_create_defense_schedules_table',2);
INSERT INTO migrations VALUES(7,'2026_11_25_042037_create_penelitians_table',3);
INSERT INTO migrations VALUES(8,'2026_11_25_042038_create_bukus_table',3);
INSERT INTO migrations VALUES(9,'2026_11_25_042038_create_pengabdians_table',3);
INSERT INTO migrations VALUES(10,'2026_11_25_042038_create_prestasis_table',3);
INSERT INTO migrations VALUES(11,'2026_11_25_043056_create_dosens_table',3);
INSERT INTO migrations VALUES(12,'2026_11_25_131000_drop_documents_table',4);
INSERT INTO migrations VALUES(13,'2026_11_25_132000_create_site_settings_table',5);
INSERT INTO migrations VALUES(14,'2026_11_26_120000_add_cv_profile_fields_to_dosens_table',6);
