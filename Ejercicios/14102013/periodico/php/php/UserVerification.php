<?php 

    //ini_set('display_errors', true);
    //error_reporting(E_ALL);
    include_once('DBInteraction.php');

    /**
     * La clase UserVerification representa  
     * la clase que se  inserta los usuarios nuevos, 
     * y ademas crea la sesion para los usuarios que 
     * ya tienen acceso
     * 
     * @author Jose Miguel Colella <josecolella@correo.ugr.es>
     * @version 1.0
     */
    class UserVerification extends DBInteraction
    {

        //Representan las variables del formulario
        //que se insertaran en la base de datos
        private $username;
        private $name;
        private $last;
        private $dob;
        private $email;
        private $password;


        private $isUserPresent;
        private $isPasswordEqual;

        /**
         * El metodo setInsertVariables() inicializa las variables para su 
         * insercion en la base de datos
         */
        public function setInsertVariables()
        {
            if(!empty($_POST["UserName"]) && isset($_POST["UserName"]))
                $this->username = $_POST["UserName"];
            if(!empty($_POST["FirstNameText"]) && isset($_POST["FirstNameText"]))
                $this->name = $_POST["FirstNameText"];
            if(!empty($_POST["LastNameText"]) && isset($_POST["LastNameText"]))
                $this->last = $_POST["LastNameText"];
            if(!empty($_POST["BirthdayText"]) && isset($_POST["BirthdayText"]))
                $this->dob = $_POST["BirthdayText"];
            if(!empty($_POST["EmailText"]) && isset($_POST["EmailText"]))
                $this->email = $_POST["EmailText"];
            if(!empty($_POST["password"]) && isset($_POST["password"]) && $_POST["password"] != "")
                $this->password = sha1($_POST["password"]);
        }

        /**
         * El metodo insertUser inserta un usuario en la base de datos
         * @return Una fila se ha agregado en la base de datos con el nuevo usuario
         */
        public function insertUser()
        {
            if(!$this->isUserNamePresent()) {
                $insertQuery = "INSERT INTO `Users`(`username`, `name`, `lastname`, `dob`, `email`, `password`) VALUES ('$this->username','$this->name','$this->last','$this->dob','$this->email','$this->password');";
                $this->connection->query($insertQuery);
            }
            else echo "<script>alert('El nombre de usuario no esta disponible'); location.href='../formularioDiario.html';</script>";
                
        }
        /**
         * El metodo setUser() inicializa las variables 
         * para el usuario
         */
        public function setUser()
        {
            $this->username = $_POST["UserName"];
            $this->password = $_POST["Password"];
        }

        /**
         * El metodo verifyUser() verifica si un usuario esta en la base de datos
         * @return true si esta presente en la base de datos
         */
        public function verifyUser() {

            $isUserValid = false;
            $findUser = "SELECT * FROM `Users` WHERE `username`='$this->username' AND `password` = SHA1('$this->password')";
            
            $result = $this->connection->query($findUser);
            $row = $result->fetch_array(MYSQLI_ASSOC);

            if(array_key_exists("username", $row) && isset($row["username"]) && array_key_exists("password", $row) && isset($row["password"]))
                $isUserValid = true;
            return $isUserValid;

         }

        /**
         * Metodo usado para ver el contenido de la base de datos
         * @return La base de datos entera
         */
        public function echoDataBase()
        {
            $query = "SELECT * from `Users`";
            $result = $this->connection->query($query);

            while ($row = $result->fetch_row())
            {
                echo "Username: " . $row['username'] . "<br/>";
                echo "Nombre: " . $row['nombre'] . "<br/>";
                echo "Last Name: " . $row['lastname'] . "<br/>";
                echo "DOB: " . $row['dob'] . "<br/>";
                echo "Email: " . $row['email'] . "<br/>";
                echo "Password: " . $row['password'] . "<br/>";
                
                echo "<br>";
            }
        }

        /**
         * Metodo que determina si el nombre de usuario es valido
         * @return true si el nombre de usuario se valido
         */
        public function isUserNamePresent() {

            $sql = "SELECT * FROM `Users` WHERE `username`=\"$this->username\"";
            $result = $this->connection->query($sql);

            if($result->num_rows > 0)
                return true;
            else 
                return false;
        }
        /**
         * El metodo getUserName() devuelve el nombre de
         * usuario. Esto se usa para establecer la sesion.
         * 
         * @return $username;
         */
        public function getUserName()
        {
            return $this->username;
        }
    }


    ?>