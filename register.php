<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- GoogleFonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poltawski+Nowy:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-body-tertiary" style="background-color: aliceblue;">
  <div class="container" style="max-width: 600px;">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto " src="logo.png" alt="" width="150" height="100"
          style="border-radius: 30%; margin-bottom: 18px;">
        <h1 style="font-family: 'Poltawski Nowy', serif; color: #B0DAFF;">Connect to Opportunity</h1>
      </div>
      <?php
        echo "{$_COOKIE['aziz']}";
      ?>
      <h4 class="mb-3">Sign Up</h4>
      <form class="needs-validation" novalidate action="PHP/SignupHandler.php" method="post">
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="FirstName" value="" required name="FirstName">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="LastName" placeholder="Last Name" value="" required name="LastName">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <div class="input-group has-validation">
              <span class="input-group-text">@</span>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="Email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
          </div>

          <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <div class="input-group has-validation">
              <input type="password" class="form-control" id="password" placeholder="Password" required name="Password">
              <div class="invalid-feedback">
                Your password is required.
              </div>
            </div>
          </div>

          <div class="col-12">
            <label for="datebirth" class="form-label">Date of Birth</label>
            <input class="form-control" type="date" name="Date">
          </div>
        </div>
        <hr class="my-4">
        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
      </form>
    </main>
    <footer class="my-5 pt-1 text-body-secondary text-center text-small">
      <p class="mb-1">&copy; 2023 JobFinder</p>
    </footer>
  </div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="checkout.js"></script>
</body>

</html>