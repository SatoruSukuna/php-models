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
            <label>first name:<input placeholder="first name" required type="text" name="name" /></label>
            <label>last name:<input placeholder="last name" required type="text" name="lname" /></label>
            <label>enter email:<input placeholder="email" required type="email" name="email" /></label>
            <label>phone number:<input placeholder="phone number" required type="number" name="num" /></label>
            <label>profile img:<input type="file" name="profile" /></label>
            <input type="submit" name="sub" value="submit">
        </form>
    </div>
</body>
</html>