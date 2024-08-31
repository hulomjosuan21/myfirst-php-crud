<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Add New Movie</title>
</head>

<body>

  <div class="container">
    <header class="my-4">
      <h1>Add Movie</h1>

      <a href="index.php" class="btn btn-primary">Back</a>
    </header>

    <form action="process.php" method="post">
      <div class="form-element my-4">
        <input type="text" class="form-control" name="title" placeholder="Title">
      </div>

      <div class="form-element my-4">
        <textarea name="description" class="form-control" placeholder="Description"></textarea>
      </div>

      <div class="form-element my-4">
        <select name="type" class="form-control">
          <option disabled selected>Select Type</option>
          <option value="horror">Horror</option>
          <option value="action">Action</option>
          <option value="romance">Romance</option>
        </select>
      </div>

      <div class="form-element my-4">
        <input type="date" class="form-control" name="date" placeholder="Book Title:">
      </div>

      <div class="form-element my-4">
        <button class="btn btn-primary" type="submit" name="create">Add</button>
      </div>
    </form>
  </div>
</body>

</html>