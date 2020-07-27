<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="bootstrap.css">

    <title>ASMARA.CO.ID</title>
  </head>
  <body>
    <style type="text/css">
      .one{
        float: center;
      }
      .two{
        display: inline-block;
        padding: 150px;
        margin: 110px;
      }
      img{
        width:500px; 
        height:500px;
      }
      #komen{
        font-size: 50px;
        font-family: times new roman;
      }
      #gambar{
        width:100px; 
        height:100px;
        border-radius: 100px;
      }
      .atas{
        text-align:center;
      }
      #bawah{
        display: inline-block;
        padding: 10px;
      }
      #PROFIL{
        font-size: 50px;

      }
      .Ubah{
        background-color:chocolate;
        font-size: 40px;
        border-radius: 50px;
      }
      .Hapus{
        background-color: greenyellow;
        font-size: 40px;
        border-radius: 50px;
      }
      .container{
   width: 100%;
   background-color: #f2f2f2;
   margin-bottom: 10px;
   border-radius: 10px;
  } 
  .skill-bar{
   text-align: left;
   padding: 10px;
   font-size: 12px;
  }
  .skill{
   color: #fff;
   font-size: 12px;
   text-align: center;
   border-radius: 10px;
  }
  .html{width: 90%;background-color: #22eb72}
  .css{width: 85%;background-color: #1E80FA}
  .js{width: 80%;background-color: #DBE223}
  .php{width: 83%;background-color: #E93232}

   

    </style>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">ASMARA.CO.ID</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#PROFIL">Profil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Skill">Skill</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#Portofolio">Portofolio</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#Kontak">Kontak</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#Komen">Komen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Galeri">Galeri Foto</a>
      </li>
    </ul>
  </div>
</nav>
<div class="jumbotron">
  <center><img src="yo.jpg" id="gambar"></center>
  <center><h1 class="display-4">Herdin Asmara Timor</h1>
  <p class="lead">Web Developer</p>
  <hr class="my-4">
  <p>Jangan Lupa Senyum Hari Ini</p>
</div></center>
  

<center><p id="PROFIL">PROFIL</p></center>
<div class="container">
<table>
 <tr>
   <td><img src="yo.jpg" width="100px" height="100px"></td>
</td>
    <td>HERDIN ASMARA TIMOR Merupakan Mahasiswa Fakultas Teknologi Industri Prodi Teknik Informatika Universitas Ahmad Dahlan Angkatan 2019</td>
  </tr>
</table>
<div>
</div>

<div class="container">
  <div class="skill-bar">
   <h2>MY SKILL</h2>
   <label>HTML</label>
   <div class="container">
    <div class="skill html">90%</div>
   </div>
   <label>CSS</label>
   <div class="container">
    <div class="skill css">85%</div>
   </div>
   <label>Java Script</label>
   <div class="container">
    <div class="skill js">80%</div>
   </div>
   <label>PHP</label>
   <div class="container">
    <div class="skill php">83%</div>
   </div>
 </div>
</div>

<div class="jumbotron jumbotron-fluid">
  <center><p id="Portofolio" style="font-size: 50px;">PORTOFOLIO</p></center>
  <a href="form_simpan.php" style="font-size: 30px;">Tambah Data Portofolio</a><br><br>
  <table border="0" width="100%">
  <tr>
    <th>Foto</th>
    <th>Deskripsi</th>
  </tr>
  <?php

  include "koneksi.php";
  
  $sql = $pdo->prepare("SELECT * FROM portofolio");
  $sql->execute(); 
  while($data = $sql->fetch()){ 
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='50' height='100'></td>";
    echo "<td>".$data['Deskripsi']."</td>";
    echo "<td ><button class=Ubah><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></button></td>";
    echo "<td ><button class=Hapus><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></button></td>";
    echo "</tr>";
  }
  ?>
  </table>
</div>

<center><p id="Kontak" style="font-size: 50px;">Kontak</p></center>
<center>
  <ul class="one">
  <li class="two"><svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 3a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3zm6 7a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 11.825 10.623 11 8 11s-4.146.826-5 1.755V13a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
</svg><br><br><br><br>INSTAGRAM:Herdin_asmara_timor</li>
  <li class="two"><svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg><br><br><br><br>HERDIN ASMARA TIMOR</li>
  <li class="two"><svg width="5em" height="5em"viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg><br><br><br><br>082237952718</li>
</ul>
</center>

<div class="jumbotron jumbotron-fluid">
<center>
  <p id="Galeri">Galeri Foto</p>
    <table>
      <tr>
        <td><img src="joey-kyber-45FJgZMXCK8-unsplash.jpg"></td>
        <td><img src="john-mark-smith-F_cHIM0Kcy4-unsplash.jpg"></td>
        <td><img src="kari-shea-apcUIqOPEIo-unsplash.jpg"></td>
      </tr>
       <td><img src="rashtravardhan-kataria-m-D_PAxLcTo-unsplash.jpg"></td>
      <td><img src="sincerely-media-CXYPfveiuis-unsplash.jpg"></td>
      <td><img src="wp3377040-aesthetic-pc-wallpapers.png"></td>
    </table>
</center>



 <center><p id="Komen">SILAHKAN KOMENTAR</p></center>
<form>
PESAN:<textarea></textarea><br>
KESAN:<textarea></textarea><br>
KOMENTAR:<textarea></textarea><br>
<input type="submit" value="KIRIM">
<input type="reset" value="BATAL">
</form>    
</div>




  <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand">ASMARA.CO.ID</a>
   <ul class="nav justify-content-center">
  <li class="nav-item">
    <a style="color: white;">Copyright&copy 2020 HERDIN ASMARA TIMOR</a>
        </li>
          </ul>
            </ul>
                </div>
                  </nav>



  </body>
</html>