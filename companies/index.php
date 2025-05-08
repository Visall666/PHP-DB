<?php
    include('../config.php');
    $title = "Companies Info";
    include('../function.php');
    $com = scalar_query("select * from companies where id=1");
?>
  
<?php include('../includes/header.php');?>
<body>
    <div class="container">
        <h3>Companies Info</h3>
        <p>
            <a href="edit.php" class="btn btn-primary btn-sm">Edit</a>
            <a href="../index.php" class="btn btn-success btn-sm">Back</a>
        </p>
        <?php alert_success(); ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <label for="" class="col-sm-3">Name</label>
                    <div class="col-sm-9">
                        <strong><?=$com['name'];?></strong>
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="" class="col-sm-3">Phone</label>
                    <div class="col-sm-9">
                        <strong><?=$com['phone'];?></strong>
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="" class="col-sm-3">Email</label>
                    <div class="col-sm-9">
                        <strong><?=$com['email'];?></strong>
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="" class="col-sm-3">Address</label>
                    <div class="col-sm-9">
                        <strong><?=$com['address'];?></strong>
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="" class="col-sm-3">Description</label>
                    <div class="col-sm-9">
                        <strong><?=$com['description'];?></strong>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row mt-2">
                    <label for="" class="col-sm-3">Logo</label>
                    <div class="col-sm-9">
                        <img src="<?=BURL.$com['logo'];?>" alt="" width="150">
                    </div>
                </div>
            </div>
        </div> 
    </div>
<?php include('../includes/footer.php');?>