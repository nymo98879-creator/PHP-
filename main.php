<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <button style="margin-left: 200px;" class="btn btn-success"><a href="form.php" class=" text-light">Add</a></button>
    <div class="container">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="bg-secondary">ID</th>
                <th class="bg-secondary">Name</th>
                <th class="bg-secondary">Gender</th>
                <th class="bg-secondary">Email</th>
                <th class="bg-secondary">Password</th>
                <th class="bg-secondary">Image</th>
                <th class="bg-secondary">Action</th>

            </tr>


            <?php
            $sql_select = "SELECT * FROM students";
            $result_select = $conn->query($sql_select);
            while ($row = mysqli_fetch_assoc($result_select)) {
            ?>

                <tr>
                    <td><?= $row['id'] ?> </td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['gender'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['pwd']  ?></td>
                    <td>
                        <img src="uploads/<?= $row['image'] ?>" width="80">
                    </td>
                    <td>
                        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
                        <a href="update.php?id=<?= $row['id'] ?>">Update</a>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>
</body>

</html>