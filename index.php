<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitungan Automatis</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center">Hitungan Automatis</h2>
    <form method="post">
      <div class="form-group">
        <label for="subject">Masukan Subjek:</label>
        <input type="text" placeholder="isikan subjek" class="form-control" id="subject" name="subject" required>
      </div>
      <div class="form-group">
        <label for="predicate">Masukan Predikat:</label>
        <input type="text" placeholder="isikan predikat" class="form-control" id="predicate" name="predicate" required>
      </div>
      <div class="form-group">
        <label for="pertama">Angka Awal:</label>
        <input type="number" placeholder="isikan angka" class="form-control" id="pertama" name="pertama" required>
      </div>
      <div class="form-group">
        <label for="pengurangan">Angka Pengurang:</label>
        <input type="number" placeholder="isikan angka" class="form-control" id="pengurangan" name="pengurangan" required>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit!</button>
      <button type="reset" class="btn btn-secondary" name="reset">Reset</button>
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
      $subject = $_POST['subject'];
      $predicate = $_POST['predicate'];
      $pertama = $_POST['pertama'];
      $pengurangan = $_POST['pengurangan'];
      
      echo "<h3>Hasil:</h3>";
      while ($pertama > 0) {
        echo "ada $pertama $subject sedang $predicate, berhenti dan pergi $pengurangan $subject, ";
        if ($pertama - $pengurangan > $pengurangan) {
          echo "tinggal " . ($pertama - $pengurangan) . " $subject<br>";
        } elseif ($pertama - $pengurangan > 0) {
          echo "tinggal " . ($pertama - $pengurangan) . " $subject<br>";
        } else {
          echo "sepilah sudah<br>";
        }
        
        $pertama -= $pengurangan;
        if ($pertama < 0) {
          $pengurangan = abs($pertama);
          $pertama = 0;
        }
      }
    }
    ?>
  </div>
</body>
</html>
