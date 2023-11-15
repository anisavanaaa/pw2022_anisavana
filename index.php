<!DOCTYPE html>
<html lang="en">

<?php
  include 'proses.php';
?>


<head>
    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body class="body">

    <div class="header">
    <img src="Logo_UPG.png" alt="Logo" class="logo">
        UNIVERSITAS <font color="navy">PRIMAGRAHA</font>
        <div class="copyright">
    
</div>
</div>
    

    <div class="content">
        <form method="post" action="proses.php">
            <table  border="2" style="width: 400px;">
                <tr>
                    <td align="center" colspan="3" bgcolor="black">
                        <font color="#1DE606" size="2px">
                            <b>ISI DATA DIRI ANDA SECARA LENGKAP</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Nim</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Nama Mahasiswa</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Alamat</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="alamat"></td>
                </tr>
                
                <tr>
                    
                    <td bgcolor="#DEDEDE">Agama</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                    <select name="agama">
                            <option value="Pilih Agamamu">- Pilih Agamamu -</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="KRISTEN">KRISTEN</option>
                            <option value="HINDU">HINDU</option>
                            <option value="BUDDHA">BUDDHA</option>
                            <option value="KHONGHUCU">KHONGHUCU</option>
                        
                        </select>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Jenis Kelamin</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                    
    <input type='radio' name='jeniskelamin' value='Laki-laki' checked='checked' />Laki-laki<input type='radio' name='jeniskelamin' value='perempuan' />Perempuan
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">No.Tlpn</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="telp">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="aliceblue"> &nbsp </td>
                    <td bgcolor="aliceblue"> &nbsp </td>
                    <td bgcolor="aliceblue">
                        <input type="submit" name="submit" value="SIMPAN">
                        <input type="reset" value="RESET">
                    </td>
                </tr>
            </table>
        </form>

        <br>
        <table align="center" border="1" style="width: 1250px;">
            <tr>
                <th bgcolor="yellow">No</th>
                <th bgcolor="yellow">Nim</th>
                <th bgcolor="yellow">Nama Mahasiswa</th>
                <th bgcolor="yellow">Alamat</th>
                <th bgcolor="yellow">Agama</th>
                <th bgcolor="yellow">Jenis Kelamin</th>
                <th bgcolor="yellow">No Telp</th>
                <th bgcolor="yellow">Aksi</th>
            </tr>
            <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while($d = mysqli_fetch_array($data)){
        
        
        ?>
        <tr>
          <td bgcolor="white"><?php echo $no++ ?></td>
          <td bgcolor="white"><?php echo $d['nim']?></td>
          <td bgcolor="white"><?php echo $d['nama']?></td>
          <td bgcolor="white"><?php echo $d['alamat']?></td>
          <td bgcolor="white"><?php echo $d['agama']?></td>
          <td bgcolor="white"><?php echo $d['jeniskelamin']?></td>
          <td bgcolor="white"><?php echo $d['telp']?></td>
          <td bgcolor="white"><a href="hapus.php?id=<?php echo $d['nim']; ?>">Hapus</a> | <a href="edit.php?id=<?php echo $d['nim']; ?>">Edit</a></td>
        </tr>

        <?php
        }
        ?>
        </table></br>
    </div>

   

    <script>feather.replace();</script>

</body>
</html>
