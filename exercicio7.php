<?php

    // Init vars
    $name_err = $email_err = $message_err = "";
    $name = $email = $message = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Validate name
        if (empty(trim($_POST["name"]))){
            $name_err = "Please fill all the fields in the form!";
        } else {
            $name = $_POST["name"];
        }

        // Validate email
        if (empty(trim($_POST["email"]))){
            $email_err = "Please fill all the fields in the form!";
        } else {
            $email = $_POST["email"];
        }

        // Validate message
        if (empty(trim($_POST["message"]))){
            $message_err = "Please fill all the fields in the form!";
        } else {
            $message = $_POST["message"];
        }
    }

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<br>
<div class="container">
    <h2>Contact me</h2>
    <?php echo (!empty($name_err) || !empty($email_err) || !empty($message_err)) ? '<div class="alert alert-danger" role="alert">
        Please fill all the fields in the form!
    </div>' : ''; ?>

    <?php echo (($_SERVER['REQUEST_METHOD'] == 'POST') && empty($name_err) && empty($email_err) && empty($message_err)) ? '
        <div class="alert alert-success" role="alert">
            Thanks for leaving a message! I\'ll followup ASAP.
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">'. $name . '</h5>
                <p class="card-text">'. $email . '</p>
            </div>
            <div class="card-footer">
                ' . $message . '
            </div>
        </div>        
        '
        :
        '
        <form action="exercicio7.php" method="post">
            <h5>Your message</h5>
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="text" name="name" class="form-control '. ((!empty($name_err)) ? 'is-invalid' : '') .'" id="InputName" placeholder="Enter full name">
            </div>
            <div class="form-group">
                <label for="InputEmail1">Email address</label>
                <input type="email" name="email" class="form-control '. ((!empty($email_err)) ? 'is-invalid' : '') .'" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">I\'ll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea name="message" class="form-control '. ((!empty($message_err)) ? 'is-invalid' : '') .'" id="FormControlTextarea1" rows="3" placeholder="Enter message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
        '; ?>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>