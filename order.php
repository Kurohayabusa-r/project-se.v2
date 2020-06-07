<?php
// !! belom diganti
session_start();
include 'ajax/pricing.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <style>
        body {
        background: #007bff;
        background: linear-gradient(to right, #0062E6, #33AEFF);
        }

        table th{
        padding: 5px;
        width: 100%;
        }

        th td{
            text-align: center;
        }

    </style>

</head>
<body>
    <?php
    if( !isset($_SESSION["user"]) ){
        header("Location: ./login.php");
        exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $processor = $_POST["processor"];
        $cpu_cooler = $_POST["cpu_cooler"];
        $powersupply = $_POST["psu"];
        $motherboard = $_POST["motherboard"];
        $ram = $_POST["ram"];
        $gpu = $_POST["gpu"];
        $storage = $_POST["storage"];
        $os = $_POST["os"];
    }


 
    $total = $price[$processor] + $price[$cpu_cooler] + $price[$powersupply] + $price[$motherboard] + $price[$ram] + $price[$gpu] + $price[$storage] + $price[$os];
    ?>
<!--================================================================================-->

    <header>
        <div class="card-body">
            <a class="text-white" href="build.php"><h1 class="display-4">Back to building PC</h1></a>
        </div>
    </header>
    <div class="container">
    <br>
    
    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
    <header class="card-header">
        <!--<a href="./login.php" class="float-right btn btn-outline-primary mt-1">Log In</a>-->
        <h4 class="card-title mt-2">Confirm Order</h4>
    </header>
    <article class="card-body">
    <form action="index.php" method="POST">
         <!-- form-row end.// -->
        <div class="form-group">
            <table>
            <tr>
            <th>Cart</th>
            <th>Price</th>
            </tr>
            <div>
                <?php if ($price[$processor] != 0){?>
                <tr>
                <td><?php echo $row["product_name"] ?></td>
                <td><?php echo $row["product_price"] ?></td>
                </tr>
                <?php } ?>
                <?php if ($price[$cpu_cooler] != 0){?>
                <tr>
                <td><?php echo $cpu_cooler ?></td>
                <td><?php echo $price[$cpu_cooler] ?></td>
                </tr>
                <?php } ?>
                <?php if ($price[$powersupply] != 0){?>
                <tr>
                <td><?php echo $powersupply ?></td>
                <td><?php echo $price[$powersupply] ?></td>
                </tr>
                <?php } ?>
                <?php if ($price[$motherboard] != 0){?>
                <tr>
                <td><?php echo $motherboard ?></td>
                <td><?php echo $price[$motherboard] ?></td>
                </tr>
                <?php } ?>
                <?php if ($price[$ram] != 0){?>
                <tr>
                <td><?php echo $ram ?></td>
                <td><?php echo $price[$ram] ?></td>
                </tr>
                <?php } ?>
                <?php if ($price[$gpu] != 0){?>
                <tr>
                <td><?php echo $gpu ?></td>
                <td><?php echo $price[$gpu] ?></td>
                </tr>
                <?php } ?>
                <?php if ($price[$storage] != 0){?>
                <tr>
                <td><?php echo $storage ?></td>
                <td><?php echo $price[$storage] ?></td>
                </tr>
                <?php } ?>
                <?php if ($price[$os] != 0){?>
                <tr>
                <td><?php echo $os ?></td>
                <td><?php echo $price[$os] ?></td>
                </tr>
                <?php } ?>
                <tr style="border: 1px solid black; height: 10px;">
                <td><b>TOTAL</b></td>
                <td><b><?php echo "Rp.".$total ?></b></td>
                </tr>
            </div>
            </table>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="city">City:</label>
              <input type="text" class="form-control" name="city" placeholder="Jakarta" id="city" required>
            </div>
        </div> <!-- form-row.// -->

        <div class="form-group">
              <label for="address">Address:</label>
				<!-- Show selected price in value input type -->
                <input type="text" class="form-control" id="address" name="address" placeholder="Jl. Apel 2 No. 9" required>
              
        </div>


        <div class="form-row">
        <label class="control-label col-sm-2" for="nohp">Phone number:</label>
              <div class="col-sm-10">
				<!-- Show selected type in value input type -->
                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="081234567898" required>
              </div>
        </div>


      
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-primary btn-block"> Confirm  </button>
        </div> 
    </form>


    </article> <!-- card-body end .// -->
    
    </div> <!-- card.// -->
    </div> <!-- col.//-->
    
    </div> <!-- row.//-->
    
    
    </div> 
    <!--container end.//-->
    
    <br><br><br><br>
    <footer>
    <article class="">  
        <div class="card-body text-center">
            <p class="h5 text-white mt-4"><a class="text-white" href="./index.php">Compumeum</a></p>
            <p class="text-white">© 2020 All rights reserved.</p>
        </div>
    </article>
    </footer>










</body>
</html>