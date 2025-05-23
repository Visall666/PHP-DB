<?php
    include('../config.php');
    include('../function.php');
    $result = query("select *, concat(first_name,' ', last_name) as name from employees");
?>
<?php $title = "Employees"; ?>
<?php include('../includes/header.php'); ?>
<body>
    <div class="container">
        <h3>Employees List</h3>
        <p>
            <a href="create.php" class="btn btn-primary btn-sm">Create</a>
            <a href="../index.php" class="btn btn-success btn-sm">Back</a>
        </p>

        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Title</td>
                    <td>Age</td>
                    <td>Service Year</td>
                    <td>Salary</td>
                    <td>Perks</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php  if(mysqli_num_rows($result) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($result)):?>
                            <tr>
                                <td><?=$row['id'];?></td>
                                <td><?=$row['name'];?></td>
                                <td><?=$row['title'];?></td>
                                <td><?=$row['age'];?></td>
                                <td><?= !empty($row['service_year']) ? $row['service_year'] : 'null' ;?></td>
                                <td><?=$row['salary'];?></td>
                                <td><?=$row['perks'];?></td>
                                <td><?=$row['email'];?></td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile;?>
                    <?php endif ;?>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<?php include('../includes/footer.php');