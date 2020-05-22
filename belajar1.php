<?php
//  koneksi DB dan Pilih Database 
$conn = mysqli_connect('localhost', 'root', '', '');
// mysqli_connect disimpan dalam sebuah variabel dengan parameter ('nama localhost', 'nama user', 'password', 'nama databse' )

// Query isi tabel mahasiswa
$query = mysqli_query($conn, "SELECT * from mahasiswa");
// mysqli_query disimpan kedalam variabel dengan parameter ("SELECT * from mahasiswa" untuk seluruh database mahasiswa)

// Ubah data dalam array
// 1. array numerik
// $row = mysqli_fetch_row($query);
// 2. array associative
// $row = mysqli_fetch_assoc($query);
// 3. array numerik dan associative
// $row = mysqli_fetch_array($query);

$rows = $row;
while ($row = mysqli_fetch_array($query)) {
    $rows[] = $row;
}
// variable rows akan diisi dengan variabel row yang mengalami looping

//Tampung ke variabel mahasiswa
$mahasiswa = $rows;
