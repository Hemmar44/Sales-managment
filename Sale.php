<?php

require_once 'Database.php';

class Sale {

	protected $database;

	public function __construct(Database $database) {

		$this->database = $database;

	}

	public function database() {

		return $this->database;
	}
}

$database = new Database;
/*
$sale = new Sale($database);

$sale->database()->insert('sales', [
	"name" => "Kosmowski",
	"product" => "Mortgage",
	"institution" => "Millennium",
	"amount" => 300000,
	"advisor" => "Marcin",
	"margin" => 0.011,
	"commission" => 4600
	]);

	$database = new Database;

	
	
    public function insert($tableName, $fields=[]){
        //inserts value into table
        //names (fields keys) must equals tables headers
            $names = "(". implode(", ",array_keys($fields)).")";
        //generate proper amount of question marks
            $marks = "(".str_repeat('?, ', count($fields)-1).'?)';
        //takes values of fields
            $values = array_values($fields);
            $sql = "INSERT INTO {$tableName} {$names} VALUES {$marks}";
            $stmt = $this->_pdo->prepare($sql);
            $stmt->execute($values);
    }
    */

