<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <h1>sign up</h1>
            <label>first name:<input placeholder="first name" type="text" name="name" /></label>
            <label>last name:<input placeholder="last name" type="text" name="lname" /></label>
            <label>enter email:<input placeholder="email" type="email" name="email" /></label>
            <label>phone number:<input placeholder="phone number" type="number" name="num" /></label>
            <label>profile img:<input type="file" name="profile" /></label>
            <button name="sub">submit</button>
        </form>
    </div>
</body>
</html>