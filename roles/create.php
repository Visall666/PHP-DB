<?php
    include('../config.php');
    include('../function.php');

    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $sql = "insert into roles (name) value('$name')";

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
?>
<?php $title = "Create"; ?>
<?php include('../includes/header.php'); ?>
    <div class="container">
        <h3>Create Roles</h3>
        <p>
            <a href="index.php" class="btn btn-success btn-sm">Back</a>
        </p>
        <form method = "post">
            <div class="row">
                <div class="col-sm-6">
                    <?php alert_success(); alert_error(); ?>

                    <div class="form-group">
                        <label for="name">Name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="name" id="name" class= "form-control" require autofocus>
                    </div>  

                    <div class="form-group mt-3">
                        <button class = "btn btn-primary btn-sm" name = "btn" >Save</button>
                        <a href="index.php" class="btn btn-danger btn-sm">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php include('../includes/footer.php'); ?>