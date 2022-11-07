CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT, 
    kode CHAR (4) NOT NULL,
    nama VARCHAR (50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR (8) NOT NULL,
    nama VARCHAR (50) NOT NULL,
    jenis_kelamin enum('laki-laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR (50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat Varchar (255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- cara ngambil/lihat data
    select * from mahasiswa;

-- cara nambahin data
    insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) value (1, "20220001", "Lazlo", "laki-laki","Jakarta", "2000-07-15", "Jl. Cipete 10");

-- cara lihat ada apa aja di tabel 
    desc mahasiswa;

--cara buat data
    CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR (8) NOT NULL,
    nama VARCHAR (50) NOT NULL,
    jenis_kelamin enum('laki-laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR (50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat Varchar (255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

--cara ngubah data
    update mahasiswa set alamat = jl. ngurah 9 where id = 2;

-- cara hapus tabel
    drop tabel mahasiswa;

-- cara hapus data keseluruhan 
    delete from mahasiswa;
    
-- cara hapus salah satu data
    delete from mahasiswa where id = 2;