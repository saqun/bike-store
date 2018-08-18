<?php
class ParseCSV {
  public static $delimiter = ',';
  
  private $filename;
  private $header;
  private $data=[]; // array of bikes -- each bike is array of info
  private $data_count;
  
  public function __construct($filename='') {
	  $this->filename = $filename;
  }
  
  public function parse() {
	  if (! isset($this->filename)) {
		  echo "File not set.";
		  return false;
	  }
	  $this->header = NULL;
	  $this->data = [];
	  $this->data_count = 0;
	  
	  $file = fopen($this->filename,'r');
	  while (!feof($file)) {
		  $line = fgetcsv($file, 0, self::$delimiter);
		  if ($line==[NULL] || $line === false) { continue;}
		  if ($this->header == NULL) {
			  $this->header = $line;
		  } else {
			  $this->data[] = $line;
			  $this->data_count++;
		  }
	  }
	  fclose($file);
	  return $this->data;
  }
  public function get_data() {
	  return $this->data;
  }
  public function get_data_count() {
	  return $this->data_count;
  }
  public function get_header() {
	  return $this->header;
  }
}

?>
