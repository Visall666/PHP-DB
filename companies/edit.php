<?php
    include('../config.php');
    $title = "Edit Companies Info";
    include('../function.php');
    $com = scalar_query("select * from companies where id=1");
?>
  
<?php include('../includes/header.php');?>
<?php
    if(isset($_POST['btn']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $description = $_POST['description'];
        $txt = "";
        //upload logo if user select logo
        $path = upload('logo', 'uploads/companies/');
        if($path !='')
        {
           $txt = ",logo='$path'" ;
        }
        $update = "update companies set name='$name', phone='$phone', email='$email', address='$address', 
                    description ='$description' $txt where id=1";
        $x = non_query($update);
        if($x)
        {
            $_SESSION['success'] = SUCCESS_SMS;
            header('location: index.php');
        }else{
            $_SESSION['error'] = ERROR_SMS;
        }
    }
?>
<body>
    <div class="container">
        <h4>Edit Companies Info</h4>
        <p>
            <a href="index.php" class="btn btn-success btn-sm">Back</a>
        </p>
        <form enctype="multipart/form-data" method="post"> <!-- enctype use when the form have image -->
            <?php alert_error() ?>
            <div class="row">
                <!-- info first-side -->
                <div class="col-sm-6">
                    <div class="row">
                        <label for="name" class="col-sm-3">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" required value="<?=$com['name'];?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="phone" class="col-sm-3" >Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" id="phone" value="<?=$com['phone'];?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="email" class="col-sm-3" >Email <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="email" required value="<?=$com['email'];?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="address" class="col-sm-3">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="address" value="<?=$com['address'];?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="description" class="col-sm-3">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3" name="description" id="description"><?=$com['description'];?></textarea>
                        </div>
                    </div>
                </div>

                <!-- info second-side-->
                <div class="col-sm-6">
                    <div class="row mt-2">
                        <label for="logo" class="col-sm-3">Logo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="logo" accept="image/*" id="logo" onchange="preview(event)">
                            <div class="mt-2">
                                <img src="<?=BURL.$com['logo'];?>" alt="" width="120" id="img">
                            </div>
                            <a href="edit.php" class="btn btn-danger btn-sm">Cancel</a>
                            <button class="btn btn-primary btn-sm" name="btn">Save</button>
                        </div>
                    </div>
                </div>
            </div>            
        </form>
    </div>
<?php include('../includes/footer.php');?>