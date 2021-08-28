<?php
    require_once("config.php");

    class db{
        private $conn;
        public $queryId;

        function __construct(){
            $this->db_connect();
        }

        public function db_connect(){
            $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
            if(!$this->conn){
                die("Lỗi connect db: ".mysqli_connect_error());
            }
            else{
                $select_db = $this->conn->select_db(DB_NAME);
                if(!$select_db)
                    die("Không thể truy vấn db: ".mysqli_connect_error());
            }
        }

        public function db_disconnect(){
            if(isset($this->conn)){
                mysqli_close($this->conn);
                unset($this->conn);
            }
        }
        
        public function query($sql){
            if(trim($sql != "")){
                $this->queryId = $this->conn->query($sql);
            }
            if(!$this->queryId){
                die("Lỗi truy vấn: <pre>".$sql."</pre>");
            }
            return $this->queryId;
        }

        public function fetch_array($sttm){
            return mysqli_fetch_array($sttm);
        }

        public function fetch_assoc($sttm){
            return mysqli_fetch_assoc($sttm);
        }

        public function fetch_object($sttm){
            return mysqli_fetch_object($sttm);
        }

        public function num_rows($sttm){
            return mysqli_num_rows($sttm);
        }

        public function while_loop($loop){
            global $db;
            $results = array();
            while($result = $this->fetch_array($loop)){
                $results[] = $result;
            }
            return $results;
        }
    }

    $db = new db();
?>