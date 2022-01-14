
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HMS HOME page</title>
    

    
</head>
<body>
<?php
include("includes/header.php");
//include "$_SERVER[DOCUMENT_ROOT]/hms/includes/header.php";
// Note: array key quotes only absent in double quotes context

?>
<div style="margin-top: 50px;"></div>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3 mx-1 shadow">
                <img src="img/info.png" style="width: 100%; height: 190px;" alt="img/info.png">
                <h5 class="text-center">Click on the button for more information</h5>
                <a href="#">
                    <button class="btn btn-success my-1" style="margin-left: 10%">More Information</button>
                </a>

            </div>

            <div class="col-md-4 mx-1 shadow">
                <img src="img/patient.jpg" style="width: 100%;" class="my-1">
                <h5 class="text-center">Create Account so that we can take good care of you</h5>
                <a href="#">
                    <button class="btn btn-success my-3" style="margin-left: 25%;">Create Account!!!</button>
                </a>
            </div>

            <div class="col-md-4 mx-1 shadow">
                <img src="img/doctor.jpg" style="width: 100%;" alt="img/doctor.jpg" class="my-1">
                <h5 class="text-center">We are employing for doctors</h5>
                <a href="#">
                    <button class="btn btn-success my-3" style="margin-left: 30%;">Apply Now!!</button>
                </a>
            </div>          

        </div>

    </div>
</div>
    
</body>
</html>