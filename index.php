<?php
include "db_connect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // To View From DB
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['msg'];

  $stmt = $con->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
  $stmt->execute(array($name, $email, $message));
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/ASA.css" />
</head>

<body>
  <div class="container">
    <div class="all">
      <div class="row">
        <div class="col-sm-2 col-xs-5">
          <img class="img img-responsive centre-block" src="images/myphoto.jpg" />
        </div>

        <div class="col-sm-4 col-xs-7">
          <h2 class="name">TEAM 2</h2>
          <span>Web Development</span> <br />
          <br />
          <p>
            We like to make creative design and employ our skills to be well matched to your requirements.
          </p>
        </div>

        <div class="col-sm-6 col-xs-12">
          <p>NAME : &nbsp;&nbsp;&nbsp; TEAM 2 </p>
          <p>FRONT END : &nbsp;&nbsp;&nbsp; Ameera & Asmaa </p>
          <p>BACK END: &nbsp;&nbsp;&nbsp;Shehab </p>


        </div>
      </div>
    </div>
    <ul>
      <li><a href="mymessages.php">My Messages</a></li>
    </ul>
    <div class="row">
      <form class="form-group message" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
        <textarea name="msg" class="form-control" id="msg" cols="30" rows="10" placeholder="Your Message"></textarea>
        <div class="btn-container">
          <button type="submit" class="btn btn-primary my-btn">Send</button>
        </div>
      </form>
    </div>
  </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ASA.js"></script>
</body>

</html>