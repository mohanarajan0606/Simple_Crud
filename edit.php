<?php 

    include 'db.php';

    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $user = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2>Edit User</h2>

  <form action="update.php" method="post" class="mt-3">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <div class="mb-3">
      <input type="text" name="name" class="form-control" value="<?= $user['UserName'] ?>" required>
    </div>
    <div class="mb-3">
      <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="index.php" class="btn btn-secondary">Cancel</a>
  </form>

</body>
</html>