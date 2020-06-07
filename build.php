<?php
session_start();
require "./database/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build a PC</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md4 mb-3 bg-white border-bottom box-shadow">
        <a class="card-body text-dark" href="./index.php"><h3 class="my-0 mr-md-auto font-weight-normal">Compumeum</h3></a>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.php">Home</a>
            <?php if( isset($_SESSION["user"]) ): ?>
            <a class="btn btn-outline-danger" href="./controller/doLogout.php">Logout</a>
            <?php else: ?>
                <a class="p-2 text-dark" href="./login.php">Login</a>
                <a class="p-2 text-dark" href="./register.php">Sign Up</a>
            <?php endif; ?>
        </nav>
    </div>
    </header>
    <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-auto mx-auto">
          <div class="row">
            <div class="col-md-14">
              <div class="card shadow-lg">
                <div class="card-body" style="width: 800px;">
                  <div class="filter-sidebar ">
                      <header class="">                      
                          <h3 class="display-4 text-center">Build a PC</h3>
                          <a href="./game-recommendation.php"><p class="p-2 text-center text-dark">Recommendation by Games</p></a>
                          <?php if( isset($_SESSION["user"]) && $_SESSION["user"]["role"] == "admin"):?>
                          <a href="./insert.php"><p class="p-2 text-center text-dark">Add product</p></a>
                          <?php endif; ?>
                      </header>
                      <hr>

    <div id="form">
        <form action="./order.php" method="post">
        <table>
            <thead>
                <tr>
                    <th scope="col">Component</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="35%">Processor</td>
                    <td width="40%">
                        <select class="form-control" name="processor" style="max-width:90%;" id="processor">
                            <option value="0">--</option>
                            <?php
                            $result = $conn->query("SELECT * FROM processors");
                            while($row = $result->fetch_assoc()):
                            ?>
                            <option value="<?= $row["product_id"]; ?>"><?= $row["product_name"]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                    <td scope="row" width="20%" id="cpu_price">
                    </td>
                    <?php if( $_SESSION['user']['role'] == "admin" ): ?>
                    <td id="cpu_delete"></td>
                    <?php endif; ?>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="20%">CPU Cooler</td>
                    <td>
                        <!-- <a href="./products/cpu-cooler">Choose a CPU Cooler</a> -->
                        <select class="form-control" name="cpu_cooler" style="max-width:90%;" id="cpu_cooler">
                            <option value="0">--</option>
                            <?php
                            $result = $conn->query("SELECT * FROM cpucoolers");
                            while($row = $result->fetch_assoc()):
                            ?>
                            <option value="<?= $row["product_id"]; ?>"><?= $row["product_name"]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                    <td scope="row" width="30%" id="cpu_cooler_price">
                    </td>
                    <?php if( $_SESSION['user']['role'] == "admin" ): ?>
                    <td id="cpu_cooler_delete"></td>
                    <?php endif; ?>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">Power Supply</td>
                    <td>
                        <select class="form-control" name="psu" style="max-width:90%;" id="psu">
                            <option value="0">--</option>
                            <?php
                            $result = $conn->query("SELECT * FROM psus");
                            while($row = $result->fetch_assoc()):
                            ?>
                            <option value="<?= $row["product_id"]; ?>"><?= $row["product_name"]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                    <td scope="row" width="30%" id="psu_price">
                    </td>
                    <?php if( $_SESSION['user']['role'] == "admin" ): ?>
                    <td id="psu_delete"></td>
                    <?php endif; ?>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">Motherboard and Case Size</td>
                    <td>
                        <select class="form-control" name="motherboard" style="max-width:90%;" id="motherboard">
                            <option value="0">--</option>
                            <?php
                            $result = $conn->query("SELECT * FROM motherboards");
                            while($row = $result->fetch_assoc()):
                            ?>
                            <option value="<?= $row["product_id"]; ?>"><?= $row["product_name"]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                    <td scope="row" width="30%" id="motherboard_price">
                    </td>
                    <?php if( $_SESSION['user']['role'] == "admin" ): ?>
                    <td id="motherboard_delete"></td>
                    <?php endif; ?>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">RAM</td>
                    <td>
                        <select class="form-control" name="ram" style="max-width:90%;" id="ram">
                            <option value="0">--</option>
                            <?php
                            $result = $conn->query("SELECT * FROM rams");
                            while($row = $result->fetch_assoc()):
                            ?>
                            <option value="<?= $row["product_id"]; ?>"><?= $row["product_name"]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                    <td scope="row" width="30%" id="ram_price">
                    </td>
                    <?php if( $_SESSION['user']['role'] == "admin" ): ?>
                    <td id="ram_delete"></td>
                    <?php endif; ?>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">Graphics Card</td>
                    <td>
                        <select class="form-control" name="gpu" style="max-width:90%;" id="gpu">
                            <option value="0">--</option>
                            <?php
                            $result = $conn->query("SELECT * FROM gpus");
                            while($row = $result->fetch_assoc()):
                            ?>
                            <option value="<?= $row["product_id"]; ?>"><?= $row["product_name"]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                    <td scope="row" width="30%" id="gpu_price">
                    </td>
                    <?php if( $_SESSION['user']['role'] == "admin" ): ?>
                    <td id="gpu_delete"></td>
                    <?php endif; ?>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">Storage</td>
                    <td>
                        <select class="form-control" name="storage" style="max-width:90%;" id="storage">
                            <option value="0">--</option>
                            <?php
                            $result = $conn->query("SELECT * FROM storages");
                            while($row = $result->fetch_assoc()):
                            ?>
                            <option value="<?= $row["product_id"]; ?>"><?= $row["product_name"]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                    <td scope="row" width="30%" id="storage_price">
                    </td>
                    <?php if( $_SESSION['user']['role'] == "admin" ): ?>
                    <td id="storage_delete"></td>
                    <?php endif; ?>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">Operating System</td>
                    <td>
                        <select class="form-control" name="os" style="max-width:90%;" id="os">
                            <option value="0">--</option>
                            <?php
                            $result = $conn->query("SELECT * FROM operatingsystems");
                            while($row = $result->fetch_assoc()):
                            ?>
                            <option value="<?= $row["product_id"]; ?>"><?= $row["product_name"]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                    <td scope="row" width="30%" id="os_price">
                    </td>
                    <?php if( $_SESSION['user']['role'] == "admin" ): ?>
                    <td id="os_delete"></td>
                    <?php endif; ?>
                    </div>
                </tr>
            </tbody>
        </table>
            <br>
            <button type="submit" class="btn" style="width: 200px;">Order</button>
        </form>
    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <footer>
    <article class="bg-dark">
        <div class="card-body text-center">
            <p class="h5 text-white mt-4"><a class="text-white" href="./index.php">Compumeum</a></p>
            <p class="text-white">© 2020 All rights reserved.</p>
        </div>
    </article>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>