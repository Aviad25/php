<?php
include('../db.php');
include('menu.php');

if(isset($_POST['submit'])){
    $prod_desc = $_POST['prod_desc'];
	$prod_price = $_POST['prod_price'];
	$prod_quan = $_POST['prod_quan'];
    $prod_gender = $_POST['prod_gender'];
}

if(isset($_FILES) & !empty($_FILES)){
    $name = $_FILES['prod_img']['name'];
    $size = $_FILES['prod_img']['size'];
    $type = $_FILES['prod_img']['type'];
    $tmp_name = $_FILES['prod_img']['tmp_name'];

    $max_size = 10000000;
    $extension = substr($name, strpos($name, '.') + 1);

    if(isset($name) && !empty($name)){
        if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
            $location = "uploads/";
            if(move_uploaded_file($tmp_name, $location.$name)){
                
                $sql2 = "INSERT INTO product (prod_id, prod_desc, prod_img, prod_price ,prod_quan, prod_gender)
                VALUES ('', '$prod_desc', '$location$name','$prod_price','$prod_quan','$prod_gender')";
                $res = mysqli_query($con, $sql2);
                if($res){
                    
                    $message = 'Saved Successfully with image';
                }else{
                    $message = "Failed to Create Product";
                    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
                }
            }else{
                $message = "Failed to Upload File";
            }
        }else{
            $message = "Only JPG files are allowed and should be less that 1MB";
        }
    }else{
        $message = "Please Select a File";
    }
}
// else{
//     $sql = "INSERT INTO product (prod_id, prod_desc, prod_price ,prod_quan, prod_gender) VALUES ('', '$prod_desc', '$prod_price','$prod_quan','$prod_gender')";

//     if (mysqli_query($con, $sql)) {
//         $message = 'Saved Successfully';
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($con);
//     }
// } 

?>


<div class="container">
<div class="card">
<div class="card-header">
Add Products
</div>
<div class="card-body">
<section id="content ">
<div class="content-blog bg-white py-3">
<div class="container"> 
<?php
if(isset($message)){
    ?>
<div class="alert alert-success"><?php echo $message ?></div>
<?php
}
?>
    <form enctype="multipart/form-data" action='addproducts.php' method="post">
      <div class="form-group">
        <label for="prod_desc">Product Name</label>
        <input type="text" class="form-control" name="prod_desc" id="prod_desc" placeholder="Product Name">
      </div>

      <div class="form-group">
        <label for="prod_price">Product Price</label>
        <input type="text" class="form-control" name="prod_price" id="prod_price" placeholder="Product Price">
      </div>

      <div class="form-group">
      <label for="prod_quan">Product Quan</label>
        <input type="text" class="form-control" name="prod_quan" id="prod_quan" placeholder="Product Quantity">
      </div>

      <div class="form-group">
      <label for="prod_gender">Product Gender</label>
        <input type="text" class="form-control" name="prod_gender" id="prod_gender" placeholder="men / women">
      </div>

      <div class="form-group">
        <label for="prod_img">Product Image</label>
        <input type="file" name="prod_img" id="prod_img">
        <p class="help-block">Only jpg/png are allowed.</p>
      </div>
      
      <button type="submit"  name ='submit' class="btn btn-primary">Add Product</button>
    </form>
    
</div>
</div>

</section>
</div>
</div>


</div>
