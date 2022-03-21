<?php 

    class CRUD_Images{

        private $conn;

        private $dataImage;
        
        private $table = "imgs";

        public function connection(){
            try{
                $this->conn = new PDO("mysql: host=localhost; dbname=db04", "root", "");
                //echo "Connection Established Successfully!";
            }catch(PDOException $erro){
                echo "Connection Established Not Successfully. Erro: " . $erro->getMessage();
            }
        }

        public function getData(){

            $this->dataImage = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        }

        public function selectImages(){

            $this->connection();

            $cmdReadImg = "SELECT * FROM $this->table";
            $stmtReadImg = $this->conn->prepare($cmdReadImg);
            $stmtReadImg->execute();
            return $stmtReadImg;

        }

        public function insertImage(){

            $this->getData();

            if(!empty($this->dataImage['btnImgInsert'])){
                $this->connection();
                $cmdInsertImg = "INSERT INTO $this->table (description, localimg) VALUES (:DESCP, :URLI)";
                $stmtInsertImg = $this->conn->prepare($cmdInsertImg);
                $stmtInsertImg->bindParam('DESCP', $this->dataImage['desImgInsert']);
                $stmtInsertImg->bindParam('URLI', $this->dataImage['urlImgInsert']);

                $stmtInsertImg->execute();

                if($stmtInsertImg->rowCount()){
                    echo "Imagem Inserida com Sucesso!";
                }
            }

        }

        public function alterImage(){

            $this->getData();

            if(!empty($this->dataImage['btnImgAlter'])){
                $this->connection();
                $cmdAlterImg = "UPDATE $this->table SET description = :DESCP, localimg = :URLI WHERE id = :ID";
                $stmtAlterImg = $this->conn->prepare($cmdAlterImg);
                $stmtAlterImg->bindParam('ID', $this->dataImage['idImgAlter']);        
                $stmtAlterImg->bindParam('DESCP', $this->dataImage['desImgAlter']);
                $stmtAlterImg->bindParam('URLI', $this->dataImage['urlImgAlter']);

                $stmtAlterImg->execute();
            }

        }

        public function deleteImage(){

            $this->getData();

            if(!empty($this->dataImage['btnImgDelete'])){
                $this->connection();
                $cmdDeleteImg = "DELETE FROM $this->table WHERE id = :ID";
                $stmtDeleteImg = $this->conn->prepare($cmdDeleteImg);
                $stmtDeleteImg->bindParam('ID', $this->dataImage['idImgDelete']);

                $stmtDeleteImg->execute();
            }

        }

    }

?>
