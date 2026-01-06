<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cloud.tinymce.com/6/tinymce.min.js?apiKey=<?php echo $config["apiKey"]; ?>"></script>
    <script src="./init.js"></script>
    <title>Document</title>
</head>
<body>
    <form action ="edit.php" method = "post" enctype="multipart/form-data">
    <label for="">Short Description: </label>
    <textarea name="textarea" id="a" cols="30" rows="10"></textarea>
    <input type="text" name="text" id="">
    <button type="submit">Submit</button>
</form>

<script>
    tinymce.init({
        selector: 'a'
    }

    )
</script>
</body>
</html>
<?php