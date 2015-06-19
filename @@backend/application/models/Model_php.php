<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_php extends CI_Model{
  var $timeStamp;
  var $dateTime;
  var $cusToker;
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_contents');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
	}

  public function makeDir($path = '') {
    return is_dir($path) || mkdir($path);
  }

  public function removeDir($path = '') {
    if (is_dir($path)) {
      $objects = scandir($path);
      foreach ($objects as $object) {
        if ($object != "." && $object != "..") {
          if (filetype($path . "/" . $object) == "path")
            rrmdir($path . "/" . $object);
          else
            unlink($path . "/" . $object);
        }
      }
      reset($objects);
      rmdir($path);
    }
  }
  public function moveFile($pathConfig,$pathTemp,$inputFile){
    $this->makeDir($pathConfig);
    copy($pathTemp.$$inputFile, $pathConfig.$this->timeStamp.'.jpeg');
		$this->removeDir($pathTemp);
    $this->makeDir($pathTemp);
    
    
  }
}