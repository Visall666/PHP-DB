<?php
    include('../config.php');
    include('../function.php');
    $success = false;
    $error = false;

    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $sql = "insert into categories (name, description) value('$name', '$description')";

        $x = non_query($sql);
        if($x) {
            $success = true;
        }
        else {
            $error = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Create Categories</h3>
        <p>
            <a href="index.php" class="btn btn-success btn-sm">Back</a>
        </p>
        <form method = "post">
            <div class="row">
                <div class="col-sm-6">
                    <?php if($success): ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Information</strong> Data has been saved successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if($error): ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Information</strong> Fail to save data, please check again!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="name">Name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="name" id="name" class= "form-control" require autofocus>
                    </div>

                    <div class="form-group mt-2">
                        <label for="text">Description</label>
                        <textarea name="description" id="description" class = "form-control" rows = "4" ></textarea>
                    </div>   

                    <div class="form-group mt-3">
                        <button class = "btn btn-primary btn-sm" name = "btn" >Save</button>
                        <a href="index.php" class="btn btn-danger btn-sm">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </div>
</body>
</html>