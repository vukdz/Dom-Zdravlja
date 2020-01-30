<?php 
    session_start();
    header('Content-Type: text/html; charset=utf-8');

    if (!isset($_SESSION["username"]))
    {
         header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="sr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    h5 {
        display: inline;
    }
    table, th, td {
        border: 2px solid #ccc;
        border-radius: 4px;
        text-align: center;
        padding: 5px;
        background-color: #f8f8f8;
    }

    select {
        width: 100%;
        height: 26px;
    }
    </style>

    <script>
        function izmena(str)
        {
            var xhttp;
            if (str == "")
            {
                document.getElementById("izml").innerHTML = "";
                return;
            }
            else
            {
                if (window.XMLHttpRequest)
                {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("izml").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","izmenalekara.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dobrodosli, <?php echo $_SESSION["username"]; ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="adminpanel.php">Radno vreme lekara</a>
                    </li>
                    <li>
                        <a href="panelvesti.php">Vesti</a>
                    </li>               
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="logout.php"><b>Odjava</b> <span class="glyphicon glyphicon-log-out"></span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-4 text-center"> 
                <form name="dodavanje" id="dodavanje" method="post">
                    <h3>Dodavanje lekara</h3>
                    <input type="text" name="ime" id="ime" placeholder="Ime lekara">
                    <input type="text" name="prezime" id="prez" placeholder="Prezime lekara"><br><br>
                    <h4>Radno vreme</h4>
                    <label for="od">Od:</label>
                    <input type="text" name="od" id="od" placeholder="HH:MM"><br>
                    <label for="do">Do:</label>
                    <input type="text" name="do" id="do" placeholder="HH:MM"><br><br>
                    <input type="submit" class="btn btn-primary" name="submit" value="Dodaj">
                    <?php
                        require_once("konekcija.php");

                        if (!empty($_POST['ime']) && !empty($_POST['prezime']) && !empty($_POST['od']) && !empty($_POST['do']))
                        {
                            $ime = $_POST['ime'];
                            $prez = $_POST['prezime'];
                            $od = $_POST['od'];
                            $do = $_POST['do'];

                            $sql = "INSERT INTO domzdravlja.lekari (ime, prezime, vremepoc, vremekraj) VALUES ('$ime', '$prez', '$od', '$do')";

                            if (mysqli_query($conn, $sql))
                            {
                                echo '<script type="text/javascript">
                                        window.location = "adminpanel.php"
                                        alert("Lekar uspesno dodat!");
                                    </script>';
                            }
                            else
                            {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }
                    ?>
                </form>
            </div>
            <div class="col-md-4 text-center">
                <form name="izmenaf" id="izmenaf" method="post">
                    <h3>Izmena lekara</h3>
                    <select onchange="izmena(this.value)">
                        <option>--Izaberite lekara--</option>
                        <?php
                            require_once("konekcija.php");

                            $sql = "SELECT * FROM domzdravlja.lekari";
                            $res = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($res))
                            {
                                $id = $row['id'];
                                ?>
                                    <option value="<?php echo $id; ?>"><?php echo $row['id']." ".$row['ime']." ".$row['prezime'];?></option>
                                <?php
                            }
                        ?>
                    </select>
                
                    <div id="izml"></div>
                    <?php
                        if (isset($_POST['submit1']))
                        {        
                            $vremepoc1 = $_POST['od1'];
                            $vremekraj1 = $_POST['do1'];
                            $lekarid = $_SESSION['lekarid'];
                            
                            $sql1 = "UPDATE domzdravlja.lekari SET vremepoc='$vremepoc1', vremekraj='$vremekraj1' WHERE id='$lekarid'";
                            $res1 = mysqli_query($conn, $sql1);

                            if ($res1)
                            {
                                echo '<script type="text/javascript">
                                        window.location = "adminpanel.php"
                                        alert("Radno vreme uspesno izmenjeno!");
                                    </script>';
                            }
                            else
                            {
                                echo '<script type="text/javascript">
                                        window.location = "adminpanel.php"
                                        alert("Radno vreme nije uspesno izmenjeno!");
                                    </script>';
                            }
                        }
                    ?>
                </form>
            </div>
            <div class="col-md-4 text-center">
                <form name="brisanje" id="brisanje" method ="post">
                    <h3>Brisanje lekara</h3>
                    <?php
                        require_once("konekcija.php");

                        $sql = "SELECT * FROM domzdravlja.lekari";
                        $res = mysqli_query($conn, $sql);

                        echo 
                        "<table style="."width:100%".">
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Ime i prezime</th>
                        </tr>";

                        while ($row=mysqli_fetch_array($res))
                        {
                            echo 
                            "<tr>
                                <td><input type="."checkbox"." name="."checkbox[]"." id="."checkbox[]"." value=".$row['id']."</td>
                                <td>".$row['id']."</td>
                                <td>".$row['ime']." ".$row['prezime']."</td>
                            </tr>";
                        }
                    ?>
                    </table>
                    <br><input type="submit" class="btn btn-primary" name="brisanje" value="Obrisi">
                    <?php
                        if (isset($_POST["brisanje"]))
                        {
                            $del = $_POST["checkbox"];

                            foreach ($del as $value)
                            {
                                $sql = "DELETE FROM domzdravlja.lekari WHERE id='$value'";
                                $res = mysqli_query($conn, $sql);
                            }
                            if ($res)
                            {
                                echo
                                '<script type="text/javascript">
                                    window.location = "adminpanel.php"
                                    alert("Lekar je uspesno obrisan!");
                                </script>';
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>