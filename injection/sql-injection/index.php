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
          <? if($_POST['message']) {
              $query  = "SELECT * FROM POSTS WHERE MESSAGE = '".$_POST['message']."'";

              print("This is the query that would run: <br /><br />".$query);

          } else { ?>
          </div>
          <form action="index.php" method="POST">

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