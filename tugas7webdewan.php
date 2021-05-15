<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <style>
		body{
			background-image:url(dewan.PNG);
			background-size:cover;
			background-attachment: fixed;
		}
		p{
			color:red;
		}
	</style>
    <br> 
    <center><h1><font size="15" color="black">TUGAS 7 PEMROGRAMAN WEB</font></h1></center>   
    <center><p><font size="5" color="black">DEWAN BATARA SUBARJAH</font></p></center> 
    <form action="" method="post" enctype="multipart/form-data">
    <table border="5" cellspacing="10" width="500" align="left">
    <tbody>
</br>
    <br>
        <tr>
            <td><label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<center><b><font color="white">NAMA</font></center> </label></td>
            <td><input type="text" name="nama"placeholder="Nama lengkap" size="50" maxlength="30" autocomplete="on" autofocus required/></td>
        </tr>
    </br>
    <br>
        <tr>
            <td><label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<center><b><font color="white">TTL</font></center></label></td>
            <td><input type="date" name="tgl_lahir" placeholder="Tgl Lahir" size="20" maxlength="10" required/> </td>
        </tr>
    </br>
    <br>
        <tr>
            <td><label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<center><b><font color="white">PEKERJAAN </font></center> 
            <td> 
                <select name='pekerjaan'>
                    <option value='Admin'>ADMIN</option>
                    <option value='Direktur'>DIREKTUR</option>
                    <option value='Karyawan'>KARYAWAN</option>
                    <option value='OB'>OFFICE BOY</option>
                </select>
            </td></label>
            </td>
        </tr>
            <br>
            <tr>
            <td><center><input type="submit" value="KIRIM" ></center></td>
            </tr>
            </br>
    </form>
    <br>
    <tr>   
    <td>
        <auto><?php
        # Memanggil Nama
        echo 'Nama: ' . $_POST['nama'];

        # Merubah Tanggal Lahir menjadi Umur (Tahun)
        $tgl_lahir = @$_POST['tgl_lahir'];
        $lahir = new DateTime($tgl_lahir);
        $hari_ini = new DateTime();

        $diff = $hari_ini->diff($lahir);

        # Memanggil fungsi umur yg sudah dibuat diatas
        echo "<br> Umur : ". $diff->y ." Tahun";

        # Memanggil pekerjaan
        echo "<br> Pekerjaan : ". $_POST['pekerjaan'];

        # Kondisi if pekerjaan untuk menentukan gaji
        $pekerjaan = @$_POST['pekerjaan'];

        if($pekerjaan == "Admin"){
            echo '<br> Gaji : Rp. 30.000.000,-';
        }elseif($pekerjaan == "Direktur"){
            echo '<br> Gaji : Rp. 50.000.000,-';
        }elseif($pekerjaan == "karyawan"){
            echo '<br> Gaji : Rp. 7.000.000,-';
        }elseif($pekerjaan == "OB"){
            echo '<br> Gaji : Rp. 5.000.000,-';
        }
    ?>
    </td>
    </tr>
    </br>
    
</body>
</html>