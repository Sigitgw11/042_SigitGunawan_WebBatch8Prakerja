<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Soal Algoritma Bahasa PHP</title>
  <style>
    /* CSS */
    body   { text-align: center; font-family: "Trebuchet MS", serif; }
    h1,h2  { margin-bottom: 0; }
    hr     { width: 80%; }
    form   { margin-top: 2rem; }
    canvas { margin: 1.4rem; }
    p      { margin:0.1rem }
    .result {
      margin: 1rem auto; 
      padding: 0.25rem 0.25rem 1rem 0.25rem;
      background-color: ghostwhite;
      width: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .btn{
      background-color: #5F9EA0;
      border-radius: 5px;
      color: #FFFFFF;
      text-align: center;
      padding: auto;
      font-size: 10px;
      cursor: pointer;
  }
  </style>
</head>
<body>
  <!-- Judul Rumus LuasLingkaran -->
  <h1>Kode Program PHP - Keliling dan Luas Lingkaran</h1>
  <!-- inputan jari-jari -->
  <form action="" method="post">
    <div>
      Jari-jari lingkaran: <input type="text" name="jari2" size="1">
      <input class="btn" type="submit" name="submit">
    </div>
  </form>
   
  <?php
    // Check Form Kirim
    if (isset($_POST['submit'])) {
      $jari2 = $_POST['jari2'];
      
      echo "<div class='result'>";
      echo "<h2>Hasil Kode Program</h2>";
      echo "<span>(jari-jari: $jari2)</span>";
  ?>
      <canvas id="myCanvas" width="100px" height="100px"></canvas>
      
      <script>
        // JavaScript untuk membuat lingkaran pada konten canvas
        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d");
        ctx.beginPath();
        ctx.arc(50, 50, 49, 0, 2 * Math.PI);
        ctx.stroke();
      </script> 
  <?php
     // Rumus Luas dan keliling lingkaran
     $keliling_lingkaran = 22/7 * 2 * $jari2;
     $luas_lingkaran = 22/7 * $jari2 * $jari2;

     // Output
     echo "<p>Keliling lingkaran = ".round($keliling_lingkaran,2)."</p>";
     echo "<p>Luas lingkaran = ". round($luas_lingkaran,2) ."</p>";

     echo "</div>";
    }
  ?>
</body>
</html>
