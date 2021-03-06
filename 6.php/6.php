<html>

<head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap ربط/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap ربط/css/all.min.css">



</head>

<body>


    <div class="container py-5">

        <div class="row">

            <div class="col-md-4">
                <div class="front bg-primary">
                    <?php
                 $names= [
                    'name' => "<h1>ahmed hamdy</h1>",
                     'job' => "<h4>front-end</h4>",
                    'experience' => "<h3>3 year experience</h3>"
                 ];
                 foreach ($names as $name) {
                     echo "$name <br>";
                 }
               
                    ?>
                </div>

                <div class="back bg-danger">
                    <?php
                 $names= [
                    'name' => "<h1>mohammed shaker</h1>",
                     'job' => "<h4>back-end</h4>",
                    'experience' => "<h3>2 year experience</h3>"
                 ];
                 foreach ($names as $name) {
                     echo "$name <br>";
                 }
               
                    ?>
                </div>

                <div class="full bg-warning">
                    <?php
                 $names= [
                    'name' => "<h1>mohammed shaker</h1>",
                     'job' => "<h4>full-stack</h4>",
                    'experience' => "<h3>4 year experience</h3>"
                 ];
                 foreach ($names as $name) {
                     echo "$name <br>";
                 }
               
                    ?>
                </div>

            </div>





        </div>
    </div>






    <script src="bootstrap ربط/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap ربط/js/popper.min.js"></script>
    <script src="bootstrap ربط/js/bootstrap.min.js"></script>

</body>

</html>