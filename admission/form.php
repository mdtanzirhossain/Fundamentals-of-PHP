<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admission Form</h1>
    <form action ="save.php" method = "post">
        <label for="username">Username</label>
        <input type="text" name="username" id=""></br>
        <label for="email">User Email</label>
        <input type="email" name="email" id=""></br>
        <label for="password">User Password</label>
        <input type="password" name="password" id=""></br>

        <label for="shortDescription">Short Description</label>
        <textarea name="shortDescription" id="" cols="10" rows="5"></textarea></br>

        <label for = "Gender">Gender</label>
        <input type="radio" name="gender" value="male" id="">Male
        <input type="radio" name="gender" value="female" id="">Female
        <input type="radio" name="gender" value="other" id="">Other

        <button type="submit">Submit</button>
    </form>
</body>
</html>