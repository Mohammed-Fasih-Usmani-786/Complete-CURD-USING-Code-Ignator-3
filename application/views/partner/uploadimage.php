<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>

<body>



    <form  method="post" enctype="multipart/form-data">

        <input type="file" name="dd[]" accept="image/png, image/jpeg" multiple id="">

        <input type="submit" name="save" value="Submit">
    </form>

</body>

</html>