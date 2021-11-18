<?php
require './includes/common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        require './includes/links.php';
        ?>
        <meta charset="UTF-8">
        <title>Home Page</title>
    </head>
    <body>
        <?php
            include './includes/header.php';
            include './includes/check_if_added.php';
            $user_id = $_SESSION['user_id'];
            $email = $_SESSION['email'];
            
        ?>
        <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                        echo "<h3 class='text-center'>Welcome $email</h3>";
                    ?>
                </div>
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
                               <?php if(check_if_added_to_cart(8)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Laptop 2</div>
                            <div class="panel-body"><img src="./img/L2.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Dell G3</h4>
                                <p>Battery : 4085mAH</p>
                                <p>Processer:intel i55 10th Gen</p>
                                <p>RAM : 8GB HDD:1TB</p>
                                <p class="p-bold">Price : 73,990/-</p>
                                <?php if(check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
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
                                <?php if(check_if_added_to_cart(1)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
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
                                <?php if(check_if_added_to_cart(6)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
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
                                <?php if(check_if_added_to_cart(10)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
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
                                <?php if(check_if_added_to_cart(11)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Laptop 7</div>
                            <div class="panel-body"><img src="./img/L7.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">HP Omen Ryzen 5 Hexa</h4>
                                <p>Battery : 3800mAH</p>
                                <p>Processer: intel i7 10th Gen</p>
                                <p>RAM : 8GB SSD:512TB</p>
                                <p class="p-bold">Price : 85,990/-</p>
                               <?php if(check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">laptop82</div>
                            <div class="panel-body"><img src="./img/L8.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Asus VivoBook Gaming </h4>
                                <p>Battery : 4085mAH</p>
                                <p>Processer:intel i5 9th Gen</p>
                                <p>RAM : 8GB HDD:1TB/256TB</p>
                                <p class="p-bold">Price : 64,990/-</p>
                                <?php if(check_if_added_to_cart(7)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Laptop 3</div>
                            <div class="panel-body"><img src="./img/L9.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Lenovo Ideapad L340</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Processr :Core i7 9th Gen</p>
                                <p>RAM : 8GB SSD: 256TB/ HDD : 1TB</p>
                                <p class="p-bold">Price : 73,990/-</p>
                                <?php if(check_if_added_to_cart(3)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
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
