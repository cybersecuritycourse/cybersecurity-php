<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
  <div class="container">

      <div class="page-header">
        <h1>Find a file</h1>
      </div>
      <div class="row">
        <div class="well col-md-4">
          <div>
          <? if($_POST['filename']) {
              $command  = "ls -ltr ".$_POST['filename']."";
              $result = exec($command);
              print("The command was: ".$command."<br/><br/>");
              print("The result was: ".$result."");

          } else { ?>
          </div>
          <form action="index.php" method="POST">

              <div class="form-group">
                <label for="filename">
                  Filename
                </label>

                <input type="text" name="filename" placeholder="Filename" class="form-control" required>
                <br />
                <button class="btn" type="submit">Post</button>

              </div>

            </div>
          </form>
          <? } ?>

        </div>

        <div class="row">
          <div>
            <a href="index.php" class="btn">Go Back</a>
          </div>
        </div>
      </div>
  </div>

</html>