<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nama Depan</label>
            <input type="text" name="fname" placeholder="Nama Depan" required>
          </div>
          <div class="field input">
            <label>Nama Belakang</label>
            <input type="text" name="lname" placeholder="Nama Belakang" required>
          </div>
        </div>
        <div class="field input">
          <label>Alamat Email</label>
          <input type="text" name="email" placeholder="Masukkan Email Kamu" required>
        </div>
        <div class="field input">
          <label>Kata Sandi</label>
          <input type="password" name="password" placeholder="Masukkan Kata Sandi" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Pilih Foto</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Lanjutkan ke Chat">
        </div>
      </form>
      <div class="link">Sudah punya akun? <a href="login.php">Masuk</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
