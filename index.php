<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <main>

    <h3>Search account</h3>
    <form class="searchfrom" action="search.php" method="post">
        <label for="search"> Search for user:</label>
        <input id="search" type="text" name="usersearch" placeholder="search..."><br>
    
        <button>Search</button>
    </form>
    <br>
    <br>
    <h3>Update account</h3>
    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <button>Update</button>
    </form>
    <br>
    <br>
    <h3>Delete account</h3>
    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <button>Delete</button>
    </form>
    <br>
    <br>
    <h3>Signup account</h3>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <button>Signup</button>
    </form>


    </main>

</body>
</html>