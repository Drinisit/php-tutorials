<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <main>
    <form action="includes/formhandler.php" method="post">
            <label for="firstname">First name:</label>
            <input type="text" id="firstname" name="firstname" placeholder="First Name">
            <label for="lastname">Last name:</label>
            <input type="text" id="lastname" name="lastname" placeholder="Last Name">
            
            <label for="car" >Favorite Car</label>
            <select id="car" name="car">
                <option value="bmw">bmw</option>
                <option value="honda">honda</option>
                <option value="toyota">toyota</option>
                <option value="subaru">subaru</option>
            </select>
            <button type="submit">Submit</button>
    </form>
   </main>

</body>
</html>