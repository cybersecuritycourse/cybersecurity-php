<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
  <div class="container">
  <? error_reporting(E_ERROR | E_PARSE); ?>
  <? if(($_POST['username'] == 'admin') && ($_POST['password'] == 'admin')) { ?>
    <h1>You are logged in!</h1>
    <? $welcome_message_file = fopen('welcome.txt', filesize('welcome.txt'));
       $welcome_message = fread($welcome_message_file);

    print("Welcome! ".$welcome_message); ?>
    <br /><br />
  <? } else { ?>

      <div class="page-header">
        <h1>Please Log In</h1>
      </div>
      <div class="row">
        <div class="well col-md-4">
          <form action="login.php" method="POST">

              <div class="form-group">
                <label for="username">
                  Username
                </label>

                <input type="text" name="username" placeholder="Username" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="psw">
                  Password
                </label>

                <input type="password"  name="password" placeholder="Password" class="form-control" required>
              </div>

              <div class="form-group">
                <button class="btn" type="submit">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  <? } ?>
  </div>

</html>
