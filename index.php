<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>Curriculum Vitae</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="nav-con">
      <h1>Curriculum Vitae</h1>
      <a class="button" href="admin.php">Edit Page</a>
    </div>
  </nav>
  <!-- Main Section -->
  <div class="cv-con">
    <section class="con">
        <!-- Image -->
        <div class="image">
            <img src="<?php echo $data['foto_path']; ?>" alt="Foto Profil">
        </div>
        <!-- Nama -->
        <div class="nama-con">
            <h1 class="nama"><?php echo $data['nama']; ?></h1>
        </div>
        <!-- Kontak -->
      <div class="kontak">
        <h1>Contact</h1>
        
        <div class="data-con">
            <ion-icon name="home"></ion-icon>
            <p class="data"><?php echo $data['alamat']; ?></p>
        </div>
        <div class="data-con">
            <ion-icon name="call"></ion-icon>
            <p class="data"><?php echo $data['telepon']; ?></p>
        </div>
        <div class="data-con">
            <ion-icon name="mail"></ion-icon>
            <p class="data"><?php echo $data['email']; ?></p>
        </div>
        <div class="data-con">
            <ion-icon name="globe"></ion-icon>
            <a class="data link" href="https://<?php echo $data['web']; ?>"><?php echo $data['web']; ?></a>
        </div>
      </div>
      <!-- Pendidikan -->
      <div class="exp-con">
        <h1>Pendidikan</h1>
        <div class="specs">
            <p><?php echo $data['pendidikan'] ?></p>
        </div>
      </div>
      <!-- Pengalaman -->
      <div class="exp-con">
        <h1>Pengalaman Kerja</h1>
          <div class="specs">
              <p><?php echo $data['pengalaman_kerja'] ?></p>
          </div>
      </div>
      <!-- Keterampilan -->
      <div class="exp-con">
        <h1>Keterampilan</h1>
        <div class="specs">
            <p><?php echo $data['keterampilan']?></p>
        </div>
      </div>
    </section>
  </div>


  <!-- Icon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>