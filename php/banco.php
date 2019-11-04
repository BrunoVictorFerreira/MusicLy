<?php
    class classConexao{
        
        protected function conexaoDB(){
            try{
                $conn = new PDO("mysql:host=localhost;dbname=dbmusiclly", "root", "");
                $conn->query('SET NAME utf-8');
                $conn->query('SET character_set_connection=utf8');
                $conn->query('SET character_set_cliention=utf8');
                $conn->query('SET character_set_results=utf8'); 
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            return $this->conn;
        }
    }  

?>