<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";

$conn = mysqli_connect($server,$username,$password,$database);

if(isset($_POST['submitbutton']))
{
    $email = $_POST['email'];
    
    $insertData = mysqli_query($conn,"INSERT INTO 
    subscribers(email)VALUES('$email')");

if($insertData)
{
    echo "Data successfully submitted";
}
else{
    echo "Error Occurred";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">

</head>
<link rel="stylesheet" href="style.css">
<body>
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow "> 
       <div class="container-fluid">
        <a href="#" class="navbar-brand">Zalego Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <div class="navbar-nav">
                <a href="#" class="nav-link ">Home</a> 
                <a href="#" class="nav-link active ">About us</a>
                <a href="#" class="nav-link ">Contact us</a>
            </div>
        </div>
    </div>
     </nav>
    <main class="p-5 mb-2 text-black">

        <h1>About Us</h1>
        <p>This is a template for a single marketing or informational website.It includes a large callout called a jumbotron and three supporting pieces of content.Use it as a starting point to create something more unique</p>

    </main>
    <br>
     <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Our program</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla accusamus consequatur sapiente, voluptatibus asperiores labore est cum ad debitis fugiat!</p>
            </div>
            <div class="col-lg-6">
                <img src="q.webp" alt="" class="rounded" width="400px" height="200px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">
            <h1>
                The Programs
            </h1>
            <div class="card" style="width:18rem">
                <h6>
                    Skill Discovery
                </h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, optio?</p>
                <button class="btn btn-primary">View Details</button>
            </div>
            </div>
            <div class="col-lg-4">
            
            <div class="card" style="width:18rem">
                
                <h6>
                    Upskilling Program 
                </h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, optio?</p>
                <button class="btn btn-primary">View Details</button>
            </div>
            </div>
            <div class="col-lg-4">
                <br>
                <div class="card" style="width:18rem">
                    <h6>
                        Path Finding Program
                    </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, optio?</p>
                    <button class="btn btn-primary">View Details</button>
                </div>
                </div>
        </div>
        
        <br>
        <div class="row">
            <p>
                Subscribe to get information,Latest news about Zalego Academy
            </p>
            <form action="aboutus.php" method="POST">

            <div class="mb-3 col-lg-6">
                
                <input type="email" name="email" class="form-control" placeholder="Your email address">
                <button type="submit" name="submitbutton" class="btn btn-primary">subscribe</button>
            </div>

        </form>
        </div>
        <hr>
        <footer>
            &copy;Zalego Academy 2022
        </footer>
        
    </div>
    <!-- <script src="bootstrap-5.2.0-beta1-dist\bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0-beta1-dist\bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

</body>
</html>