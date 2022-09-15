<?php

       error_reporting(E_ALL);// ta Errora
       // error_reporting(0);// ปิด error ใน กรณีที่เราต้องการแสดง error ของเราเอง
       // เชื่อม ต่อ Database
       $conn=new mysqli('localhost','root','','project');
       // ตั้ง คา ภาษา ให้ รองรับ ภาษา ไทย
       $conn->set_charset('utf8');
       if($conn->connect_errno){// An error code waulan
              echo"Connect Error:".$conn->connect_error;
              exit();// จบการทํางานทุกอย่าง(โปรแกรม ปิด ตัว ลง)
      }
       // ถ้า ไม่มี error ให้ ปล่อย ผ่าน ไม่ ต้อง แสดง อะไร แต่ เอา แค่ ค่า ไป ใช้ งาน
         *บันทึก ค่า สั่ง
         *********
         *error code
         *echo$conn->connect_errno;
         *******
            error message
         *echo$conn->connect_error;
         ******
         */
                                                                                                  // AHA error message
         *Appzstory studio
         *sclass สอน เขียนเว็บ0-100
         
?>