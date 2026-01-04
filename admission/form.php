<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admission Form</h1>
    <form action ="save.php" method = "post" enctype="multipart/form-data">
        <!-- <label for="username">Username</label>
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
        </br>

        <label for="bestTeacher">Best Teacher</label></br> -->
        <!-- The values go as array to output -->
        <!-- <input type="checkbox" name="bestTeacher[]" value="Hadi Zaman" id=""> Hadi Zaman</br>
        <input type="checkbox" name="bestTeacher[]" value="Sumit Saha" id=""> Sumit Saha</br>
        <input type="checkbox" name="bestTeacher[]" value="Rabbil Hasan" id=""> Rabbil Hasan</br>
        <label for="bestTeacher">Course Fee</label></br>
        <input type="number" name="course_fee" id=""></br>
        <label for="bestTeacher">Contact No: </label></br>
        <input type="tel" name="cellnumber" id=""></br>

        <label for="birthDate">Birthday</label>
        <input type="date" name="birthDate" id=""> -->

        <!-- <label for="color">Choose Your Best Color</label>
        <input type="color" name="color" id=""></br>
        <label for="time"></label></br>
        <input type="time" name="time" id=""></br>
        <label for="url"></label></br>
        <input type="url" name="url" id=""> -->

        <label for="file">Upload Image</label></br>
        <!-- <input type="image" src="" alt=""> -->

        <input type="file" name="image" id=""> </br>
<!-- image is amultidimensional array. echo will not work on it -->
        <label for="month">Month</label></br>
        <input type="month" name="month" id=""></br>
        <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_PORT']?>">
        <button type="submit">Submit</button>
        <input type="reset" value="reset">
    </form>
</body>
</html>