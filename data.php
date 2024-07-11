<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "movementrobot";
   
   // إنشاء اتصال
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   // التحقق من الاتصال
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   
   // استخراج آخر قيمة من الجدول
   $sql_last = "SELECT move_type FROM movement_robot ORDER BY ID DESC LIMIT 1";
   $result = $conn->query($sql_last);
   
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           echo $row["move_type"];
       }
   } else {
       echo "No records found";
   }
   
   // إغلاق الاتصال
   $conn->close();
?>