<!DOCTYPE html>
<html>
<head>
    <title>Online voting system</title>
    <link rel="stylesheet" href="css/bootstrap.css" /
    <link rel="stylesheet" href="mystyle.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Online Voting System</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="">Home</a></li>
                <li><a href="">Parties</a></li>
                <li><a href="idgenerate.php">ID Generate</a></li>
                <li><a href="">Election</a></li>
                <li><a href="">Results</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="#" style="color:orangered;"><?php echo $_SESSION['user_name']; ?></a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <div class="col-sm-8 col-sm-offset-2 img-thumbnail" style="background-color: gray;">
        <img src="images/Vote.jpg" class="img img-thumbnail img-responsive">
    </div>
</div>



