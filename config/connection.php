<?php

	class Connection
  {
  	private $data;
    static $_db = null;
    
    public function __construct()
    {
      $this->data = Utils::decode_yaml("database.yml");
    }
    private static function connect()
    {
      self::$_db = new mysqli($data['host'], $data['user'], $data['password'], $data['name']);
      if (self::$_db->connection_errno)
      {
        echo "fallo la conexion";
        return;
      }
      self::$_db->set_charset($data['charset']);
    }
    public static function getConnection()
    {
      if(self::$_db == null)
      {
        self::connect();
      }
      return self::$_db;
    }
  }
?>