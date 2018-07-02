//One of the most useful attribute is processing a user input from an online form. 
/*
By default forms are submitted using the GET method, but it's common practice to specify which method you want to use by adding
the method to the opening form ta.g
*/
//The action attribute tells the browser where to send the data for processing. 

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Get and post</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Contact Us</h1>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
  <p>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
  </p>
  <p>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="comments">Comments:</label>
    <textarea name="comments" id="comments"></textarea>
  </p>
  <p>
    <input type="submit" name="send" id="send" value="Send Comments">
  </p>
</form>
<pre>
    <?php
    if ($_GET) {
        echo 'Content of the $_GET array:<br>';
        print_r($_GET);
    } elseif ($_POST) {
        echo 'Content of the $_POST array:<br>';
        print_r($_POST);
    }
    ?>
</pre>
</body>
</html> 

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Get and post</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Contact Us</h1>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
  <p>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
  </p>
  <p>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="comments">Comments:</label>
    <textarea name="comments" id="comments"></textarea>
  </p>
  <p>
    <input type="submit" name="send" id="send" value="Send Comments">
  </p>
</form>
<pre>
    <?php
    if ($_GET) {
        echo 'Content of the $_GET array:<br>';
        print_r($_GET);
    } elseif ($_POST) {
        echo 'Content of the $_POST array:<br>';
        print_r($_POST);
    }
    ?>
</pre>
</body>
</html>
