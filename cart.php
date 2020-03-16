<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="shopping.css">
</head>
<body>
        <div class="container">
        <?php 

        $connect = mysqli_connect('localhost', 'root', 'root', 'cart');
        $query = 'SELECT * FROM products ORDER by id ASC';

        $result = mysqli_query($connect, $query);

        if ($result):
        if(mysqli_num_rows($result) > 0):
            while($product = mysqli_fetch_assoc($result)):
                print_r($product);
                ?>
                <div class="col-sm-4 col-md-3">
                <form method="post" action="index.php?action =add&id=<?php echo $product['id']; ?> ">
                <div class="products">
                <img src="<?php echo $product['image']; ?>" class="img-responsive"/>
                <h4 class="text-info"><?php echo $product['name']; ?></h4>
                <h4>$ <?php echo $product['price']; ?></h4>
                <input type="text" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="name" value="<?php echo $product['name'] ?>"/>
                <input type="hidden" name="price" value="<?php echo $product['price'] ?>"/>
                <input type="submit" name="add-to-cart" style="margin-top:5px;" class="btn btn-info"
                            value="Add to Cart" />
                </div>
                </form>

                </div>
                 <?php 
                endwhile;
            endif;
        endif;
            
      
        ?>
        </div>
    
</body>
</html>





