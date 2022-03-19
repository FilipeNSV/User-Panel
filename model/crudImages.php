<?php 

    $dataImage = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $table = "imgs";

    $cmdReadImg = "SELECT * FROM $table";
    $stmtReadImg = $conn->prepare($cmdReadImg);
    $stmtReadImg->execute();    
    
    
    if(!empty($dataImage['btnImgInsert'])){
        $cmdInsertImg = "INSERT INTO $table (description, localimg) VALUES (:DESCP, :URLI)";
        $stmtInsertImg = $conn->prepare($cmdInsertImg);
        $stmtInsertImg->bindParam('DESCP', $dataImage['desImgInsert']);
        $stmtInsertImg->bindParam('URLI', $dataImage['urlImgInsert']);

        $stmtInsertImg->execute();

        if($stmtInsertImg->rowCount()){
            echo "Imagem Inserida com Sucesso!";
        }
    }

    if(!empty($dataImage['btnImgAlter'])){
        $cmdAlterImg = "UPDATE $table SET description = :DESCP, localimg = :URLI WHERE id = :ID";
        $stmtAlterImg = $conn->prepare($cmdAlterImg);
        $stmtAlterImg->bindParam('ID', $dataImage['idImgAlter']);        
        $stmtAlterImg->bindParam('DESCP', $dataImage['desImgAlter']);
        $stmtAlterImg->bindParam('URLI', $dataImage['urlImgAlter']);

        $stmtAlterImg->execute();
    }

    if(!empty($dataImage['btnImgDelete'])){
        $cmdDeleteImg = "DELETE FROM $table WHERE id = :ID";
        $stmtDeleteImg = $conn->prepare($cmdDeleteImg);
        $stmtDeleteImg->bindParam('ID', $dataImage['idImgDelete']);

        $stmtDeleteImg->execute();
    }



?>