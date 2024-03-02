<?php
$host  = "localhost";
$user  = "root";
$pass  = "";
$db    = "datakaryawan";

$connection  = mysqli_connect($host,$user,$pass,$db);
?>

<html>
<head>
	<title>Tambah Data</title>
</head>
 
<body>
	<a href="index.php">Kembali</a>
	<br/><br/>
 
	<form action="tambahdata.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>NIK</td>
				<td><input type="text" name="nik"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
            <tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
            <tr> 
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
			</tr>
            <tr> 
				<td>No Telepon</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
            <tr> 
				<td>Posisi</td>
				<td><input type="text" name="posisi"></td>
			</tr>
            <tr> 
				<td>Gaji Pokok</td>
				<td><select name="gaji_pokok">
                    <option value="500000">Rp.500.000</option>
                    <option value="1000000">Rp.1.000.000</option>
                    <option value="2000000">Rp.2.000.000</option>
                    <option value="3000000">Rp.3.000.000</option>
        
                </td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<?php
 
	if(isset($_POST['Submit'])) {
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_telp = $_POST['no_telp'];
        $posisi = $_POST['posisi'];
        $gaji_pokok = $_POST['gaji_pokok'];
				
		$result = mysqli_query($connection , "INSERT INTO karyawan(nik,nama,alamat,jenis_kelamin,no_telp,posisi,gaji_pokok) VALUES('$nik','$nama','$alamat','$jenis_kelamin','$no_telp','$posisi','$gaji_pokok')");
		
		echo "Data Karyawan Berhasil Ditambahkan. <a href='index.php'>Lihat Data</a>";
	}
	?>
</body>
</html>