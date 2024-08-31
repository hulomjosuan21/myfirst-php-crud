<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Edit Movie</title>
</head>

<body>

  <div class="container">
    <header class="my-4">
      <h1>Edit Movie</h1>

      <a href="index.php" class="btn btn-primary">Back</a>
    </header>

    <?php
    if (isset($_GET["id"])) {
      $id = $_GET["id"];
      include("connect.php");
      $query = "SELECT * FROM movies WHERE id=$id";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result);
    }

    ?>
    <form action="process.php" method="post">
      <div class="form-element my-4">
        <input type="text" class="form-control" value="<?php echo $row["title"]; ?>" name="title" placeholder="Title">
      </div>

      <div class="form-element my-4">
        <textarea name="description" class="form-control"><?php echo $row["description"]; ?></textarea>
      </div>

      <div class="form-element my-4">
        <select name="type" class="form-control">
          <option disabled selected>Select Type</option>
          <option value="horror" <?php if($row["type"]=="horror"){echo "selected";} ?> >Horror</option>
          <option value="action" <?php if($row["type"]=="action"){echo "selected";} ?>>Action</option>
          <option value="romance" <?php if($row["type"]=="romance"){echo "selected";} ?>>Romance</option>
        </select>
      </div>

      <div class="form-element my-4">
        <input type="date" class="form-control" name="date" value="<?php echo $row["createdAt"]; ?>" >
      </div>

      <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">

      <div class="form-element my-4">
        <button class="btn btn-primary" type="submit" name="edit">Edit</button>
      </div>
    </form>
    <?php
    ?>


  </div>
</body>

</html>