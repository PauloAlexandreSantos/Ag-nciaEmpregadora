<?php

class conexao
{
    private static $_instance;
    private $_connection;
    private $DB_host = "localhost";
    private $DB_user_name = "root";
    private $DB_user_password = "";
    private $DB_driver = "mysql";
    private $DB_database = "ea";
    public static function init()
    {
        try {
            if (is_null(self::$_instance) || empty(self::$_instance)) {
                self::$_instance = new self();
                return self::$_instance;
            } else {
                return self::$_instance;
            }
        } catch (Exception $e) {
            return self::class;
        }
    }

    function __construct()
    {
        try {
            if (is_null($this->_connection) || empty($this->_connection)) {
                $this->_connection = new \PDO($this->DB_driver . ':host=' . $this->DB_host . ';dbname=' . $this->DB_database, $this->DB_user_name, $this->DB_user_password);
            }
        } catch (Exception $e) {
            $this->_connection = $e;
        }
    }

    public function connect()
    {
        return $this->_connection ? $this->_connection : null;
    }
}
