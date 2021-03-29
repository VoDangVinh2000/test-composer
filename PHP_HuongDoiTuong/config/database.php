<?php
    class DB{
        public $conn;
        protected $serverName;
        protected $databaseUser;
        protected $databasePass;
        protected $databaseName;
        //public $query;
        function getServerName($serverName){
            $this->$serverName = $this->serverName;
            $this->serverName = "localhost";
            return $this->serverName;
        }
        function getDatabaseUser($databaseUser){
            $this->$databaseUser = $this->databaseUser;
            $this->databaseUser = "vodangvinh";
            return $this->databaseUser;
        }
        function getDatabasePass($databasePass){
            $this->$databasePass = $this->databasePass;
            $this->databasePass = "01227204130";
            return $this->databasePass;
        }
        function getDatabaseName($databaseName){
            $this->$databaseName = $this->databaseName;
            $this->databaseName = "qly_caphe";
            return $this->databaseName;
        }
        public function involvedDB(){
            //$this->conn = new mysqli($this->serverName,$this->databaseUser,$this->databasePass,$this->databaseName);
            $this->conn = mysqli_connect($this->getServerName($this->serverName),$this->getDatabaseUser($this->databaseUser),$this->getDatabasePass($this->databasePass),$this->getDatabaseName($this->databaseName));
            //echo $this->getDatabasePass($this->databasePass);
        }
    }   
    // $obj_db_serverName = new DB;
    // echo $obj_db_serverName->serverName;
?>