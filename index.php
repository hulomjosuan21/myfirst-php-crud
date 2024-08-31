<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Simple CRUD website using php</title>
</head>

<body>
  <div class="container">
    <header class="my-4">
      <h1>Movie List</h1>

      <a href="create.php" class="btn btn-primary">Add Movie</a>
    </header>

    <?php
    session_start();
    if (isset($_SESSION["create"])) {
    ?>
      <div class="alert alert-success">
        <?php
        echo $_SESSION["create"];
        unset($_SESSION["create"]);
        ?>
      </div>
    <?php
    }
    ?>

    <?php
    if (isset($_SESSION["update"])) {
    ?>
      <div class="alert alert-success">
        <?php
        echo $_SESSION["update"];
        unset($_SESSION["update"]);
        ?>
      </div>
    <?php
    }
    ?>

    <?php
    if (isset($_SESSION["delete"])) {
    ?>
      <div class="alert alert-success">
        <?php
        echo $_SESSION["delete"];
        unset($_SESSION["delete"]);
        ?>
      </div>
    <?php
    }
    ?>

    <?php
    if (isset($_SESSION["error"])) {
    ?>
      <div class="alert alert-danger">
        <?php
        echo $_SESSION["error"];
        unset($_SESSION["error"]);
        ?>
      </div>
    <?php
    }
    ?>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Type</th>
          <th>Date Created</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("connect.php");
        $query = "SELECT * FROM movies";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["type"]; ?></td>
            <td><?php echo $row["createdAt"]; ?></td>
            <td>
              <a href="view.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Read More</a>
              <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a>
              <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

  </div>
</body>

</html>