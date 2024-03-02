<?php
$host  = "localhost";
$user  = "root";
$pass  = "";
$db    = "datakaryawan";

$connection  = mysqli_connect($host,$user,$pass,$db);
$result = mysqli_query($connection , "SELECT * FROM karyawan ORDER BY id DESC");
?>

<html>
<head>
    <title?> Data Karyawan </title>
</head>

<body>
<br/><br/>
    <a href="tambahdata.php">Tambah User Baru</a><br/><br/>
    <table width='80%' border=1>

    <tr>
        <th>NIK</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>No Telepon</th>
        <th>Posisi</th>
        <th>Gaji Pokok</th>
</tr>

<?php
while($data_karyawan = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$data_karyawan['nik']."</td>";
    echo "<td>".$data_karyawan['nama']."</td>";
    echo "<td>".$data_karyawan['alamat']."</td>";
    echo "<td>".$data_karyawan['jenis_kelamin']."</td>";
    echo "<td>".$data_karyawan['no_telp']."</td>";
    echo "<td>".$data_karyawan['posisi']."</td>";
    echo "<td>".$data_karyawan['gaji_pokok']."</td></tr>";
}
?>
</table>
</body>
</html>






