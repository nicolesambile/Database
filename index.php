<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<body>
    <form action = "save.php" method = "post">
        <h1>REGISTRATION<h1>
        <input type = "text" name ="FN" placeholder = "Enter your FullName" required />
        <input type = "text" name ="BDAY" placeholder = "Enter your Birthday" required />
        <input type = "text" name ="ADDRESS" placeholder = "Enter your Address" required />
        <input type = "text" name ="EMAIL" placeholder = "Enter your Email" required />
        <input type = "password" name ="PASSWORD" placeholder = "Enter your Password" required />        
        <input type = "submit" name ="save" value = "SAVE" class = "btn btn-success" />
</body>
</html>