<html>
<head>
    <title>Admin Insert Data</title>
</head>
    <body>
    <form action="admininsert1.php" method="post" enctype="multipart/form-data">
        Enter the code:<br>
        <input type="number" name="guide_id" placeholder="Enter the id"><br>
        Enter Name:<br>
        <input type="text" name="guide_name" placeholder="Enter the name"><br>
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
        </form>
    </body>
</html>