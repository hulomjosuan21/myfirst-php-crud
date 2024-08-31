<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Movie Details</title>
</head>

<body>
  <div class="container">
    <header class="my-4">
      <h1>Movie Details</h1>

      <a href="index.php" class="btn btn-primary">back</a>
    </header>

    <div class="book-details my-4">
      <?php
      if (isset($_GET["id"])) {
        $id = $_GET["id"];
        include("connect.php");
        $query = "SELECT * FROM movies WHERE id=$id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
      ?>
        <h2>Title</h2>
        <p><?php echo $row["title"]; ?></p>
        <h2>Description</h2>
        <pre><?php echo $row["description"]; ?></pre>
        <h2>Type</h2>
        <p><?php echo $row["type"]; ?></p>
        <h2>Created At</h2>
        <p><?php echo $row["createdAt"]; ?></p>
      <?php
      }
      ?>
    </div>
  </div>
</body>

</html>