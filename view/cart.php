<?php
$database = new Database();
$db = $database->getConnection();
$CartController = new CartController($db);
$stmt = $CartController->cartAllItems($_SESSION['user_id']);
?>

<div class="container">

    <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <nav aria-label="Breadcrumb">
                    <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </nav>
                <h1 class="text-center">Cart</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <table class="table" id="cartTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Product Description</th>
                        <th scope="col">Total Quantity</th>
                        <th scope="col">Total Price</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row); ?>
                        <tr>
                            <td>
                                <?php
                                foreach (json_decode($product_values) as $key => $value) {
                                    echo $key . ": " . $value . "<br>";
                                }
                                ?>
                            </td>
                            <td><?php echo $total_quantity; ?></td>
                            <td><?php echo "£ " . $total_price; ?></td>
                            <td>
                                <button type="button" id="deteleitem" product-id="<?= $id; ?>" class="btn btn-danger btn-xs">X</button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-3">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th colspan="2" class="text-center">ORDER SUMMARY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Count Item:</th>
                        <td><?= $CartController->getCartCountItem($_SESSION['user_id']); ?></td>
                    </tr>
                    <tr>
                        <th scope="row">TOTAL:</th>
                        <td><?= $CartController->getCartPriceTotal($_SESSION['user_id']); ?></td>
                    </tr>
                    </tbody>
                </table>

                <button class="btn btn-primary btn-block">Check Out</button>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function () {
        $("#cartTable #deteleitem").click(function () {
            var id = $(this).attr("product-id");
            let removeitem = $(this).parent().parent().remove();
            $.ajax({
                url: "deletetocart",
                method: "POST",
                data: {id: id},
                success: function (data) {
                    removeitem;
                    __Alert("Item Deleted", "success", 'success');
                }
            });
        });
    });

</script>