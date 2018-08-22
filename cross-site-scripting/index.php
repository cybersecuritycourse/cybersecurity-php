<!-- '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome' --disable-xss-auditor -->
<!-- '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome' --enable-xss-auditor -->

<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
      <div class="page-header">
        <h1>Add Content</h1>
      </div>
      <div class="row">
        <div class="well col-md-4">
          <div>
          <? if($_POST['content']) {
            print(htmlspecialchars($_POST['content']));
           } else { ?>
          </div>
          <form action="index.php" method="POST">
              <div class="form-group">
                <label for="content">
                  Content
                </label>
                <input type="text" name="content" placeholder="Content" class="form-control" required>
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