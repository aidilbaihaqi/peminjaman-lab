# Aplikasi Website Peminjaman Laboratorium

## Tentang Website
Aplikasi Peminjaman Laboratorium berbasis website yang dibangun dengan Laravel 11 Filament. Terdapat multi authentication yaitu user dan admin dengan permission dan view yang berbeda. Aplikasi ini dikerjakan oleh Aidil Baihaqi dan Rivandi Ismanto sebagai pemenuhan tugas akhir mata kuliah Analisis dan Perancangan Perangkat Lunak

## Fitur
- Email Notification
```bash
  Ketika admin mengubah persetujuan peminjaman laboratorium menjadi "disetujui", 
  maka masuk sebuah pesan otomatis dari sistem 
  ke email pengguna bahwa peminjaman disetujui
```

## Privilege User
- User dapat meminjam laboratorium yang tersedia
- User dapat melihat status persetujuan peminjaman laboratorium

## Privilege Admin
- Admin dapat menambah dan mengedit ketersediaan laboratorium
- Admin dapat menyetujui atau tidak peminjaman yang diajukan user
- Admin dapat mengedit status pengembalian data laboratorium 

## Entitas 
- USERS (id,nama,email,password,no_telp,jenis_kelamin,level)
- LABORATORIUM (id,nama,status)
- PEMINJAMAN (id,lab_id,user_id,tgl_pinjam,tgl_kembali,status_peminjaman,status_pengembalian)

## Jobdesc [Aidil](https://github.com/aidilbaihaqi)
- Perbaiki autentikasi register di breeze
- Tambah template dashboard tailwindcss ke view

## Jobdesc [Rivandi](https://github.com/Schartz0)
- Buat CRUD laboratorium (backend)
- Buat CRUD peminjaman (backend)