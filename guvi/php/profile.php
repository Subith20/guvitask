
<?php 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "account";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$var=$_GET['email'];
$sql = mysqli_query($conn,'select * from signup where email="'.$var.'"');
$row = mysqli_num_rows($sql);

?>

<!doctype html>
<html lang='en'>

<head>
    <title>Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./style1.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <br><br><br><br><br>
    <div class="container " style="background-color: #e2e8f0;">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class=" breadcrumb ">
                    <li class="breadcrumb-item "><a href="index.html ">Home</a></li>
                    <li class="breadcrumb-item active " aria-current="page ">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <?php while($rows=mysqli_fetch_assoc($sql)) 
            { 
            ?> 
            
            
            <div class="row gutters-sm ">
                <div class="col-md-4 mb-3 ">
                    <div class="card ">
                        <div class="card-body "style=" background-color: #ff8c6b;">
                            <div class="d-flex flex-column align-items-center text-center ">
                                <?php
                                
                                $image = $rows['image'];
                                echo "<img src='./images/$image'alt=Image of Seal  class=rounded-circle  width=215 height=215  style=background-color: #ff8c6b;>";
                                ?>
                                <div class="mt-3 ">
                                    <h4><?php echo $rows['name']; ?></h4>
                                    <!-- <p class="text-secondary mb-1 ">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm ">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary ">Follow</button>
                                    <button class="btn btn-outline-primary ">Message</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card mt-3 ">
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">
                                <h6 class="mb-0 "><svg xmlns="http://www.w3.org/2000/svg " width="24 " height="24 " viewBox="0 0 24 24 " fill="none " stroke="currentColor " stroke-width="2 " stroke-linecap="round " stroke-linejoin="round " class="feather
                                    feather-globe mr-2 icon-inline "><circle cx="12 " cy="12 " r="10 "></circle><line x1="2 " y1="12 " x2="22 " y2="12 "></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z "></path></svg>Website</h6>
                                <span class="text-secondary ">https://bootdey.com</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">
                                <h6 class="mb-0 "><svg xmlns="http://www.w3.org/2000/svg " width="24 " height="24 " viewBox="0 0 24 24 " fill="none " stroke="currentColor " stroke-width="2 " stroke-linecap="round " stroke-linejoin="round " class="feather
                                    feather-github mr-2 icon-inline "><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65
                                    5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22 "></path></svg>Github</h6>
                                <span class="text-secondary ">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">
                                <h6 class="mb-0 "><svg xmlns="http://www.w3.org/2000/svg " width="24 " height="24 " viewBox="0 0 24 24 " fill="none " stroke="currentColor " stroke-width="2 " stroke-linecap="round " stroke-linejoin="round " class="feather
                                    feather-twitter mr-2 icon-inline text-info "><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0
                                    23 3z "></path></svg>Twitter</h6>
                                <span class="text-secondary ">@bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">
                                <h6 class="mb-0 "><svg xmlns="http://www.w3.org/2000/svg " width="24 " height="24 " viewBox="0 0 24 24 " fill="none " stroke="currentColor " stroke-width="2 " stroke-linecap="round " stroke-linejoin="round " class="feather
                                    feather-instagram mr-2 icon-inline text-danger "><rect x="2 " y="2 " width="20 " height="20 " rx="5 " ry="5 "></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z "></path><line x1="17.5 " y1="6.5 " x2="17.51
                                    " y2="6.5 "></line></svg>Instagram</h6>
                                <span class="text-secondary ">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">
                                <h6 class="mb-0 "><svg xmlns="http://www.w3.org/2000/svg " width="24 " height="24 " viewBox="0 0 24 24 " fill="none " stroke="currentColor " stroke-width="2 " stroke-linecap="round " stroke-linejoin="round " class="feather
                                    feather-facebook mr-2 icon-inline text-primary "><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z "></path></svg>Facebook</h6>
                                <span class="text-secondary ">bootdey</span>
                            </li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-md-8 ">
                    <div class="card mb-3 ">
                        <div class="card-body ">
                            <div class="row ">
                                <div class="col-sm-3 ">
                                    <h6 class="mb-0 ">Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary ">
                                <?php echo $rows['name']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-3 ">
                                    <h6 class="mb-0 ">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary ">
                                <?php echo $rows['email']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-3 ">
                                    <h6 class="mb-0 ">Password</h6>
                                </div>
                                <div class="col-sm-9 text-secondary ">
                                <?php echo $rows['pass']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-3 ">
                                    <h6 class="mb-0 ">Country</h6>
                                </div>
                                <div class="col-sm-9 text-secondary ">
                                <?php echo $rows['country']; ?>
                                </div>
                            </div>
                            <hr>
                            <!-- <div class="row ">
                                <div class="col-sm-3 ">
                                    <h6 class="mb-0 ">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary ">
                                    (239) 816-9029
                                </div>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-3 ">
                                    <h6 class="mb-0 ">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary ">
                                    (320) 380-4539
                                </div>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-3 ">
                                    <h6 class="mb-0 ">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary ">
                                    Bay Area, San Francisco, CA
                                </div>
                            </div>
                            <hr> -->
                            <div class="row ">
                                <div class="col-sm-12 ">
                                    <a class="btn btn-info " target="__blank " href="./index.html">Back to home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                } 
           ?>
                    <!-- <div class="row gutters-sm ">
                        <div class="col-sm-6 mb-3 ">
                            <div class="card h-100 ">
                                <div class="card-body ">
                                    <h6 class="d-flex align-items-center mb-3 "><i class="material-icons text-info mr-2 ">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class="progress mb-3 " style="height: 5px ">
                                        <div class="progress-bar bg-primary " role="progressbar " style="width: 80% " aria-valuenow="80 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class="progress mb-3 " style="height: 5px ">
                                        <div class="progress-bar bg-primary " role="progressbar " style="width: 72% " aria-valuenow="72 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class="progress mb-3 " style="height: 5px ">
                                        <div class="progress-bar bg-primary " role="progressbar " style="width: 89% " aria-valuenow="89 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class="progress mb-3 " style="height: 5px ">
                                        <div class="progress-bar bg-primary " role="progressbar " style="width: 55% " aria-valuenow="55 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class="progress mb-3 " style="height: 5px ">
                                        <div class="progress-bar bg-primary " role="progressbar " style="width: 66% " aria-valuenow="66 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3 ">
                            <div class="card h-100 ">
                                <div class="card-body ">
                                    <h6 class="d-flex align-items-center mb-3 "><i class="material-icons text-info mr-2 ">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class="progress mb-3 " style="height: 5px ">
                                        <div class="progress-bar bg-primary " role="progressbar " style="width: 80% " aria-valuenow="80 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class="progress mb-3 " style="height: 5px ">
                                        <div class="progress-bar bg-primary " role="progressbar " style="width: 72% " aria-valuenow="72 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class="progress mb-3 " style="height: 5px ">
                                        <div class="progress-bar bg-primary " role="progressbar " style="width: 89% " aria-valuenow="89 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class="progress mb-3 " style="height: 5px ">
                                        <div class="progress-bar bg-primary " role="progressbar " style="width: 55% " aria-valuenow="55 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class="progress mb-3 " style="height: 5px ">
                                        <div class="progress-bar bg-primary " role="progressbar " style="width: 66% " aria-valuenow="66 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->



                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>