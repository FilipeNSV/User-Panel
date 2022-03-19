<?php 

    $dataCard = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $table = "cards";

    $cmdReadCard = "SELECT * FROM $table";
    $stmtReadCard = $conn->prepare($cmdReadCard);
    $stmtReadCard->execute();    
    
    
    if(!empty($dataCard['btnCardInsert'])){
        $cmdInsertCard = "INSERT INTO $table (title, description, localimg) VALUES (:TITLE, :DESCP, :URLI)";
        $stmtInsertCard = $conn->prepare($cmdInsertCard);
        $stmtInsertCard->bindParam('TITLE', $dataCard['titleCardInsert']);
        $stmtInsertCard->bindParam('DESCP', $dataCard['desCardInsert']);
        $stmtInsertCard->bindParam('URLI', $dataCard['urlCardInsert']);

        $stmtInsertCard->execute();

        if($stmtInsertCard->rowCount()){
            echo "Card Inserido com Sucesso!";
        }
    }

    if(!empty($dataCard['btnCardAlter'])){
        $cmdAlterCard = "UPDATE $table SET title = :TITLE, description = :DESCP, localimg = :URLI WHERE id = :ID";
        $stmtAlterCard = $conn->prepare($cmdAlterCard);
        $stmtAlterCard->bindParam('ID', $dataCard['idCardAlter']);
        $stmtAlterCard->bindParam('TITLE', $dataCard['titleCardAlter']);
        $stmtAlterCard->bindParam('DESCP', $dataCard['desCardAlter']);
        $stmtAlterCard->bindParam('URLI', $dataCard['urlCardAlter']);

        $stmtAlterCard->execute();
    }

    if(!empty($dataCard['btnCardDelete'])){
        $cmdDeleteCard = "DELETE FROM $table WHERE id = :ID";
        $stmtDeleteCard = $conn->prepare($cmdDeleteCard);
        $stmtDeleteCard->bindParam('ID', $dataCard['idCardDelete']);

        $stmtDeleteCard->execute();
    }



?>