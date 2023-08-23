<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
  font-family: 'Open Sans', sans-serif;
  background:#3498db;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}

p{
  font-size:12px;
  text-decoration: none;
  color:#ffffff;
}

h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #2980b9 4px solid; 
}

.kode{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.btn{
  background:#2ecc71;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #27ae60 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#2CC06B; 
}
    </style>
</head>
<body>

<form method="post" action="">
<div class="box">
<h1>Pegawai</h1>

<label for="kodepegawai">Nomor Pegawai:</label>

<input type="number" name="no_pegawai" placeholder="gddmmyyyynn"  class="kode" />
  
<input type="submit" name="submit" value="Submit" class="btn">
  

  
</div> <!-- End Box -->
  
</form>

    <br>

    <?php
    if(isset($_POST['submit'])){
        $no_pegawai = $_POST['no_pegawai'];
        // $nama = $_POST['nama'];

        if($no_pegawai > 11 && $no_pegawai < 11){
            echo "Error cuy";
        }

        $no_golongan = substr($no_pegawai, 0, 1);
        $tanggal = substr($no_pegawai, 1, 2);
        $bulan = substr($no_pegawai, 3, 2);
        $tahun = substr($no_pegawai, 5, 4);
        $no_urutan = substr($no_pegawai, 9, 2);

        if ($bulan == 1) {
            $bulan = "Januari";
        } else if ($bulan == 2) {
            $bulan = "Februari";
        } else if ($bulan == 3) {
            $bulan = "Maret";
        } else if ($bulan == 4) {
            $bulan = "April";
        } else if ($bulan == 5) {
            $bulan = "Mei";
        } else if ($bulan == 6) {
            $bulan = "Juni";
        } else if ($bulan == 7) {
            $bulan = "Juli";
        } else if ($bulan == 8) {
            $bulan = "Agustus";
        } else if ($bulan == 9) {
            $bulan = "September";
        } else if ($bulan == 10) {
            $bulan = "Oktober";
        } else if ($bulan == 11) {
            $bulan = "November";
        } else if ($bulan == 12) {
            $bulan = "Desember";
        }

        $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;
        
        // echo "Nama Pegawai: " . $nama . "<br>";
        echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
        echo "No golongan: " . $no_golongan . "<br>";
        echo "No urutan: " . $no_urutan . "<br>";



    }
    ?>
    
</body>
</html>