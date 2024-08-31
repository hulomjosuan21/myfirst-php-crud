<?php

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  include("connect.php");
  $query = "DELETE FROM movies WHERE id=$id";
  if (mysqli_query($conn, $query)) {
    session_start();
    $_SESSION["delete"] = "Movie Deleted successfully";
    header("Location:index.php");
  }else {
    session_start();
    $_SESSION["error"] = mysqli_error($conn);
    header("Location:index.php");
  }
}
?>