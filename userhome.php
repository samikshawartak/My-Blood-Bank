<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>User Home</title>
</head>

<body>
    <!-- topnav -->
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">My Blood Bank</a>
        <ul class="navbar-nav ml-auto">
             <li><a class="nav-link" href="userlogin.php">Logout&nbsp;<i class="fa fa-power-off" aria-hidden="true"></i></a></li>
        </ul>
        </nav>

   
    <br><br><br>
    <h1 class="adminh1">Welcome!</h1><br><br><br>
    <div class="container-fluid">
        <button type="button" class="btn btn-outline-success col-sm-2 offset-3"><a href="donate.php">Book Appointment for Blood Donation</a></button>
        <button type="button" class="btn btn-outline-success col-sm-2 offset-2"><a href="request.php">Request for Blood</a></button>
    </div>
    

    
    <!-- bottomnav -->
    <?php include 'footer.php';?>

</body>

</html>