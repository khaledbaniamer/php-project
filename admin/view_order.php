<?php

require "category_backend.php";

$i = $_GET['view_order'];
$all_product = select_orders_details($connect, $i);





?>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">image</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
                <th scope="col">category</th>
                <th scope="col">quantity</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($all_product); $i++) { 
                
                $delails = select_product($connect, $all_product[$i]['product_id']);?>
                <tr>

                    <th scope="row"><?php echo $delails["product_id"] ?></th>

                    <td><?php echo $delails["product_name"] ?></td>

                    <td><img src="image/product_image/<?php echo $delails["product_image"] ?>" alt="image" style="width:70px;"></td>

                    <td><?php echo $delails["product_price"] ?></td>

                    <td><?php echo $delails["product_description"] ?></td>

                    <td><?php echo $delails["category_id"]  ?></td>
                    <form action="" method="post">
                        <td><input type="number" min="0" value="<?php echo $all_product[$i]["quantity"]  ?>" style=" width:30% " name="product_qty"></td>

                        <input type="hidden" min="0" value="<?php echo $all_product[$i]["product_id"]  ?>" style=" width:30% " name="product_id">

                        <td>
                            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                            <input type="submit" name="update" value="Update" class="btn btn-secondary" style="background-color :#ef7828 ;">
                        </td>
                    </form>
                </tr>
            <?php

            }
            ?>
        </tbody>
    </table>
</div>

<?php 
    if(isset($_POST['delete'])){
        
    }
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
