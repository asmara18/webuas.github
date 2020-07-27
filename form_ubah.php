<html>
<head>
  <title>portofolio</title>
</head>
<body>
  <h1>Ubah Data Potofolio</h1>
  <?php
  
  include "koneksi.php";
  
  $id = $_GET['id'];
 
  $sql = $pdo->prepare("SELECT * FROM portofolio WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute(); 
  $data = $sql->fetch(); 
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
    <table cellpadding="8">
      <tr>
        <td>Deskripsi</td>
        <td><input type="text" name="Deskripsi" value="<?php echo $data['Deskripsi']; ?>"></td>
      </tr>
      <tr>
        <td>Foto</td>
        <td>
          <input type="file" name="foto">
        </td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>