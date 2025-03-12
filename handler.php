<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php
include('./connection/connect.php');
session_start();


function clr($req)
{
  return htmlspecialchars(htmlentities(trim($req)));
}

$userName = clr($_POST['userName']);
$userMail = clr($_POST['userMail']);
$userPhone = clr($_POST['userNum']);
$userMsg = clr($_POST['msg']);


if (isset($_POST['submit'])) {
  $errs = [];
  if (strlen($userName) <= 2 || empty($userName)) {
    $errs[] = "Name Cannot Be Empty";
  }
  if (empty($userMsg)) {
    $errs[] = "Message Cannot Be Empty";
  }
  if (strlen($userMsg) < 20) {
    $errs[] = "Message Has To Be Atleast 20 character";
  }

  if (empty($errs)) {
    $q = "INSERT INTO messages (`name` , `email` , `phone` , `message` ) VALUES ('$userName','$userMail' , '$userPhone' , '$userMsg')";
    mysqli_query($conn, $q);
    if (mysqli_affected_rows($conn) == 1) {
?>
      <div class="alert alert-success text-center" role="alert">
        Message Sent Successfully . ❤️
        <div class="d-flex flex-row-reverse">
          <a href="index.php" class="btn btn-primary">Back Home</a>
        </div>
      </div>
<?php
    }
  } else {
    $_SESSION['errs'] = $errs;
    //print_r($errs);
    //die;
    header("Location: contact.php");
  }
} else {
  header("Location: index.php");
}
?>