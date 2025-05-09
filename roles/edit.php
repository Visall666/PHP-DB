<?php 
    include('../config.php');
    include('../function.php');
    
    $id = $_GET['id'];

    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $sql = "update roles set name = '$name' where id=$id ";

        $x = non_query($sql);
        if ($x) {
            $_SESSION['success'] = DEL_SUCCESS_SMS;
            header('location: index.php');
        }
        else{
            $_SESSION['error'] = DEL_ERROR_SMS;
            header('location: index.php');
        }
    }

    // read data for update
    $name = "";
    $sql1 = "select * from roles where id = $id";
    $row = scalar_query($sql1);
    $name = $row['name'];
?>
<?php $title = "Edit"; ?>
<?php include('../includes/header.php'); ?>
<body>
    <div class="container">
        <h3>Edit Roles</h3>
        <p>
            <a href="index.php" class = "btn btn-success btn-sm" >Back</a>
        </p>    
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <?php alert_error(); alert_success(); ?>
                    
                    <div class="form-group">
                        <label for="name">Name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="name" name="name" class="form-control" required autofocus value="<?=$name;?>">
                    </div>
                    
                    <div class="form-group mt-3">
                        <button class="btn btn-primary btn-sm" name="btn" >Save</button>
                        <a href="index.php" class="btn btn-danger btn-sm" >Cancel</a>
                    </div>
                </div>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </div>
</body>
<?php include('../includes/footer.php'); ?>