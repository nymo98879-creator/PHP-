<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  
    <h1>Add Data</h1>
    <!-- enctype="multipart/form-data" -->
    <form action="create.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter name"> <br>
        <input type="text" name="gender" placeholder="Enter gender"> <br>
        <input type="email" name="email" placeholder="Enter email"> <br>
        <input type="password" name="password" placeholder="Enter password"> <br>
        <input type="file" name="image">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>