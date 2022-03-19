<?php 

    $dataUser = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $table = "users";

    $cmdReadUser = "SELECT * FROM $table";
    $stmtReadUser = $conn->prepare($cmdReadUser);
    $stmtReadUser->execute();    
    
    
    if(!empty($dataUser['btnUserInsert'])){
        $cmdInsertUser = "INSERT INTO users (firstname, secondname, email, passworduser) VALUES (:FN, :SN, :EMAIL, :PASS)";
        $stmtInsertUser = $conn->prepare($cmdInsertUser);
        $stmtInsertUser->bindParam('FN', $dataUser['userFNInsert']);
        $stmtInsertUser->bindParam('SN', $dataUser['userSNInsert']);
        $stmtInsertUser->bindParam('EMAIL', $dataUser['userEmailInsert']);
        $stmtInsertUser->bindParam('PASS', $dataUser['userPassInsert']);

        $stmtInsertUser->execute();

        if($stmtInsertUser->rowCount()){
            echo "Usuário Inserido com Sucesso!";
        }
    }

    if(!empty($dataUser['btnUserAlter'])){
        $cmdAlterUser = "UPDATE $table SET firstname = :FN, secondname = :SN, email = :EMAIL, passworduser = :PASS WHERE id = :ID";
        $stmtAlterUser = $conn->prepare($cmdAlterUser);
        $stmtAlterUser->bindParam('ID', $dataUser['userIDAlter']);
        $stmtAlterUser->bindParam('FN', $dataUser['userFNAlter']);
        $stmtAlterUser->bindParam('SN', $dataUser['userSNAlter']);
        $stmtAlterUser->bindParam('EMAIL', $dataUser['userEmailAlter']);
        $stmtAlterUser->bindParam('PASS', $dataUser['userPassAlter']);

        $stmtAlterUser->execute();
    }

    if(!empty($dataUser['btnUserDelete'])){
        $cmdDeleteUser = "DELETE FROM $table WHERE id = :ID";
        $stmtDeleteUser = $conn->prepare($cmdDeleteUser);
        $stmtDeleteUser->bindParam('ID', $dataUser['userIDDelete']);

        $stmtDeleteUser->execute();
    }



?>