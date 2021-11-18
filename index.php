<?php
include 'includes/common.php';
if (isset($_SESSION['email'])){
    header('location:home.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php require './includes/links.php';?>
        <meta charset="UTF-8">
        <title>index page</title>
    </head>
    <body>
        <?php
        require './includes/header.php';
        ?>
        <div class="content">
            <div class="container-fluid">
                <!-- Row 1 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Laptop 1</div>
                            <div class="panel-body"><img src="./img/L1.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">HP Pavilion</h4>
                                <p>Battery : 3800mAH</p>
                                <p>Processer: intel i7 10th Gen</p>
                                <p>RAM : 8GB SSD:512TB</p>
                                <p class="p-bold">Price : 59,990/-</p>
                               <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">laptop 2</div>
                            <div class="panel-body"><img src="./img/L2.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Dell G3</h4>
                                <p>Battery : 4085mAH</p>
                                <p>Processer:intel i55 10th Gen</p>
                                <p>RAM : 8GB HDD:1TB</p>
                                <p class="p-bold">Price : 73,990/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Laptop 3</div>
                            <div class="panel-body"><img src="./img/L3.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Asus ROG Strix G15</h4>
                                <p>Battery : 3400mAH</p>
                                <p>[processr :Core i7 10th Gen</p>
                                <p>RAM : 8GB SSD: 1TB</p>
                                <p class="p-bold">Price : 94,990/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Laptop 4</div>
                            <div class="panel-body"><img src="./img/L4.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Apple MAC Book PRO</h4>
                                <p>Battery : 4085mAH</p>
                                <p>Processer : Core i5 8th Gen </p>
                                <p>RAM : 8GB SSD: 512 TB</p>
                                <p class="p-bold">Price : 1,42,990/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Laptop 5</div>
                            <div class="panel-body"><img src="./img/L5.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Acer black 90</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Processer : i3 7th Gen </p>
                                <p>RAM : 2GB HDD: 512TB </p>
                                <p class="p-bold">Price : 41,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Laptop 6</div>
                            <div class="panel-body"><img src="./img/L6.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Acer Swift 3</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Processer : i5 8th Gen</p>
                                <p>RAM : 8GB SSD:512TB</p>
                                <p class="p-bold">Price : 54,990/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include './includes/footer.php';
        ?>
    </body>
</html>
