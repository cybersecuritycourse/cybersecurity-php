<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
  <div class="container">
      <? if(($_POST['password'] != '') && ($_POST['password'] == $_POST['password_confirmation'])){

        if(strlen($_POST['password']) < 8) { ?>
          <br /><br />
          <span class="alert alert-danger">Passwords should be 8 or more characters</span>
        <? } else { ?>
          Signup successful!
        <? }
      } else {
        if(($_POST['password'] != '')){ ?>
          <br /><br />
          <span class="alert alert-danger">Passwords do not match</span>
        <? } ?>
      <div class="page-header">
        <h1>Please Sign Up</h1>
      </div>
      <div class="row">
        <div class="well col-md-4">
          <form action="signup.php" method="POST">

              <div class="form-group">
                <label for="username">
                  Username
                </label>

                <input type="text" name="username" placeholder="Username" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="password">
                  Password
                </label>

                <input type="password"  name="password" placeholder="Password" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="password_confirmation">
                  Password Confirmation
                </label>

                <input type="password"  name="password_confirmation" placeholder="Confirm Password" class="form-control" required>
              </div>

              <div class="form-group">
                <button class="btn" type="submit">Sign Up</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    <? } ?>
  </div>
</body>
</html>