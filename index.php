<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2>Simple PHP CRUD App</h2>

  <!-- Add Form -->
  <form action="insert.php" method="post" class="row g-3 mt-3">
    <div class="col-md-5">
      <input type="text" name="name" class="form-control" placeholder="Name" required>
    </div>
    <div class="col-md-5">
      <input type="email" name="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary w-100">Add</button>
    </div>
  </form>

  <!-- User Table -->
  <table class="table table-bordered table-striped mt-4">
    <thead>
      <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM users");
      $serial = 1 ;
      while ($row = $result->fetch_assoc()):
      ?>
        <tr>
          <td><?= $serial++ ?></td>
          <td><?= $row['UserName'] ?></td>
          <td><?= $row['email'] ?></td>
          <td>
            <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete user?')">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

</body>
</html>
