<?php
//including the connection
include "conection.php";

//extructure to insert the new data to the respective values
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $birth_date = $_POST["birth_date"];

  $sql = "INSERT INTO residents (`id`, `name`, `last_name`, `email`, `birth_date`) VALUES (NULL,'{$name}','{$last_name}','{$email}','{$birth_date}')";

  $result = $conn->query($sql);

  if ($result) {
    header("Location: index.php?msg=New record created successfully");
  } else {
    echo "Failed" . mysqli_error($conn);
  }
}

?>

<!-- Start of the HTML -->
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
      <h3>Add New Resident</h3>
      <!-- Sub Title -->
      <p class="text-muted"> Complete the form below to add a New Resident</p>
    </div>

    <!-- Start of the code to create a form to add to the DataBase -->
    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">First Name:</label>
            <input type="text" class="form-control" name="name" placeholder="ABL">
          </div>

          <div class="col">
            <label class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="last_name" placeholder="Prime">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Email:</label>
          <input type="email" class="form-control" name="email" placeholder="abl.prime@exemple.com">
        </div>

        <div class="mb-3">
          <label>Birth Date</label>
          <input type="date" class="form-control" name="birth_date">
        </div>

    </div>

    <!-- Buttons Save and Cancel -->
    <div>
      <button type="submit" class="btn btn-primary" name="submit">Save</button>
      <a href="index.php" class="btn btn-danger">Cancel</a>
    </div>

    </form>
  </div>
  </div>

  <!-- BootStrap (ref link JS) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>