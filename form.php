<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="img/store-solid-24.png">
    <link rel="stylesheet" href="index.css">
</head>
<body >
    <h1 class="wel" >welcome back</h1>
    <div class="container">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <h1>sign up</h1>
           <div class="label_input">
           <div class="label">
            <label>first name:</label>
            <label>last name:</label>
            <label>enter email:</label>
            <label>phone number:</label>
            <label>profile img:</label>
            </div>
            <div class="input_set">
                <input placeholder="first name" required type="text" name="name" />
                <input placeholder="last name" required type="text" name="lname" />
                <input placeholder="email" required type="email" name="email" />
                <input placeholder="phone number" required type="number" name="num" />
                <input type="file" name="profile" required />
            </div>
        </div>
        <input type="submit" name="sub" value="submit">
        </form>
        <!-- <div class="img_tag">
        <!-- <img src="imgset/VS-FASHION-13008-BLACK-PAKISTANI-SUITS-HIT-DESIGN-IN-SINGLE-1.jpg" alt="loading..."> -->
        <!-- </div> -->
    </div>
</body>
</html>