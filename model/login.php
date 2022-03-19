<?php 

    $dataLogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dataLogin['btnLogin'])){
        $cmdLogin = "SELECT email, passworduser FROM users WHERE email = :EMAIL LIMIT 1";
        $stmtLogin = $conn->prepare($cmdLogin);
        $stmtLogin->bindParam('EMAIL', $dataLogin['emailLogin']);
        
        $stmtLogin->execute(); 
        
        if($stmtLogin->rowCount() !=0){
            $rowUser = $stmtLogin->fetch(PDO::FETCH_ASSOC);
            if($dataLogin['passwordLogin'] == $rowUser['passworduser']){
                header("location: view/pages/userpanel.php");
            }else{
                echo "Email ou Senha Inválida";
            }
        }

    }

    

    

?>