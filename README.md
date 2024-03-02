# jawabanassesmenttest-homenet-dev

Task
Sebuah perusahaan ingin membuat aplikasi web untuk mengelola data karyawannya. Aplikasi ini akan memiliki fitur-fitur berikut
Data Karyawan
•	Menampilkan daftar karyawan
•	Menambah karyawan baru
•	Mengubah data karyawan
•	Menghapus karyawan
Penggajian
•	Menghitung Gaji Karyawan
•	Mencetak slip gaji

![adw](https://github.com/DwinSky/jawabanassesmenttest-homenet-dev/assets/113435712/2cf519e2-a7f7-4fed-99d8-78941205f02b)


Jawaban :
 
Gambar diatas merupakan desain OOP dengan menggunakan diagram UML yang dibuat menggunakan Visual Paradigm.
Terlihat pada gambar diatas menggambarkan sebuah class diagram dari aplikasi yang ingin dibuat oleh sebuah perusahaan untuk mengelola data karyawan serta melakukan proses penggajian.
Terdapat beberapa kelas dari diagram diatas yaitu :

1.	Kelas Administrator
Pada kelas ini terdapat entity yaitu administrator atau admin yang dapat melakukan berbagai operasi pada aplikasi seperti melakukan proses login, logout, menambahkan data, mengedit data, serta menghapus data karyawan. Adapun atribut dari kelas ini sebagai berikut :

![image](https://github.com/DwinSky/jawabanassesmenttest-homenet-dev/assets/113435712/495735b8-4f93-403d-aeb1-2fac6f12a7a4)

2.	Kelas Karyawan
Pada kelas ini terdapat entity yaitu karyawan yang menampilkan data dari karyawan pada aplikasi, kelas ini memiliki beberapa operasi sebagai berikut yaitu menampilkan daftar karyawan, menampilkan detail dari data karyawan, menambahkan data, mengedit data, serta menghapus data karyawan yang dapat dilakukan oleh admin. Adapun atribut dari kelas ini sebagai berikut :

![image](https://github.com/DwinSky/jawabanassesmenttest-homenet-dev/assets/113435712/2c8f39aa-98cf-4df2-a74b-a7d696c09d79)

3.	Kelas Gaji
Pada kelas ini terdapat entity yaitu gaji, yang dimana kelas ini dapat menampilkan detail gaji dari data karyawan yang dipilih. Adapun atribut dari kelas ini sebagai berikut :

![image](https://github.com/DwinSky/jawabanassesmenttest-homenet-dev/assets/113435712/556bf14b-6553-43d1-b524-74bb18570c3b)

4.	Kelas Slip Gaji
Pada kelas ini terdapat entity yaitu slip gaji. Pada entity ini terdapat beberapa operasi yang dapat dilakukan yaitu menampilkan data gaji berdasarkan periode tertentu, melakukan perhitungan dari kelas gaji sebelumnya, dan memproses pencetakan slip gaji. Adapun atribut dari kelas ini sebagai berikut :

![image](https://github.com/DwinSky/jawabanassesmenttest-homenet-dev/assets/113435712/5d6b92d4-afe7-489f-b93c-a2612ce24ced)

2. Berikut ini penjelasan dari hubungan antar kelas sebagai berikut :
1.	Antara kelas Administrator dengan kelas Karyawan memiliki hubungan yaitu asosiasi, dimana 1 admin dapat melihat dan mengelola 1 atau lebih dari data karyawan (1..*)
2.	Antara kelas Adminstrator dengan kelas Slip Gaji memiliki hubungan yaitu asosiasi, dimana 1 admin dapat melakukan kelola dan pencetakan 1 atau lebih slip gaji (1..*)
3.	Antara kelas Karyawan dengan kelas Gaji memiliki hubungan asosiasi, yaitu 1 data karyawan memiliki 1 atau lebih data gaji seperti gaji bersih, gaji kotor, gaji lembur dan lainnya (1..*)
4.	Antara kelas Gaji dengan kelas Slip Gaji memiliki hubungan komposisi, yaitu setiap objek yang dimiliki oleh slip gaji memiliki daftar dari gaji yang terkait.

