<?php 

    class User {

        private $conn;

        private $dataUser;
        
        private $table = "users";

        public function connection(){
            try{
                $this->conn = new PDO("mysql: host=localhost; dbname=db04", "root", "");
                //echo "Connection Established Successfully!";
            }catch(PDOException $erro){
                echo "Connection Established Not Successfully. Erro: " . $erro->getMessage();
            }
        }

        public function getData(){

            $this->dataUser = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        }

        public function login(){

            $this->getData();

            if(!empty($this->dataUser['btnLogin'])){
                $this->connection();
                $cmdLogin = "SELECT email, passworduser FROM users WHERE email = :EMAIL LIMIT 1";
                $stmtLogin = $this->conn->prepare($cmdLogin);
                $stmtLogin->bindParam('EMAIL', $this->dataUser['emailLogin']);
                
                $stmtLogin->execute(); 
                
                if($stmtLogin->rowCount() !=0){
                    $rowUser = $stmtLogin->fetch(PDO::FETCH_ASSOC);
                    if($this->dataUser['passwordLogin'] == $rowUser['passworduser']){
                        header("location: view/pages/userpanel.php");
                    }else{
                        echo "Email ou Senha Inválida";
                    }
                }
        
            }

        }

        public function register(){

            $this->getData();

            if(!empty($this->dataUser['btnRegister'])){  
                $this->connection();  
                $cmdRegister = "INSERT INTO users (firstname, secondname, email, passworduser) VALUES (:FN, :SN, :EMAIL, :PASS)";    
                $stmtRegister = $this->conn->prepare($cmdRegister);
                $stmtRegister->bindParam('FN', $this->dataUser['firstName']);
                $stmtRegister->bindParam('SN', $this->dataUser['secondName']);
                $stmtRegister->bindParam('EMAIL', $this->dataUser['EmailReg']);
                $stmtRegister->bindParam('PASS', $this->dataUser['Password']);
                $stmtRegister->execute();
            }

        }

    }

?>