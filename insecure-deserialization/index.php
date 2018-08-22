<? if($_POST['message'] && $_POST['message'] != '') {
    setcookie("msgdata", "message:".$_POST['message'], time() + 30, "/");
    setcookie("userdata", "username:john", time() + 30, "/");
  }
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
  <div class="container">

      <div class="page-header">
        <h1>Find a message</h1>
      </div>
      <div class="row">
        <div class="well col-md-4">
          <div>
          <? if ($_GET['readmessage'] == true && isset($_COOKIE["userdata"])) {

             $userdata = $_COOKIE["userdata"];

             if(strpos($userdata, 'username') !== false){
              $username = explode(":", $userdata);
              print("Your username is: ".$username[1]);
             };
           } ?>
          </div>
          <form action="index.php?readmessage=true" method="POST">

              <div class="form-group">
                <label for="message">
                  Message
                </label>

                <input type="text" name="message" placeholder="Message" class="form-control" required>
                <br />
                <button class="btn" type="submit">Post</button>

              </div>

            </div>
          </form>
        </div>
        <div class="row">
          <div>
            <a href="index.php" class="btn">Go Back</a>
          </div>
        </div>
      </div>
  </div>

</html>