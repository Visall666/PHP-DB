<?php
    include('../config.php');
    include('../function.php');
    $success = false;
    $error = false; 

    if(isset($_POST['bnt'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $sql = "insert into employees ("
    }
?>
<?php $title = "Create"; ?>
<?php include('../inlcudes/header.php'); ?>
<body>
    <div class="container">
        <h2>Create Employees</h2>
        <p>
            <a href="index.php" class="btn btn-success btn-sm">Back</a>
        </p>
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Name
                            <span class = "text-danger">*</span>
                        </label>
                        <input type="text" name = "name" id = "name" class = "form-control" require autofocus>
                    </div>

                    <div class="form-group mt-2">
                        <label for="description">Title</label>
                        <textarea name="description" id="description" class = "form-control" rows = 4></textarea>
                    </div>
                    
                    <div class="form-group mt-3">
                        <button class="btn btn-primary btn-sm" id = "btn" >Save</button>
                        <a href="index.php" class="btn btn-danger btn-sm">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<?php include('../inlcudes/footer.php'); ?>