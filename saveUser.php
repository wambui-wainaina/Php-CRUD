<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <div class="save_div">
       <form action="saveUserProcess.php" method="GET">
           <input type="text" placeholder="Name Here" name="x" required class="input"> <br>
           <input type="email" placeholder="Email Here" name="y" required class="input"> <br>
           <input type="password" placeholder="Password Here" name="z" required class="input"> <br>
           <input type="submit" value="Save" name="btn_save" class="sbtn"> <br> <br>
           <a href="viewUsers.php" class="vlink">View Users</a>
       </form>
   </div>
</body>
</html>
