<?php 
    require "connect.php";
    function user_singup($connect , $name , $address , $email , $password , $phone ){
        $sql = "INSERT INTO userstable (user_name , user_address,user_email,user_password , user_phone) VALUES (:name , :address , :email , :pass , :phone)
        ";
        $stat = $connect->prepare($sql);
        $stat->execute([
            ":name"=>$name ,
            ":address"=> $address ,
            ":email"=> $email ,
            ":pass"=> $password ,
            ":phone"=>$phone
        ]);

    }

    function select_user($connect , $id){
        $sqlSelect = " SELECT * FROM userstable WHERE user_id = '$id'";
        $stat = $connect->query($sqlSelect);
        $row = $stat->fetch(PDO::FETCH_ASSOC);
        
        return $row ;
    }
    

 
    


?>