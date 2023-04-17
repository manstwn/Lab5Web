# Lab5Web
Nama : Iman Setiawan\
NIM : 312110219\
Kelas : TI.21.A1\
Matkul : Pemograman Mobile 2

## Dasar Class
![Latihan API 1](ss/ss1.png)

<p>
Contoh membuat class mobil dan membuat fungsi2 sepert ( __construct() ) gantiWarna() dan TampilWarna(), Serta diimplementasikan membuat objek dan objek tersebut langsung di panggil.
</p>

## Tugas
![Latihan API 2](ss/ss2.png)

<p>
Membuat program CRUD sederhana dengan konsep modularisasadi pada kode program dan menggunakan class library (Form.php) dan (Database.php) yang ada pada materi
</p>

<p>
Berikut adalah program yang sudah saya buat.
</p>

![Latihan API 2](ss/ss3.png)

<p>
Menggunakan konsep 'Modularlisasi' dengan memecah bagian HTML menjadi 3 bagian yaitu header, home, dan footer. dan 'Routing' agar domain menjadi lebih singkat dari (/home.php) menjadi (/home) saja. Data yang berada di Tabel diambil menggunakan fungis gets() yang sudah ada pada Class Database
</p>

### Tambah Data
![Latihan API 2](ss/ss4.png)
<p>
Apabila di klik mengarah baris kode pada 'fungsi/tambah.php' dengan memanggil Class Database dan Form, menampilkan fungsi 'displayForm()' sebagai tampilan formulir untuk diisi dengan kolom kolom yang sesuai seperti yang ada pada database. Selanjut nya setelah form di isi, dan menekan tombol 'KIRIM' akan menjalankan baris kode pada clas 'Form' dengan fungsi 'addFields' mengumpulkan data pada array 'create' dan memasukannya ke database dengan fungsi 'insert()' yang ada pada class 'Database' kemudian kembali kehalaman /home
</p>

### Ubah Data
![Latihan API 2](ss/ss5.png)
<p>
Apabila di klik mengarah baris kode pada 'fungsi/ubah.php' cara mengirim data ke database sama seperti metode tambah, namun tabel yang kosong diisi sesuai id yang ada pada table/database yang dipilih dengan metode '$_GET['id']' dan menampilkan kedalam Form selanjutnya kembali ke halaman /home
</p>

### Hapus Data
<p>
Apabila di klik mengarah baris kode pada 'fungsi/hapus.php' menggunkan metode $_GET untuk memilih data dan menghapus data dengan menggunakan fungsi delete() yang ada pada Class Database. dan kembali ke halaman /home
  


