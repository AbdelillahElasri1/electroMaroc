<?php 

    /*
        *PDO database class
        *connect to database
        *Create prepared Statement
        *Bind value
        *Return rows and result
    */

    class Database{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){
            // Set DSN
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $options = array(
                PDO::ATTR_PERSISTANT => true,
                PDO::ATTR_ERRMODE => PDO::ATTR_ERRMODE_EXCEPTION
            );
            // Create PDO instante
            try {
                //code...
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
    }