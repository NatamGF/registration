<?php
include "conection.php";
$id = $_GET['id'];
//adding the Update estructure from phpMyAdmin
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $birth_date = $_POST["birth_date"];

  $sql = "UPDATE `residents` SET `name`='$name',`last_name`='$last_name',`email`='$email',`birth_date`='$birth_date' WHERE id=$id";

  $result = $conn->query($sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed" . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BootStrap (ref link CSS) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Registration</title>
</head>

<!-- Title -->

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:burlywood">
    Registration
  </nav>

  <!-- Second Title -->
  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit Resident Information</h3>
      <!-- Sub Title -->
      <p class="text-muted"> Click update after changing any inforation!</p>
    </div>

    <!-- Creating a extructure to get the data that was alredy on the DataBase -->
    <?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM residents WHERE id = $id LIMIT 1";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result)
    ?>

    <!-- Start of the code to change the data on the DataBase -->
    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">First Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Email:</label>
          <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
        </div>

        <div class="mb-3">
          <label>Birth Date</label>
          <input type="date" class="form-control" name="birth_date" value="<?php echo $row['birth_date'] ?>">
        </div>

    </div>

    <!-- Buttons Update and Cancel -->
    <div>
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
      <a href="index.php" class="btn btn-danger">Cancel</a>
    </div>

    </form>
  </div>
  </div>

  <!-- BootStrap (ref link JS) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>