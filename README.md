# LAPORAN PROYEK AKHIR MPPL
# Nasi Pecel Mbak Mer

<p align="center">
  <img height="100" src="lnk"> <br>
  Paralel 2 - Kelompok 6
</p>


[Pendahuluan](#1-latar-belakang) | [Analysis](#2analysis) | [Dampak](#3-dampak) | [Spesifikasi](#4-spesifikasi-teknis-lingkungan-pengembangan) | [Konsep OOP](#5-konsep-oop-yang-digunakan)| [Tipe Desain](#6-tipe-desain-pengembangan-yang-digunakan) |[Hasil dan Pembahasan](#7-hasil-dan-pembahasan) | [Hasil Implementasi](#8-hasil-implementasi) | [Saran](#9-saran-untuk-pengembangan-selanjutnya) | [Developer](#10-developer-dan-jobdeks) | [Referensi](#referensi)
:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---: |:---: 

## Pendahuluan
[`^ kembali ke atas ^`](#) 

### 1. Latar Belakang
Perkembangan bisnis secara online di Indonesia sekarang terbilang cukup pesat, salah satunya ialah belanja secara online. Belanja online merupakan cara belanja lewat device atau social media untuk digunakan dalam transaksi jual beli sehingga pembeli tidak perlu repot untuk berpergian ke luar karena bisa melakukan transaksi dimanapun dan kapanpun.

Toko online atau bisa disebut e-commerce adalah sebuah perubahan kebiasaan baru dimana kita disajikan oleh internet dari segi cara penjualan yang awalnya konvensional. Dengan penjualan menggunakan toko online juga dapat memperluas market penjualan. Dengan adanya toko online ini diharapkan akan meningkatkan hasil penjualan dari sebelumnya.

Oleh karena itu, kami akan membuat sebuah sistem dimana client bisa menampilkan produk yang ingin ditampilkan serta dijual untuk meningkatkan hasil penjualan yang ada pada sebelumnya. 

### 2. Deskripsi singkat aplikasi

 <br>Aplikasi yang kami buat berupa website yang bisa menampilkan sebuah produk dengan isi dari produknya berupa foto, deskripsi produk dan juga harga dari produknya. Produknya sendiri akan dibagi dua yaitu, produk yang bisa dijual pada website dan produk yang tidak bisa dijual. Karena website ini bisa menjual produk, oleh karena itu website akan ada sistem transaksi dengan proses customer akan memilih produk yang akan dibeli, lalu menentukan kuantitas produk yang akan dibeli, lalu customer dapat memasukkan produk ke dalam keranjang , atau langsung membeli dan memproses transaksi . User disini akan dibagi dua yaitu pengguna yang ingin membeli produk dan admin yang dapat mengelola informasi dari produk yang ingin dijual dan ditampilkan, seperti mengupload, edit.

### 3. Tujuan

## 2. Analysis 
[`^ kembali ke atas ^`](#) 
### 2.1. Penjual
Sebagai seorang pengusaha saya ingin mempeluas market penjualan saya, saya ingin dapat menjual produk saya secara online.
### 2.2. Pelanggan 
Sebagai seorang pembeli, saya ingin mengetahui produk apa saja yang dijual dan informasi tentang produk yang saya beli, saya juga ingin dapat membeli produk secara online tanpa harus mengunjungi toko.


## 3. Dampak

## 4. Spesifikasi teknis lingkungan pengembangan
[`^ kembali ke atas ^`](#) 
### 4.1. Sofware
![software](https://user-images.githubusercontent.com/60083962/122145336-40e74980-ce7f-11eb-9627-ec605ea0ceac.png)

Berikut perangkat lunak yang digunakan dalam pengembangan:
* Trello
* Github
* Figma
* draw.io
* Visual Studio Code
* Chrome
* XAMPP

### 4.2. Hardware
Berikut spesifikasi laptop yang digunakan dalam pengembangan sistem:
* Processor: 
* RAM: 
* OS: 

### 4.3. Tech Stack
* Frontend : HTML, CSS, 
* Backend 
  * Programing Language : PHP
  * Framework : Laravel
  * Web Server : XAMPP
  * DBMS : MYSQL


## 5. Konsep OOP yang digunakan
[`^ kembali ke atas ^`](#) 
### Encaptulation
Encapsulation atau pengkapsulan adalah membungkus class dan menjaga propertu di dalam class tersebut supaya tidak diakses sembarangan oleh class lainnya. Encapsulation akan mempermudah dalam penggunaan suatu objek atau pembacaan kode karena informasinya sudah satu kesatuan dan tidak perlu membaca atau mengetahui secara rinci. 
Berikut adalah salah satu penerapan Encapsulation :
```
...
class homeMhsController extends Controller
{
public function detailorg($idevent){
        $data = Event::find($idevent);
        return view('detailorg',['event'=>$data] );
    }
}    
...
```
### Inheritance
Inheritance atau pewarisan adalah hubungan antara objek utama yang mewariskan attribute maupun method yang dimilikinya kepada objek baru lainnya, baik itu sebagian maupun keseluruhan. Sehingga objek baru ini akan mewarisi sifat dari objek induknya.
Berikut adalah salah satu penerapan Inheritance :
```
class Org extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'lembaga',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
```


## 6. Tipe desain pengembangan yang digunakan
[`^ kembali ke atas ^`](#) 
### Model 
Model merepresentasikan struktur data dan digunakan untuk berinteraksi dengan database. Komponen model ini bertugas untuk mengolah data seperti mendapatkan data, menyimpan data, mengedit data, dan menghapus data. Berikut adalah model yang diterapkan pada sistem IPB's Event
* Model 


### View
View merupakan User Interface dari aplikasi. View berfungsi untuk menampilkan informasi atau merepresentasikan tampilan kepada Pengguna.
Laravel memiliki fungsi Blade yang digunakan untuk menampilkan View pada pengguna.
Beriku adalah penerapan View pada Admin :
* Halaman 

Berikut adalah penerapan View pada Customer
* Halaman 

### Controller 
Controller berfungsi untuk menjebatani antara Model dengan View. Controler akan menerima dan memerespon respon yang datang dam nengubah ke dalam bentuk perintah terhadap view dan model.
Berikut adalah Controller yang diterapkan:
* Auth Controller
* 

## 7. Hasil dan Pembahasan
[`^ kembali ke atas ^`](#) 
### 7.1. Use case diagram 
Berikut adalah rancangan Use Case dari sistem yang kami kembangkan. Use Case ini terdiri dari 2 aktor yaitu Admin dan Customer
 <img src="https://user-images.githubusercontent.com/60084059/144564130-b0c9eb11-1919-4e30-b4b6-d3e24cbd7705.png">

### 7.2. Activity diagram
Berikut adalah rancangan Activity Diagram dari sistem yang kami kembangkan. Activity Diagram yang kami buat kami bagi menjadi 2 sisi, yaitu dari sisi Admin dan sisi Customer
* Admin
 <img height="800" src="https://user-images.githubusercontent.com/60084059/144564089-30921375-ecd2-4c0f-b6b5-9ef4c7102e50.png">

* Customer
 <img height="800" src="https://user-images.githubusercontent.com/60084059/144564094-f5999be2-7b22-496d-bbc8-3fd1ce3a6217.png">
 
### 7.3. Entity Relationship Diagram (ERD)
 <img height="800" src="https://user-images.githubusercontent.com/60084059/144564559-d908d8cf-62c3-42dd-bb4c-ef9b84e7c9d6.png">


### 7.4. Arsitektur Sistem
![image](https://user-images.githubusercontent.com/60084059/122150563-28c7f800-ce88-11eb-8fad-17943e36ad49.png)
- User melakukan request ke Controler
- Controler akan menghubungin Model untuk berinteraksi dengan Database
- Kemudian Controler akan merender Respon ke View 
- Kemudian terpresentasikan pada user

### 7.5 Fitur yang dikembangkan

### 7.6. Fungsi utama yang di kembangkan
Fungsi utama yang dikembangkan dari Website Pecel Mbak Mer adalah 


### 7.7. Fungsi CRUD

* Create : Admin dapat menambahkan produk yang dijual secara online dan offline
* Read : Menampilkan produk yang ditambahkan oleh admin
* Update : admin dapat mengubah dan memperbarui deskripsi dari produk yang sudah ditambahkan
* Delete : admin dapat menghapus produk yang pernah di buat

### 7.8 Desain High Fidelity

## 8. Hasil Implementasi
[`^ kembali ke atas ^`](#) 
### 8.1 
* Admin
  * Landing  



* Customer
  * Landing


## 9. Saran untuk pengembangan selanjutnya
[`^ kembali ke atas ^`](#) 
* 

## 10. Developer dan jobdeks
[`^ kembali ke atas ^`](#) 
 Nama |NIM | Jobdesk |
 :---:|:---:| :---:|
Lathifah Kurnia K | G64180023 |  |
Cristmas Anggario| G64180058 | |
Muhammad Abiyyu Habibi |  G64180066 | |
Muhammad Faishal Mumtaz |  G64180093 | |
Rakheda Andria Parastu | G64180105 | |


## Dokumentasi
[`^ kembali ke atas ^`](#) 
 <br>
* [Figma](https://www.figma.com/file/ypkxE9ihvyq8pmZzmqilsu/Website-Nasi-Pecel?node-id=0%3A1)
* [Trello](https://trello.com/b/mdtk36dC/mppl)
* [Draw,io](https://app.diagrams.net/#G1_Pj8uWUc0cxpYM3IZY9guITBzjMcST3o)


## Referensi
[`^ kembali ke atas ^`](#) 
<br>
[MVC](https://medium.com/@sagarmaheshwary31/laravel-5-8-from-scratch-intro-setup-mvc-basics-and-views-74d46f93fe0c) 
[Model](https://www.iltekkomputer.com/tutorial-laravel-5-7-part-3-cara-memahami-konsep-mvc-di-framework-laravel/) 
[MVC](https://www.codetutors.org/what-mvc-is-and-how-does-this-pattern-work-in-laravel-8/)
[MVC](https://www.niagahoster.co.id/blog/mvc-adalah)
[Konsep OOP](http://repository.uinsu.ac.id/9202/1/2.%20Suendri%20-%20Modul%20Praktikum%20PBWL%202020.pdf)
[Konsep OOP](https://glints.com/id/lowongan/oop-adalah/#.YMjzgGgza01)
[Konsep OOP - Inheritage](https://www.dicoding.com/blog/apa-itu-oop-pada-java-beserta-contohnya/)

