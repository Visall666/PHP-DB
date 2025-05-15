<!-- <?php
    include('../config.php');
    include('../function.php');

    $roles = query("select * from roles where active=1");
    $id = $_GET['id'];
?>
<?php $title = "Edit Users"; ?>
<?php include('../includes/header.php'); ?>
<?php

    if(isset($_POST['btn']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $language = $_POST['language'];
        $role_id = $_POST['role_id'];
        $password = $_POST['password'];

        $psw = "";
        if($password!=''){
            $psw = ",password=md5('$password')";
        }

        $sql = "update users set
        name='$name', phone='$phone', email='$email', language='$language', role_id='$role_id' $psw where id=$id";

        $x = non_query($sql);
        if ($x) {
            $_SESSION['success'] = SUCCESS_SMS;
        }
        else{
            $_SESSION['error'] = ERROR_SMS;
        }
    }
    $user = scalar_query("select * from users where id = $id");
    
?>

    <div class="container">

        <h3>Edit Users</h3>
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
                            <input type="text" name="name" id="name" class= "form-control" 
                            value="<?=$user['name'];?>">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="phone" class="col-sm-3" >Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" id="Phone" class="form-control"
                            value="<?=$user['phone'];?>">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="email" class="col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" id="email" class="form-control"
                            value="<?=$user['email'];?>">
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <label for="language" class="col-sm-3" >Language</label>
                        <div class="col-sm-9">
                            <select type="text" name="language" id="language" class="form-control" value="<?=$user['language'];?>">
                                <option value="en" <?= $user['language']=='en' ? 'selected' : '' ;?>>English</option>
                                <option value="km" <?=$user['language']=='km' ? 'selected' : '' ;?>>ភាសាខ្មែរ</option>
                            </select>
                        </div>
                    </div> 

                    <div class="row mt-2">
                        <label for="role_id" class="col-sm-3" >Role</label>
                        <div class="col-sm-9">
                            <?=bind($roles, $user['role_id'], 'role_id');?>
                        </div>
                    </div>
                </div>

                <!-- another side -->
                <div class="col-sm-6">
                    <!-- username -->
                    <div class="row">
                        <label for="username" class="col-sm-3">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" id="username" disabled
                            value="<?=$user['username'];?>">
                        </div>
                    </div>

                    <!-- password -->
                    <div class="row mt-2">
                        <label for="password" class="col-sm-3">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="password">
                            <small>keep it blank to use the old password.</small>
                            <div class="col-sm-3 mt-2">
                                <button class="btn btn-primary btn-sm" name="btn" >Save</button>
                                <a href="edit.php" class="btn btn-danger btn-sm" >Cancel</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php include('../includes/footer.php'); ?> -->