<?php
require_once("db_config.php");

class DB 
{
    private $_dbConn = 0;
    private $_queryResource = 0;
    
    function __construct() 
    {
        $this->_dbConn = new mysqli("localhost","root","1234","blog");
        if (!$this->_dbConn) {
           //die ("MySQL Connect Error");
        }
        mysqli_set_charset($this->_dbConn, "utf8");
    }
    
    function query($sql)
    {
        if (! $queryResource = mysqli_query($this->_dbConn,$sql ))
            die ("MySQL Query Error");
        $this->_queryResource = $queryResource;
        return $queryResource;        
    }
    
    /** Get array return by MySQL */
    function fetch_array()
    {
        return mysqli_fetch_array($this->_queryResource);
    }
    
    function fetch_row()
    {
        return mysqli_fetch_row($this->_queryResource);
    }

    function get_num_rows()
    {
        return mysqli_num_rows($this->_queryResource);
    }

    /** Get the cuurent id */    
    function get_insert_id()
    {
        return mysqli_insert_id($this->_dbConn);
    }
}