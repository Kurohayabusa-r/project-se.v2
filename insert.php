<?php
session_start();
if( !isset($_SESSION["user"]) ){
  header("Location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Component</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
  if( $_SESSION["user"]['role'] != "admin" ){
      header("Location: ./index.php");
      exit;
  }
?>
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
                          <h3 class="display-4 text-center">Add a Component</h3>
                      </header>
                      <hr>

    <div id="form">
        <form action="./doInsert.php" method="post">
        <div class="form-group">
          <label for="productType">Product Type:</label>
          <select class="form-control" name="productType" id="productType">
            <option value="processors">Processor</option>
            <option value="cpucoolers">CPU Cooler</option>
            <option value="psus">Power Supply</option>
            <option value="motherboards">Motherboard</option>
            <option value="rams">RAM</option>
            <option value="gpus">Graphics Card</option>
            <option value="storages">Storage</option>
            <option value="operatingsystems">Operating System</option>
          </select>
        </div>
        <div class="form-group">
          <label for="productId">Product ID:</label>
          <input type="text" name="productId" class="form-control" id="productId" required>
        </div>
        <div class="form-group">
          <label for="productName">Product Name:</label>
          <input type="text" name="productName" class="form-control" id="productName" required>
        </div>
        <div class="form-group">
          <label for="productPrice">Product Price:</label>
          <input type="text" name="productPrice" class="form-control" id="productPrice" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn" style="width: 200px;">Add</button>
        </div>
        </form>
        <div class="errorMessage">
        <!-- Show Error Message -->
        <?php if( isset($_SESSION["error"]) ){ ?>
            <p style="color: red;"> <?php 
                if( isset($_SESSION["error"]) ){
                    echo $_SESSION["error"];
                }
                unset($_SESSION["error"]);
            ?> </p>
            <?php }else{?>
                <p style="color: green;"> <?php 
                if( isset($_SESSION["success"]) ){
                    echo $_SESSION["success"];
                }
                unset($_SESSION["success"]);
            ?> </p>
        <?php }?>
    </div>
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