<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
//            echo "<script>alert('hello')</script>";
            require_once "functions.php";
            connectDb();
            $query = mysql_query("select * from catalog");
            while($row=mysql_fetch_array($query)){
                $Cat_Name = $row["Cat_Name"];
                echo "<script>alert('$Cat_Name')</script>";
                echo "<opton>$Cat_Name</opton>";
            }
?>