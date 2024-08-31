<?php
include("./connect.php");
if (isset($_POST["create"])) {
  $title = mysqli_real_escape_string($conn, $_POST["title"]);
  $description = mysqli_real_escape_string($conn, $_POST["description"]);
  $type = mysqli_real_escape_string($conn, $_POST["type"]);
  $createdAt = mysqli_real_escape_string($conn, $_POST["date"]);

  $query = "INSERT INTO movies (title,description,type,createdAt) VALUES ('$title','$description','$type','$createdAt')";

  session_start();
  if (mysqli_query($conn, $query)) {
    $_SESSION["create"] = "Movie Added successfully";
  } else {
    $_SESSION["error"] = mysqli_error($conn);
  }
  header("Location: index.php");
  exit();
}

if (isset($_POST["edit"])) {
  $id = mysqli_real_escape_string($conn, $_POST["id"]);
  $title = mysqli_real_escape_string($conn, $_POST["title"]);
  $description = mysqli_real_escape_string($conn, $_POST["description"]);
  $type = mysqli_real_escape_string($conn, $_POST["type"]);
  $createdAt = mysqli_real_escape_string($conn, $_POST["date"]);

  $query = "UPDATE movies SET title='$title', description='$description', type='$type', createdAt='$createdAt' WHERE id=$id";

  session_start();
  if (mysqli_query($conn, $query)) {
    $_SESSION["update"] = "Movie Updated successfully";
  } else {
    $_SESSION["error"] = mysqli_error($conn);
  }
  header("Location: index.php");
  exit();
}

mysqli_close($conn);
?>