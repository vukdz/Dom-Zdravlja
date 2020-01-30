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
                document.getElementById("izmv").innerHTML = "";
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
                        document.getElementById("izmv").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","izmenavesti.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
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
                    <li>
                        <a href="adminpanel.php">Radno vreme lekara</a>
                    </li>
                    <li class="active">
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

    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <form name="novavest" id="novavest" method="post" enctype="multipart/form-data">
                    <h3>Nova vest</h3>
                    <input type="text" name="naslov" id="naslov" placeholder="Naslov"><br><br>
                    <textarea rows="10" cols="50" name="sadrzaj" placeholder="Tekst..."></textarea><br><br>
                    <input type="file" name="slika" id="slika"><br>
                    <input type="submit" class="btn btn-primary" name="submit" value="Dodaj">
                    <?php
                        

                        if (isset($_POST['naslov']) && isset($_POST['sadrzaj']) && isset($_FILES['slika']))
                        {
                            $naslov = $_POST['naslov'];
                            $sadrzaj = $_POST['sadrzaj'];
                            $slika = $_FILES['slika'];
                            $target_dir = "slike/";
                            $target_file = $target_dir . basename($_FILES["slika"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                            echo $naslov;
                            echo $sadrzaj;
                            echo $target_file;

                            if(isset($_POST["submit"]))
                            {
                                $check = getimagesize($_FILES["slika"]["tmp_name"]);
                                if($check !== false)
                                {
                                    $uploadOk = 1;
                                }
                                else
                                {
                                    echo "Greska: Fajl koji ste odabrali nije slika.";
                                    $uploadOk = 0;
                                }           
                            }

                            if ($uploadOk == 0)
                            {
                                echo "Greska prilikom postavljanja slike.";
                            }
                            else
                            {
                                if (move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file))
                                {
                                    echo "Slika ". basename( $_FILES["slika"]["name"]). " je uspesno postavljena.";
                                }
                                else
                                {
                                    echo "Greska prilikom postavljanja slike.";
                                }
                            }

                            

                            require_once("konekcija.php");

                            $sql = "INSERT INTO domzdravlja.vesti (naslov, sadrzaj, slika) VALUES ('$naslov', '$sadrzaj', '$target_file')";
                            $res = mysqli_query($conn, $sql); 

                            if ($res)
                            {
                                echo '<script type="text/javascript">
                                        window.location = "panelvesti.php"
                                        alert("Vest je uspesno dodata!");
                                    </script>';
                            }
                            else
                            {
                                echo '<script type="text/javascript">
                                        window.location = "panelvesti.php"
                                        alert("Vest nije uspesno dodata!");
                                    </script>';
                            }
                            
                        }
                    ?>
                </form>
            </div>
            <div class="col-md-4 text-center">
                <form name="izmenavesti" id="izmenavesti" method="post" enctype="multipart/form-data">
                    <h3>Izmena vesti</h3>
                    <select onchange="izmena(this.value)">
                        <option>--Izaberite vest--</option>
                        <?php
                            require_once("konekcija.php");

                            $sql = "SELECT * FROM domzdravlja.vesti";
                            $res = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($res))
                            {
                                $id = $row['id'];
                                ?>
                                <option value="<?php echo $id; ?>"><?php echo $row['naslov']; ?></option>
                                <?php
                            }
                        ?>
                    </select>

                    <div id="izmv"></div>
                    <?php
                        if (isset($_POST['submit1']))
                        {
                            $naslov1 = $_POST['naslov1'];
                            $sadrzaj1 = $_POST['sadrzaj1'];
                            $vestid = $_SESSION['vestid'];

                            $sql1 = "UPDATE domzdravlja.vesti SET naslov='$naslov1', sadrzaj='$sadrzaj1' WHERE id='$vestid'";
                            $res1 = mysqli_query($conn, $sql1);

                            if ($res1)
                            {
                                echo '<script type="text/javascript">
                                        window.location = "panelvesti.php"
                                        alert("Vest je uspesno izmenjena!");
                                    </script>';
                            }
                            else
                            {
                                echo '<script type="text/javascript">
                                        window.location = "panelvesti.php"
                                        alert("Vest nije uspesno izmenjena!");
                                    </script>';
                            }
                        }
                    ?>
                </form>
            </div>
            <div class="col-md-4 text-center">
                <form name="brisanjevesti" id="brisanjevesti" method="post">
                    <h3>Brisanje vesti</h3>
                    <?php
                        require_once("konekcija.php");

                        $sql = "SELECT * FROM domzdravlja.vesti";
                        $res = mysqli_query($conn, $sql);

                        echo 
                        "<table style="."width:100%".">
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Naslov vesti</th>
                        </tr>";

                        while($row = mysqli_fetch_array($res))
                        {
                            echo 
                            "<tr>
                                <td><input type="."checkbox"." name="."checkbox[]"." id="."checkbox[]"." value=".$row['id']."</td>
                                <td>".$row['id']."</td>
                                <td>".$row['naslov']."</td>
                            </tr>";
                        }
                    ?>
                    </table>
                    <br><input type="submit" class="btn btn-primary" name="brisanjev" value="Obrisi">
                    <?php
                        if (isset($_POST["brisanjev"]))
                        {
                            $del = $_POST["checkbox"];

                            foreach ($del as $value)
                            {
                                $sql = "DELETE FROM domzdravlja.vesti WHERE id='$value'";
                                $res = mysqli_query($conn, $sql);
                            }
                            if ($res)
                            {
                                echo
                                '<script type="text/javascript">
                                    window.location = "adminpanel.php"
                                    alert("Vest je uspesno obrisana!");
                                </script>';
                            }
                        }
                    ?>
                </form>
            </div>
        </div>      
    </div>
</body>
</html>