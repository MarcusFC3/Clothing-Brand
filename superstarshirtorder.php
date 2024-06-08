<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Superstar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Superstar">

    <!--Things people want to say be are scared to say
    intimate, manifest, indicate
    trepidation, dread
    vivid, lucid, rich
    2-4 words
    E.W.
    -->
    <meta keywords="Clothing">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/superstarstyle.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div id="headernav">


                <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
                    <div class="container-fluid">
                        <a class="navbar-brand" aria-disabled="true"><span id="navbarBrand"><img
                                    src="img/superstarlogo.png" alt="right arrow" height="90"></span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarScroll">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link navbar-text" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar-text" href="store.html">Store</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar-text" href="aboutus.html">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                yes
            </div>
        </div>

        <div class="row">
            
            <?php
                $SeverName = "DESKTOP-MO11PEJ\SQLEXPRESS01";
                $connectionOptions =[
                    "Database" =>"StorePractice",
                    "Uid"=>"",
                    "PWD"=>""
                ];
                $conn = sqlsrv_connect($serverName,$connectionInfo);
                if($conn){
                    echo "Connection Successful";
                }else{
                    echo "Connection Failed";
                }
                $sql = "INSERT INTO Orders VALUES(1,1)";
                $stmt = sqlsrv_query($conn, $sql);
                if ($stmt){
                    echo "It Worked!";
                }
            ?>

           
        </div>
        <div class="row">

            <footer>
                <a href=https://www.fourcounty.net>About Us</a>
                <!-- "&nbsp" adds a space between my two hyper links -->
                <a href="https://mrgeiger.com/">Employment</a>
                <br> Copyright &copy; 2023 Superstar All Rights Reserved.
            </footer>

        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
