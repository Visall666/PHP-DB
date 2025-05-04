<?php
    include('../config.php');
    include('../function.php');
    $result = query("select * from products");
?>
<?php $title = "Products"; ?>
<?php include('../includes/header.php'); ?>
<body>
    <div class="container">
        <h2> Products List</h2>
        <p>
            <a href="#" class="btn btn-primary btn-sm">Create</a>
            <a href="../index.php" class="btn btn-success btn-sm">Back</a>
        </p>

        <table class = "table table-bordered border-sm">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Supplier</td>
                    <td>Unit Price</td>
                    <td>Quantity</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php  if(mysqli_num_rows($result) > 0): ?>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?=$row['id'] ;?></td>
                            <td><?=$row['name'] ;?></td>
                            <td><?=$row['supplier'] ;?></td>
                            <td><?=$row['unit_price'] ;?></td>
                            <td><?=$row['quantity'] ;?></td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile ;?>
                <?php endif ;?>
            </tbody>
        </table>
    </div>
</body>
<?php include('../includes/footer.php');