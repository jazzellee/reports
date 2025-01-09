<DOCTYPE html>
<html>
<title>Users</title>

</head>
<body>
    <form action="addusers.php" method="post">
    User:<input type="text" name="User"><br>
    Teacher:<input type="text" name="teacher"><br>

    <input type="submit" value="Add Subject">
</form>
<?php
    include_once("connection.php");
    $stmt = $conn->prepare("SELECT * FROM tblsubjects");
    $stmt->execute();
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            #print_r($row);
            echo($row["subjectname"]."taught by".$row["teacher"]."<br>");
        }
    ?>

</html>