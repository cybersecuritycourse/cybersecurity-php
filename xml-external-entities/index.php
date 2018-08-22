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

          <? libxml_disable_entity_loader (false);

           if($_POST['content'] && $_POST['content'] != '') {
              $xml_string = $_POST['content'];

              $dom = new DOMDocument;

              $dom->loadXML($xml_string, LIBXML_NOENT | LIBXML_DTDLOAD);

              $creds = simplexml_import_dom($dom);
              print $creds;
              //print_r($dom->childNodes[0]->nodeValue);


           } else { ?>
          </div>
          <form action="index.php" method="POST">
              <div class="form-group">
                <label for="content">
                  Paste XML here
                </label>
                <textarea name="content" placeholder="Content" class="form-control" required></textarea>
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