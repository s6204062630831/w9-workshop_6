<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
<script>
    function confirmDelete(){
        var username=document.getElementById("u").value
        var ans=confirm("ต้องการลบข้อมูลของ User "+username);
        if(ans==true)
        {
            document.location="delete.php?username="+username;
        }
    }
</script>
</head>

<body>
    <form onsubmit="confirmDelete()" >
        ใส่ Username ที่คุณต้องการลบข้อมูล
        <input type="text" name="user" id="u">
        <input type="submit" value="ลบ">
    </form>
    <div style="display:block">
        <?php
        $stmt=$pdo->prepare("SELECT * FROM member");
         $stmt->execute();

        while($row=$stmt->fetch())
        {
            echo "Username: ".$row["username"]."<br>";
            echo "Name: ".$row["name"]."<br>";
            echo "Address: ".$row["address"]."<br>";
            echo "email: ".$row["email"]."<br>"."<hr>";
            
        }

        
        ?>
    </div>
    
    
</body>
</html>