<?php
    include('../config.php');
    include('../function.php');

    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $sql = "insert into users (name) value('$name')";

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
        <h3>Create Users</h3>
        <p>
            <a href="index.php" class="btn btn-success btn-sm">Back</a>
        </p>
        <form method = "post">
            <?php alert_success(); alert_error(); ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <label for="name" class="col-sm-3" >Name
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="name" id="name" class= "form-control" require autofocus>
                        </div>
                    </div>                 
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-6">
                    <div class="row">
                        <label for="phone" class="col-sm-3" >Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" id="Phone" class="form-control">
                        </div>
                    </div>                 
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-6">
                    <div class="row">
                        <label for="email" class="col-sm-3" required>Email <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>                 
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-6">
                    <div class="row">
                        <label for="username" class="col-sm-3" >Username</label>
                        <div class="col-sm-9">
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                    </div>                 
                </div>
            </div>
        </form>
    </div>
<?php include('../includes/footer.php'); ?>