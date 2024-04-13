<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usersearch = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $usersearch);


        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;


    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

}else{
    header("Location: ../index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <main>

    <form class="searchfrom" action="search.php" method="post">
        <label for="search"> Search for user:</label>
        <input id="search" type="text" name="usersearch" placeholder="search..."><br>
    
        <button>Search</button>
    </form>
    <br>

        <h3>This is the search result</h3>

        <?php

            if(empty($results)){
                echo "No result";
            }else{

                foreach($results as $row){
                    echo htmlspecialchars($row["username"]). "<br/>";
                    echo htmlspecialchars($row["comment_text"]). "<br/>";
                    echo htmlspecialchars($row["created_at"]). "<br/>";
                    echo "<br/>";
                    echo "<br/>";
                }

            }

        ?>

    
    </main>

</body>
</html>