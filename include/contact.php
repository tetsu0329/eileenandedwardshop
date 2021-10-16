<?php
require_once(LIB_PATH.DS.'database.php');
class Contact {
	protected static  $tblname = "tblcontact";

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
	function getAboutDetails(){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			Where CMS_ABOUT_ID= '1'");
		$cur = $mydb->loadSingleResult();
		return $cur;
	}
    public function update() {
        global $mydb;
          $attributes = $this->sanitized_attributes();
          $attribute_pairs = array();
          foreach($attributes as $key => $value) {
            $attribute_pairs[] = "{$key}='{$value}'";
          }
          $sql = "UPDATE ".self::$tblname." SET ";
          $sql .= join(", ", $attribute_pairs);
          $sql .= " WHERE CMS_CONTACT_ID= 1";
        $mydb->setQuery($sql);
           if(!$mydb->executeQuery()) return false; 	
          
      }
}
?>