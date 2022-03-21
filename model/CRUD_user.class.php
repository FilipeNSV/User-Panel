<?php 

    class CRUD_Users{

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

        public function selectUser(){

            $this->connection();

            $cmdReadUser = "SELECT * FROM $this->table";
            $stmtReadUser = $this->conn->prepare($cmdReadUser);
            $stmtReadUser->execute();
            return $stmtReadUser;

        }

        public function insertUser(){

            $this->getData();

            if(!empty($this->dataUser['btnUserInsert'])){
                $this->connection();
                $cmdInsertUser = "INSERT INTO users (firstname, secondname, email, passworduser) VALUES (:FN, :SN, :EMAIL, :PASS)";
                $stmtInsertUser = $this->conn->prepare($cmdInsertUser);
                $stmtInsertUser->bindParam('FN', $this->dataUser['userFNInsert']);
                $stmtInsertUser->bindParam('SN', $this->dataUser['userSNInsert']);
                $stmtInsertUser->bindParam('EMAIL', $this->dataUser['userEmailInsert']);
                $stmtInsertUser->bindParam('PASS', $this->dataUser['userPassInsert']);

                $stmtInsertUser->execute();

                if($stmtInsertUser->rowCount()){
                    echo "Usuário Inserido com Sucesso!";
                }

            }

        }

        public function alterUser(){

            $this->getData();

            if(!empty($this->dataUser['btnUserAlter'])){
                $this->connection();
                $cmdAlterUser = "UPDATE $this->table SET firstname = :FN, secondname = :SN, email = :EMAIL, passworduser = :PASS WHERE id = :ID";
                $stmtAlterUser = $this->conn->prepare($cmdAlterUser);
                $stmtAlterUser->bindParam('ID', $this->dataUser['userIDAlter']);
                $stmtAlterUser->bindParam('FN', $this->dataUser['userFNAlter']);
                $stmtAlterUser->bindParam('SN', $this->dataUser['userSNAlter']);
                $stmtAlterUser->bindParam('EMAIL', $this->dataUser['userEmailAlter']);
                $stmtAlterUser->bindParam('PASS', $this->dataUser['userPassAlter']);

                $stmtAlterUser->execute();
            }

        }

        public function deleteUser(){

            $this->getData();

            if(!empty($this->dataUser['btnUserDelete'])){
                $this->connection();
                $cmdDeleteUser = "DELETE FROM $this->table WHERE id = :ID";
                $stmtDeleteUser = $this->conn->prepare($cmdDeleteUser);
                $stmtDeleteUser->bindParam('ID', $this->dataUser['userIDDelete']);

                $stmtDeleteUser->execute();
            }

        }

    }

?>