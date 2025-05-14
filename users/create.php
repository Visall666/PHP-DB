<?php
    include('../config.php');
    include('../function.php');

    $roles = query("select * from roles where active=1");

    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $language = $_POST['language'];
        $username = $_POST['username'];
        $role_id = $_POST['role_id'];
        $password = $_POST['password'];

        $sql = "insert into users (name, phone, email, language, username, role_id, password) 
        value('$name', '$phone', '$email', '$language', '$username', '$role_id', md5('$password'))";

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

                    <div class="row mt-2">
                        <label for="phone" class="col-sm-3" >Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" id="Phone" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="email" class="col-sm-3" required>Email <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <label for="language" class="col-sm-3" >Language</label>
                        <div class="col-sm-9">
                            <select type="text" name="language" id="language" class="form-control">
                                <option value="en">English</option>
                                <option value="km">ភាសាខ្មែរ</option>
                            </select>
                        </div>
                    </div> 

                    <div class="row mt-2">
                        <label for="role_id" class="col-sm-3" >Role</label>
                        <div class="col-sm-9">
                            <?=bind($roles, 'role_id');?>
                        </div>
                    </div>
                </div>

                <!-- another side -->
                <div class="col-sm-6">
                    <!-- username -->
                    <div class="row">
                        <label for="username" class="col-sm-3">Username
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>
                    </div>

                    <!-- password -->
                    <div class="row mt-2">
                        <label for="password" class="col-sm-3">Password
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="password" required>
                            <div class="col-sm-3 mt-2">
                                <button class="btn btn-primary btn-sm" name="btn" >Save</button>
                                <a href="index.php" class="btn btn-danger btn-sm" >Cancel</a>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php include('../includes/footer.php'); ?>