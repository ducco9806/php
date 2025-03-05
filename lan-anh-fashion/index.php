<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lan Anh Fashion</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <h1>Lan Anh - Th?i Trang N?</h1>
    </header>
    <section class="products">
      <?php
      $result = mysqli_query($conn, "SELECT * FROM products");
      while ($row = mysqli_fetch_assoc($result)){
        echo "<div class='product'>";
        echo "<img src='assets/" .$row['image'] . "' alt= '" . $row['name'] . "'>";
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p><strong>Giˆh: " . number_format($row['price'], 0, ',', '.') . " VND</strong></p>";
        echo "</div>";
      }
      ?>
    </section>
  </body>
</html>