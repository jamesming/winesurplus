<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This file is found in library section of the codeigniter application directory
 *
 */


/**
 * Useful common functions. 
 * @autoloaded YES
 * @path \system\application\libraries\Custom.php
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @copyright 2010 Prospace LLC
 * @version 1.0
 * 
 */
class Custom {

	private $CI;
	
	function Custom(){
		
		$this->CI =& get_instance();	
	
	}

	function generate_option_tags( $all_contents, $selected_content_id ){
			$option_tags ='';
			foreach($all_contents as $content){
				$option_tags .= "<option content_id=".$content->id."  product_id=".$content->product_id."  value=".$content->product_id .( $selected_content_id == $content->id ? " selected " : "" ) .">". $content->name." booked for ".$content->month . "/" . $content->day . "/" .$content->year."</option>";
			} 
			return $option_tags;
	}


}


/* End of file Tool.php */ 
/* Location: \system\application\libraries\Tools.php */
