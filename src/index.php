<?php 
    if(isset($_GET['id']) && $_GET['id'] == "1" ){
        echo $_GET['id'];
    }
    echo "nguyenDZ <br>";
    $con = new mysqli('mysql_db_nginx','root','root','sinhvien');
    if($con){
        $result = $con->query("select * from sinhvien");
        while($row = $result->fetch_assoc()){
            echo "ID : ".$row["maSV"]."<br>";
            echo "HoTen : ".$row["Ho"]." ".$row["TenLot"]." ".$row["Ten"]."\n";
            echo "<button><a href='a.php'>Back <=</a></button>";
        }
    }else{
        echo "Conetcted failed";
    }
    $con->close();
?>