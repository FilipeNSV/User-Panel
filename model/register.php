<?php     
    
    $dataRegister = filter_input_array(INPUT_POST, FILTER_DEFAULT);

   if(!empty($dataRegister['btnRegister'])){    
        $cmdRegister = "INSERT INTO users (firstname, secondname, email, passworduser) VALUES (:FN, :SN, :EMAIL, :PASS)";    
        $stmtRegister = $conn->prepare($cmdRegister);
        $stmtRegister->bindParam('FN', $dataRegister['firstName']);
        $stmtRegister->bindParam('SN', $dataRegister['secondName']);
        $stmtRegister->bindParam('EMAIL', $dataRegister['EmailReg']);
        $stmtRegister->bindParam('PASS', $dataRegister['Password']);
        $stmtRegister->execute();
    }

?>