<?php 

    class CRUD_Card {

        public $conn;

        public $dataCard;

        private $table = "cards";  


        public function connection(){
            try{
                $this->conn = new PDO("mysql: host=localhost; dbname=db04", "root", "");
                //echo "Connection Established Successfully!";
            }catch(PDOException $erro){
                echo "Connection Established Not Successfully. Erro: " . $erro->getMessage();
            }
        }

        public function getData(){

            $this->dataCard = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        }

        public function selectCard(){

            $this->connection();

            $cmdReadCard = "SELECT * FROM $this->table";
            $stmtReadCard = $this->conn->prepare($cmdReadCard);
            $stmtReadCard->execute(); 
            return $stmtReadCard;

        }

        public function insertCard(){

            $this->getData();
            
            if(!empty($this->dataCard['btnCardInsert'])){
                $this->connection();
                $cmdInsertCard = "INSERT INTO $this->table (title, description, localimg) VALUES (:TITLE, :DESCP, :URLI)";
                $stmtInsertCard = $this->conn->prepare($cmdInsertCard);
                $stmtInsertCard->bindParam('TITLE', $this->dataCard['titleCardInsert']);
                $stmtInsertCard->bindParam('DESCP', $this->dataCard['desCardInsert']);
                $stmtInsertCard->bindParam('URLI', $this->dataCard['urlCardInsert']);

                $stmtInsertCard->execute();

                if($stmtInsertCard->rowCount()){
                    echo "Card Inserido com Sucesso!";
                }
            }
        }

        public function alterCard(){

            $this->getData();

            if(!empty($this->dataCard['btnCardAlter'])){
                $this->connection();
                $cmdAlterCard = "UPDATE $this->table SET title = :TITLE, description = :DESCP, localimg = :URLI WHERE id = :ID";
                $stmtAlterCard = $this->conn->prepare($cmdAlterCard);
                $stmtAlterCard->bindParam('ID', $this->dataCard['idCardAlter']);
                $stmtAlterCard->bindParam('TITLE', $this->dataCard['titleCardAlter']);
                $stmtAlterCard->bindParam('DESCP', $this->dataCard['desCardAlter']);
                $stmtAlterCard->bindParam('URLI', $this->dataCard['urlCardAlter']);
        
                $stmtAlterCard->execute();
            }
        }

        public function deleteCard(){

            $this->getData();

            if(!empty($this->dataCard['btnCardDelete'])){
                $this->connection();
                $cmdDeleteCard = "DELETE FROM $this->table WHERE id = :ID";
                $stmtDeleteCard = $this->conn->prepare($cmdDeleteCard);
                $stmtDeleteCard->bindParam('ID', $this->dataCard['idCardDelete']);
        
                $stmtDeleteCard->execute();
            }
        }

    }   


?>