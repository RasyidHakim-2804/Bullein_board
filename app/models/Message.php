<?php
namespace App\Models;

//use App\Core\Database;
use Core\Model;

class Message extends Model
{

  public string $table    = 'message';
  public array $tributes  = ['id', 'body', 'time'];

  public function __construct()
  {
    parent::__construct($this->table, $this->attributes);
  }

  
  // public static function get()
  // {
  //   $table = Database::myQuery("SELECT * FROM message ORDER BY id DESC");
  //   $row   = Database::myAssoc($table);
    
  //   Database::myClose();

  //   return $row;
  // }

  // public static function store($message)
  // {
  //   $value  = Database::myEscapeString($message);
  //   $query  = "INSERT INTO message ( body ) VALUE ('$value')";
  //   $result = Database::myQuery($query);

  //   Database::myClose();

  //   return $result;
  // }
}