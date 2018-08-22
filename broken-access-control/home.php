<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">


      <?
        // Change this to rely on the attributes of the currently logged-in user
        if($_GET['is_admin']) {
      ?>
      <span>
        You are viewing the admin section
      </span>

      <ul>
        <li>Super</li>
        <li>Secret</li>
        <li>Stuff</li>
      </ul>
      <? } else { ?>
        <br />
        <span>Normal boring stuff</span>
      <? } ?>
    </div>
  </body>
</html>