<?php
    class Database extends Connection
    {
        // Singleton object. Leave $me alone.
        private static $me;

        public $link;
        //public $writeDB;

        public $host;
        //public $writeHost;

        public $bdName;

        public $username;
        //public $writeUsername;

        public $password;
        //public $writePassword;

        public $onError; // Can be '', 'die', or 'redirect'
        public $emailOnError;
        public $queries;
        public $result;

        public $emailTo; // Where to send an error report
        public $emailSubject;

        public $errorUrl; // Where to redirect the user on error
        private $charset = 'utf8';

        // Singleton constructor
        private function __construct()
        {
            global $Config;
            
            $this->host          = $Config->dbHost;            
            $this->dbName        = $Config->dbName;
            $this->username      = $Config->dbUsername;          
            $this->password      = $Config->dbPassword;           
            $this->onError       = $Config->dbDieOnError;
            $this->emailOnError  = $Config->adminemail;

            $this->link  = false;
            $this->writeDB = false;
            $this->queries = array();
            
            $collation_query = "SET NAMES '{$this->charset}'";
            //$this->query($collation_query);
        }

        // Get Singleton object
        public static function getInstance()
        {
            if (is_null(self::$me)) {
                self::$me = new Database();
            }
        return self::$me;
        }

        // Do we have a valid read-only database connection?
        public function isConnected()
        {
            return is_object($this->link) && get_class($this->link) == 'mysqli';
        }

        /*
        public function isConnected()
        {
            return is_resource($this->writeDB) && get_resource_type($this->writeDB) == 'mysql link';
        }
*/
        // Do we have a valid database connection and have we selected a database?
        public function databaseSelected()
        {
            if(!$this->isConnected()){ 
                return false;                
            }
            //$result = mysql_list_tables($this->dbName, $this->link);
            $result = $this->resulter("SHOW TABLES FROM ".$this->bdName);
            return is_object($result);
        }

        public function connect()
        {
            $this->link = new mysqli($this->host, $this->username, $this->password, $this->dbName) or $this->notify();
            if($this->link->connect_error){
                return false;
            }
            //if(!empty($this->dbName))
            //    mysql_select_db($this->dbName, $this->link) or $this->notify();
            return $this->isConnected();
        }
        /*
        public function writeConnect()
        {
            $this->writeDB = new mysqli($this->writeHost, $this->writeUsername, $this->writePassword) or $this->notify();
            if($this->writeDB === false) return false;

            if(!empty($this->dbName)){
                mysql_select_db($this->dbName, $this->writeDB) or $this->notify();
            }

            return $this->isConnected();
        }
        */
        public function query($sql, $args_to_prepare = null, $exception_on_missing_args = true)
        {
            // Read or Write connection?
            $sql = trim($sql);
            if(preg_match('/^(INSERT|UPDATE|REPLACE|DELETE)/i', $sql) == 0)
            {
                if(!$this->isConnected()){
                    $this->connect();                    
                }

                $the_db = $this->link;
            }
            else
            {
                if(!$this->isConnected()){
                    $this->connect();
                }

                $the_db = $this->link;
            }

            // Allow for prepared arguments. Example:
            // query("SELECT * FROM table WHERE id = :id:", array('id' => $some_val));
            if(is_array($args_to_prepare))
            {
                foreach($args_to_prepare as $name => $val)
                {
                    if(!is_int($val)){ 
                        $val = $this->quote($val);                        
                    }
                    
                    $sql = str_replace(":$name:", $val, $sql, $count);
                    
                    if($exception_on_missing_args && (0 == $count)){
                    throw new Exception(":$name: was not found in prepared SQL query.");                    
                    }
                }
            }

            $this->queries[] = $sql;
            $this->result = $this->link->query($sql) or $this->notify();
            //echo '<span style="border:1px solid red;">'.$sql.'</span><br>';
            return $this->result;
        }
        /**
         * Database::loadObjectList() 
         * @return array de objetos  
		 * $db = Database::getInstance()
		 * $db->query("SELECT * FROM  tabla ");
		 * print_r($db->loadObjectList());
         */
        public function loadListObject()
        {
            $result = $this->resulter();
            if(!$this->hasRows($result)){ 
                return array();            
            }
                $array = array();
            while($row = $result->fetch_object())
            {
                $array[] = $row;
            }
            return $array;
        }
         /**
         * Database::loadObjectList() 
         * @return array asociativo  
		 * $db = Database::getDatabase()
		 * $db->query("SELECT * FROM  tabla ");
		 * print_r($db->loadArrayList());
         */
        public function loadListArray()
        {
           $result = $this->resulter();
            if(!$this->hasRows($result)){ 
                return array();            
            }

            $rows = array();
            $result->data_seek(0);
            //mysql_data_seek($result, 0);
            while($row = $result->fetch_array(MYSQLI_ASSOC )){
                $rows[] = $row;
            }
                
            return $rows;	
      	
        }
	  /**
	   * Database::loadObject() 
	   * @return objeto que contiene la fila recuperada x la consulta
	   * asegurate que la consulta solo devolvera uan sola fila
	   * $db = Database::getDatabase()
	   * $db->query("SELECT * FROM  tabla WHERE id = 23");  
	   */
        public function loadObject()
        { 
           if($result = $this->resulter())
           {
            if($object = $result->fetch_object()){               
              return $object;
              }
            else{
              return null;
            }
           }
           else{
               return false;
           }
         }
        // Returns the number of rows.
        // You can pass in nothing, a string, or a db result
        public function numRows($arg = null)
        {
            $result = $this->resulter($arg);
            //return ($result !== false) ? mysql_num_rows($result) : false;
            return ($result !== false) ? $result->num_rows : false;
        }

        // Returns true / false if the result has one or more rows
        public function hasRows($arg = null)
        {
            $result = $this->resulter($arg);
            //return is_resource($result) && (mysql_num_rows($result) > 0);
            return is_object($result) && ($result->num_rows > 0);
        }

        // Returns the number of rows affected by the previous WRITE operation
        public function affectedRows()
        {
            if(!$this->isConnected()) return false;
            //return mysql_affected_rows($this->writeDB);
            return $this->link->affected_rows;
        }

        // Returns the auto increment ID generated by the previous insert statement
        public function insertId()
        {
            if(!$this->isConnected()) return false;
            //return mysql_insert_id($this->writeDB);
            return $this->link->insert_id;
        }

        // Returns a single value.
        // You can pass in nothing, a string, or a db result
        public function getValue($arg = null)
        {
            $result = $this->resulter($arg);
            return $this->hasRows($result) ? $this->mysqli_result($result, 0, 0) : false;
        }

        // Returns an array of the first value in each row.
        // You can pass in nothing, a string, or a db result
        public function getValues($arg = null)
        {
            $result = $this->resulter($arg);
            if(!$this->hasRows($result)) {
                return array();                
            }

            $values = array();
            //mysql_data_seek($result, 0);
            $result->data_seek(0);
            while( $row = $result->fetch_array(MYSQLI_ASSOC ) ){
                $values[] = array_pop($row);
            }
            return $values;
        }

        // Returns the first row.
        // You can pass in nothing, a string, or a db result
        public function getRow($arg = null)
        {
            $result = $this->resulter($arg);
            return $this->hasRows($result) ? $result->fetch_array(MYSQLI_ASSOC ) : false;
        }

        // Returns an array of all the rows.
        // You can pass in nothing, a string, or a db result
        public function getRows($arg = null)
        {
            $result = $this->resulter($arg);
            if(!$this->hasRows($result)){ 
                return array();            
            }

            $rows = array();
            $result->data_seek(0);
            //mysql_data_seek($result, 0);
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $rows[] = $row;
            }
                
            return $rows;
        }

        // Escapes a value and wraps it in single quotes.
        public function quote($var)
        {
            return "'" . $this->escape($var) . "'";
        }

        // Escapes a value.
        public function escape($var)
        {
                if (!$this->isConnected()) {
                    $this->connect();
                }
            return $this->link->real_escape_string($var);
        }

        public function numQueries()
        {
            return count($this->queries);
        }

        public function lastQuery()
        {
            if($this->numQueries() > 0){
                return $this->queries[$this->numQueries() - 1];
            }
            else{
                return false;
            }
        }

        private function notify()
        {
            if($this->emailOnError === true)
            {
                $globals = print_r($GLOBALS, true);

                $msg = '';
                $msg .= "Url: " . full_url() . "\n";
                $msg .= "Date: " . dater() . "\n";
                $msg .= "Server: " . $_SERVER['SERVER_NAME'] . "\n";

                //$msg .= "DB Error:\n" . mysql_error($this->link) . "\n\n";
                //$msg .= "WriteDB Error:\n" . mysql_error($this->writeDB) . "\n\n";

                ob_start();
                debug_print_backtrace();
                $trace = ob_get_contents();
                ob_end_clean();

                $msg .= $trace . "\n\n";

                $msg .= $globals;

                mail($this->emailTo, $this->emailSubject, $msg);
            }

            if($this->onError == 'die')
            {
                echo "<p style='border:5px solid red;background-color:#fff;padding:5px;'><strong>Database Error:</strong><br/>" . mysqli_error($this->link) . "</p>";                
                echo "<p style='border:5px solid red;background-color:#fff;padding:5px;'><strong>Query:</strong><br/>" . $this->lastQuery() . "</p>";
                echo "<pre>";
                debug_print_backtrace();
                echo "</pre>";
                exit;
            }

            if($this->onError == 'redirect')
            {
                redirect($this->errorUrl);
            }
        }

        // Takes nothing, a MySQL result, or a query string and returns
        // the correspsonding MySQL result resource or false if none available.
        private function resulter($arg = null)
        {
            if(is_null($arg) && is_object($this->result)){
                return $this->result;
            }
            elseif(is_object($arg)){
                return $arg;
            }
            elseif(is_string($arg))
            {
                $this->query($arg);
                if(is_object($this->result) || $this->result == true){
                    return $this->result;
                }
                else{
                    return false;
                }
            }
            else{
                return false;                
            }
        }
        private function mysqli_result($res, $row, $field=0) 
        { 
            $res->data_seek($row); 
            $datarow = $res->fetch_array(); 
            return $datarow[$field]; 
        }
        public function debug() {
            $r = "";
            return $r;
        }
    }
