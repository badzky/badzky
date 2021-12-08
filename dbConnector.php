<?php

class DbConnector {

var $theQuery;
var $link;

function DbConnector(){

        // Get the main settings from the array we just loaded
        $host = 'localhost';
        $db = 'elearning';
        $user = 'root';
        $pass = '';

        // Connect to the database
        $this->link = mysqli_connect($host, $user, $pass,$db);
        register_shutdown_function(array(&$this, 'close'));
        return $this->link;

    }
	
  //*** Function: query, Purpose: Execute a database query ***
    function query($query) {

        $this->theQuery = $query;
        return mysqli_query($this->link,$query);

    }

    //*** Function: fetchArray, Purpose: Get array of query results ***
    function fetchArray($result) {

        return mysqli_fetch_array($result);

    }

   
    function close() {

        mysqli_close($this->link);

    }
	
}

?>