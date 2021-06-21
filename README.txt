--------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------
-------------------------------------------------HALO, SELAMAT DATANG-----------------------------------------------
--------------------------------------------------------------------------------------------------------------------
Ada beberapa hal yang perlu Anda lakukan sebelum menjalankan program, yaitu :
1. Buka terlebih dahulu aplikasi Xampp yang telah terpasang di laptop anda
2. Lalu klik start pada Apache dan MySql
3. Lalu ketiklah http://localhost/phpmyadmin/ di google ataupun browser lainnya.
4. Setelah terbuka PhpMyadmin di browser anda, maka buatlah database baru dengan nama "db_(sesuai phpnya)"
contoh: "db_rumah.com"
5. Setelah itu, import data file yang berbentuk .sql ke dalam database di PhpMyadmin tersebut (db_rumah_com.sql)
6. Lalu pindahkan folder web ini ke Local Disk C: >> xampp >> htdocs
7. Lalu run web ini dengan cara buka browser lalu ketik http://localhost/rumah.com/login.php 
8. Setelah itu akan terbuka websitenya
9. Selesai.

--------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------
----------------------------------------------- FILE WEBSITE RUMAH.COM ---------------------------------------------
--------------------------------------------------------------------------------------------------------------------
Terkait dengan codingan website rumah.com ini, menggunakan php, sql, dan lainnya (lebih detail pada folder rumah.com). 
	A. 	Folder rumah.com -> Folder assets -> Folder config -> isinya file .sql (koneksi ke database dan 
		juga file databasenya)
	B. 	Folder rumah.com -> Folder assets -> Folder css -> isinya file css (style.css)
	C. 	Folder rumah.com -> Folder assets -> Folder fonts -> isinya file font tulisan yang digunakan pada web
	D. 	Folder rumah.com -> Folder assets -> Folder images -> isinya file gambar yang digunakan pada website
	E. 	Folder rumah.com -> Folder assets -> Folder js -> isinya file javascript
	F. 	Folder rumah.com -> Folder assets -> Folder pages -> isinya semua code program. File yang ada di luar 
		Folder admin tersebut adalah untuk pembeli, sedangkan folder admin tersebut adalah untuk admin, agen, 
		dan pemilik rumah. 
	G. 	Folder rumah.com -> Folder assets -> Folder plugins -> isinya file pendukung website, dan di folder ini
		terdapat css, js, serta image-nya

--------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------
----------------------------------------------- ALUR WEBSITE RUMAH.COM ---------------------------------------------
--------------------------------------------------------------------------------------------------------------------
Inilah alur website Rumah.com, antara lain :
1. Sebelum memasuki website Rumah.com, user harus membuat akun
2. Masukkan data diri yang diperlukan dalam website untuk membuat akun, dan tidak boleh ada yang kosong, 
dan klik BUAT AKUN
3. Setelah memiliki akun, maka user bisa masuk dengan email dan katasandi yang telah dibuat, dan klik MASUK
4. Setelah langkah (1), (2), dan (3) dilakukan, maka akan menuju halaman Beranda Website (sesuai dengan jenis Pengguna)
5. Setiap user memiliki halaman beranda yang isinya berbeda-beda dan memiliki batasan akses
	A. PEMILIK RUMAH: 
		- Bisa melakukan Buat Akun dan "Masuk" atau Login ke website rumah.com
		- Hanya bisa melihat daftar properti (rumah) yang dimiliki beserta detailnya
		- Bisa mengganti foto profil
		- Bisa melakukan Print, Copy, Exel, CSV, dan PDF Data Rumah 
		- Bisa Logout dari website rumah.com
	B. ADMIN WEBSITE: 
		- Bisa melakukan Buat Akun dan "Masuk" atau Login ke website rumah.com
		- Hanya bisa melihat, mengedit, dan menghapus Data Agen
		- Bisa mengganti foto profil
		- Hanya bisa melihat dan menghapus Data Rumah
		- Bisa melakukan Print, Copy, Exel, CSV, dan PDF Data Rumah dan Data Agen
		- Bisa Logout dari website rumah.com
	C. AGEN RUMAH:
		- Bisa melakukan Buat Akun dan "Masuk" atau Login ke website rumah.com
		- Bisa mengganti foto profil
		- Bisa menambahkan Data Rumah 
		- Bisa meng-update status rumah menjadi Terjual
		- Hanya bisa melihat, mengedit, dan menghapus Data Rumah
		- Bisa melakukan Print, Copy, Exel, CSV, dan PDF Data Rumah 
		- Bisa Logout dari website rumah.com
	D. PEMBELI RUMAH:
		- Bisa melakukan Buat Akun dan "Masuk" atau Login ke website rumah.com
		- Bisa mengganti foto profil
		- Bisa cari Agen Rumah dan menghubungi Agen tersebut
		- Bisa melihat rekomendasi Rumah
		- Bisa melihat rumah dan detailnya, dan langsung menghubungi Agen Rumah tersebut
		- Bisa Logout dari website rumah.com
6. Setelah melihat-lihat dan selesai menggunakan website Rumah.com, maka user diperkenankan untuk Keluar dari akun
7. Keluar dari akun user saat ini dengan cara klik menu Logout pada pojok kanan atas pada halaman website
8. Selesai.

--------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------
----------------------------------------------- LINK GITHUB WEBSITE RUMAH.COM --------------------------------------
--------------------------------------------------------------------------------------------------------------------
Inilah Link Github Kelompok kami (rumah.com):

https://github.com/MegaKusumaGithub23/rumah.com


SEKIAN.
TERIMA KASIH.