<?php
    class firstApp{
        private $conn;

        public function __construct()
        {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'phpdb';

            //database connect
            $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            if(!$this->conn){
                die("No database connect");
            }
        }

        public function create($data){
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $img_name = $_FILES['img']['name'];
            $tmp_name = $_FILES['img']['tmp_name'];
            

            $query = "INSERT INTO information(name,email,phone,img) VALUE('$name','$email',$phone,'$img_name')";

            if (mysqli_query($this->conn, $query)) {
                move_uploaded_file($tmp_name,"img/".$img_name);
                return "Infirmation add done";
            }
        }
        public function show(){
            $query = "SELECT * FROM information";
            if (mysqli_query($this->conn, $query)) {
                $data = "SELECT * FROM information";
                return $data;
            }

        }

    }
?>