<?php
    include('../config.php');
    $title = "Users";
    include('../function.php');
    $result = query("select users.*, roles.name as role from users join roles on users.role_id = roles.id 
                where users.active = 1");
?>
<?php  
    $langs = array(
        'en'=> 'English',
        'km'=> 'ភាសាខ្មែរ'
    );

?>

<?php include('../includes/header.php');?>
    <div class="container">
        <h2>Users</h2>
        <p>
            <a href="create.php" class="btn btn-primary btn-sm">Create</a>
            <a href="../index.php" class="btn btn-success btn-sm">Back</a>
        </p>

        <?php 
            alert_error();
            alert_success();
        ?>
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Language</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($result) > 0): ?>
                    <?php $i=1; ?>
                    <?php while($row = mysqli_fetch_assoc($result)): ?> 
                        <tr>
                            <td><?=$i++ ;?></td>
                            <td><?=$row['name'];?></td>
                            <td><?=$row['phone'];?></td>
                            <td><?=$row['email'];?></td>
                            <td><?=$row['username'];?></td>
                            <td><?=$row['role'];?></td>
                            <td><?=$langs[$row['language']];?></td>
                            <td>
                                <a href="edit.php?id= <?=$row['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="delete.php?id= <?=$row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
            </tbody>
        </table>  
    </div>
<?php include('../includes/footer.php');?>