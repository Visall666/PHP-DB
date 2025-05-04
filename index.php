<?php 
    include('config.php');
    $title = "Home";
    include('includes/header.php');
    
?>
<body>
    <div class="container">
        <h2> PHP-Database </h2>
        <p>
            <a href="#" class="btn btn-primary btn-sm">Home</a>
            <a href="categories/index.php" class="btn btn-success btn-sm">Categories</a>
            <a href="products/index.php" class="btn btn-success btn-sm">Products</a>
            <a href="employees/index.php" class="btn btn-success btn-sm">Employees</a>
        </p>
    </div>
<?php include('includes/footer.php');?>