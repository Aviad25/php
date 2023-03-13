<?php
include('../db.php');
include('menu.php') 
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            All Products
        </div>
        <div class="card-body">
            <section id="content mt-5">
                <div class="content-blog  bg-white">
                    <div class="container">
                        <table class="table table-striped">
                            <thead>
                                <tr> 
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Product price</th>
                                    <th>Product Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM product";
                                    $result = mysqli_query($con, $sql);
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <?php $prod_img = $row["prod_img"];?>
                                                <td><?php echo "<img src=\"$prod_img\"  height=\"100px\" width=\"100px\" />";?></td>
                                                <td><?php echo $row["prod_desc"] ?></td>
                                                <td><?php echo $row["prod_price"] ?></td>
                                                <td><?php echo $row["prod_gender"] ?></td>
                                                <td><a href='editrod.php?id=<?php echo $row["prod_id"] ?>'>Edit</a> 
                                                <a href='deleteprod.php?id=<?php echo $row["prod_id"] ?>'>Delete</a></td>
                                            </tr>
                                            <?php
                                        }
                                    } 
                                    else {
                                        echo "0 results";
                                    }
                                ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>