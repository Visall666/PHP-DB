<?php
    include('../config.php');
    $title = "Categories";
    include('../function.php');
    $result = query("select * from categories");
?>

<?php include('../includes/header.php');?>
<body>
    <div class="container">
        <h2>Categories List</h2>
        <p>
            <a href="create.php" class="btn btn-primary btn-sm">Create</a>
            <a href="../index.php" class="btn btn-success btn-sm">Back</a>
        </p>

        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($result) > 0): ?>
                    <?php while($row = mysqli_fetch_assoc($result)): ?> 
                        <tr>
                            <td><?=$row['id'] ;?></td>
                            <td><?=$row['name'];?></td>
                            <td><?=$row['description'];?></td>
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