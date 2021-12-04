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

### Latar Belakang
Perkembangan bisnis secara online di Indonesia sekarang terbilang cukup pesat, salah satunya ialah belanja secara online. Belanja online merupakan cara belanja lewat device atau social media untuk digunakan dalam transaksi jual beli sehingga pembeli tidak perlu repot untuk berpergian ke luar karena bisa melakukan transaksi dimanapun dan kapanpun.

Toko online atau bisa disebut e-commerce adalah sebuah perubahan kebiasaan baru dimana kita disajikan oleh internet dari segi cara penjualan yang awalnya konvensional. Dengan penjualan menggunakan toko online juga dapat memperluas market penjualan. Dengan adanya toko online ini diharapkan akan meningkatkan hasil penjualan dari sebelumnya.

Oleh karena itu, kami akan membuat sebuah sistem dimana client bisa menampilkan produk yang ingin ditampilkan serta dijual untuk meningkatkan hasil penjualan yang ada pada sebelumnya. 

### Deskripsi singkat aplikasi

 <br>Aplikasi yang kami buat berupa website yang bisa menampilkan sebuah produk dengan isi dari produknya berupa foto, deskripsi produk dan juga harga dari produknya. Produknya sendiri akan dibagi dua yaitu, produk yang bisa dijual pada website dan produk yang tidak bisa dijual. Karena website ini bisa menjual produk, oleh karena itu website akan ada sistem transaksi dengan proses customer akan memilih produk yang akan dibeli, lalu menentukan kuantitas produk yang akan dibeli, lalu customer dapat memasukkan produk ke dalam keranjang , atau langsung membeli dan memproses transaksi . User disini akan dibagi dua yaitu pengguna yang ingin membeli produk dan admin yang dapat mengelola informasi dari produk yang ingin dijual dan ditampilkan, seperti mengupload, edit.

### Tujuan
Tujuan pengembangan website ini adalah untuk memperluas pasar dari client kami ke ranah daring/online sehingga penjualannya akan meningkat dibanding sebelumnya
Terdapatnya katalog online berupa website yang dapat diakses oleh pelanggan Mbak Merr dengan mudah dan leluasa.

## Analysis User
[`^ kembali ke atas ^`](#) 
### Penjual
Sebagai seorang pengusaha saya ingin mempeluas market penjualan saya, saya ingin dapat menjual produk saya secara online.
### Pelanggan 
Sebagai seorang pembeli, saya ingin mengetahui produk apa saja yang dijual dan informasi tentang produk yang saya beli, saya juga ingin dapat membeli produk secara online tanpa harus mengunjungi toko.


## Spesifikasi teknis lingkungan pengembangan
[`^ kembali ke atas ^`](#) 
### Sofware
![software](https://user-images.githubusercontent.com/60083962/122145336-40e74980-ce7f-11eb-9627-ec605ea0ceac.png)

Berikut perangkat lunak yang digunakan dalam pengembangan:
* Trello
* Github
* Figma
* draw.io
* Visual Studio Code
* Chrome
* XAMPP

### Hardware
Berikut spesifikasi laptop yang digunakan dalam pengembangan sistem:
* Processor: Intel Corei5
* RAM: 8 Gb
* OS: Window 10

### Tech Stack
* Frontend : HTML, CSS, Bootstrap
* Backend 
  * Programing Language : PHP
  * Framework : Laravel
  * Web Server : XAMPP
  * DBMS : MYSQL


## Hasil dan Pembahasan
[`^ kembali ke atas ^`](#) 
### Use case diagram 
Berikut adalah rancangan Use Case dari sistem yang kami kembangkan. Use Case ini terdiri dari 2 aktor yaitu Admin dan Customer
 <img src="https://user-images.githubusercontent.com/60084059/144564130-b0c9eb11-1919-4e30-b4b6-d3e24cbd7705.png">

### Activity diagram

Berikut adalah rancangan Activity Diagram memodelkan proses dari sistem yang kami kembangkan. Activity Diagram yang kami buat kami bagi menjadi 2 sisi, yaitu dari sisi Admin dan sisi Customer
* Admin
 <img height="800" src="https://user-images.githubusercontent.com/60084059/144564089-30921375-ecd2-4c0f-b6b5-9ef4c7102e50.png">

* Customer
 <img height="800" src="https://user-images.githubusercontent.com/60084059/144564094-f5999be2-7b22-496d-bbc8-3fd1ce3a6217.png">
 
### Entity Relationship Diagram (ERD)
yang digunakan untuk merancang untuk membuat database,
 <img height="800" src="https://user-images.githubusercontent.com/60084059/144564559-d908d8cf-62c3-42dd-bb4c-ef9b84e7c9d6.png">

### Class Diagram
 menggambarkan struktur sebuah sistem pemrograman

### 7.4. Arsitektur Sistem
![image](https://user-images.githubusercontent.com/60084059/122150563-28c7f800-ce88-11eb-8fad-17943e36ad49.png)
- User melakukan request ke Controler
- Controler akan menghubungin Model untuk berinteraksi dengan Database
- Kemudian Controler akan merender Respon ke View 
- Kemudian terpresentasikan pada user

### Fitur yang dikembangkan

### Fungsi utama yang di kembangkan
Fungsi utama yang dikembangkan dari Website Pecel Mbak Mer adalah menampilkan produk yang dijual oleh toko.


### Fungsi CRUD

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
ss masukin deh



* Customer
  * Landing


## 9. Saran untuk pengembangan selanjutnya
[`^ kembali ke atas ^`](#) 
* 

## 10. Our Team
[`^ kembali ke atas ^`](#) 
 Nama |NIM | 
 :---:|:---:| 
Lathifah Kurnia K | G64180023 |  
Cristmas Anggario| G64180058 | 
Muhammad Abiyyu Habibi |  G64180066 | 
Muhammad Faishal Mumtaz |  G64180093 | 
Rakheda Andria Parastu | G64180105 | 


## Dokumentasi
[`^ kembali ke atas ^`](#) 
 <br>
* [Figma](https://www.figma.com/file/ypkxE9ihvyq8pmZzmqilsu/Website-Nasi-Pecel?node-id=0%3A1)
* [Trello](https://trello.com/b/mdtk36dC/mppl)
* [Draw,io](https://app.diagrams.net/#G1_Pj8uWUc0cxpYM3IZY9guITBzjMcST3o)

