<?php
    //ini_set('display_errors', true);
    //error_reporting(E_ALL);

    /**La clase DBInteraction un abstraccion
     * sobre las acciones minimas para interactuar
     * con una base de datos, que seria el abrir
     * una conexion con dicho base de datos, y cerrar
     * dicha conexion
     *
     * @author Jose Miguel Colella
     * @version 1.0
     */

    abstract class DBInteraction
    {

        //Estas tres variables son estaticas debido
        //a que se accedera a la misma base de datos
        //cuando se instancia esta clase

        // protected static $db_addr = 'mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_POST';
        // protected static $db_user = 'admintIXJRBR';
        // protected static $db_pass = 'n859n8sgjHpC';
        // protected static $db_selected = 'periodico';

        protected $connection;


        /**El metodo connect se conecta a la base de datos
         *
         * @return Conexion en la base de datos
         */
        public function connect()
        {
            $this->connection = new mysqli(
              $_ENV['OPENSHIFT_MYSQL_DB_HOST'],
              $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'],
              $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'],
              $_ENV['OPENSHIFT_APP_NAME'], // By default, app name == db name
              $_ENV['OPENSHIFT_MYSQL_DB_PORT'],
              $_ENV['OPENSHIFT_MYSQL_DB_SOCKET']
            );
            if($this->connection->connect_errno) {
                echo "Failed to connect to MySQL: (".$connection->connect_errno.") ".$connection->connect_error;
            }

        }

        /**
         * El metodo close cierra la conexion con la base de datos
         * @return Conexion cerrada con la base de datos
         */
        public function close()
        {
            //Cerramos la conexion con la base de datos
            $this->connection->close();
        }


        /**
         * Metodo usado para ver el contenido de la base de datos
         * Sera implementado por todas las clases que extiendan esta
         * @return La base de datos entera
         */
        abstract protected function echoDataBase();

    }


    ?>