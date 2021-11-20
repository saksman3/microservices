<html>

    <head></head>
    <body>
        <h1>Welcome to Products Microservices</h1>
        <ul>
            <?php
               $json = file_get_contents("http://product-service/products");
               $obj=json_decode($json);
               $products=$obj->product;
               foreach($products as $product){
                   echo"<li>$product</li>";
               }
            ?>
        </ul>
    </body>
</html>