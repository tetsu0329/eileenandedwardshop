<?php
require_once(LIB_PATH.DS.'database.php');
class Inquiry {
	protected static  $tblname = "tblinquiry";

	function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);

	}
	protected function attributes() { 
		// return an array of attribute names and their values
	  global $mydb;
	  $attributes = array();
	  foreach($this->dbfields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}
	protected function sanitized_attributes() {
		global $mydb;
		$clean_attributes = array();
		// sanitize the values before submitting
		// Note: does not alter the actual value of each attribute
		foreach($this->attributes() as $key => $value){
		  $clean_attributes[$key] = $mydb->escape_value($value);
		}
		return $clean_attributes;
	  }
	  
	public function create() {
		global $mydb;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tblname." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
		echo $mydb->setQuery($sql);
	
	 	if($mydb->executeQuery()) {
	    	$this->id = $mydb->insert_id();
	    	return true;
	  	} 
		else {
	    	return false;
	  	}
	}
	public function delete($id=0) {
		global $mydb;
		  $sql = "DELETE FROM ".self::$tblname;
		  $sql .= " WHERE INQID=". $id;
		  $sql .= " LIMIT 1 ";
		  $mydb->setQuery($sql);
		  
			if(!$mydb->executeQuery()) return false; 	
	
	}
	function single_inquiry($id=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			Where INQID= '{$id}' LIMIT 1");
		$cur = $mydb->loadSingleResult();
		return $cur;
	}
	public function read_inquiry($id=0) {
		global $mydb;
		  $attributes = $this->sanitized_attributes();
		  $attribute_pairs = array();
		  foreach($attributes as $key => $value) {
			$attribute_pairs[] = "{$key}='{$value}'";
		  }
		  $sql = "UPDATE ".self::$tblname." SET INQSTATUS = 'READ'";
		  $sql .= " WHERE INQID=". $id;
		$mydb->setQuery($sql);
		   if(!$mydb->executeQuery()) return false; 	
		  
	  }	
}
?>