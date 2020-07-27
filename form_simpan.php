<html>
<head>
  <title>portofolio</title>
</head>
<body>
  <style type="text/css">
    body {
      background: url(aleks-dorohovich-nJdwUHmaY8A-unsplash.jpg);
    background-size: cover;
    }
    #tambah{
      margin: 250px;
    }

  </style>
<div id="tambah">
<center>
    <h1>Tambah Data Portofolio</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td >Deskripsi</td>
    <td><input type="text" name="Deskripsi" style="height: 100px; width: 600px;"></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</center>
</div>
</body>

</html>

