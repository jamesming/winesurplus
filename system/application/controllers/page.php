<?php
/**
 * This file is found in controller section of the codeigniter application directory
 *
 */


/**
 * Controller for default domain. 
 *
 * Viewable as:
 * {@link http://www.prospace.com}
 * {@link http://www.prospace.com/index.php/page}
 * {@link http://www.prospace.com/index.php/page/index}
 *
 * @autoloaded YES
 * @path /system/application/controllers/page.php
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @copyright 2010 Prospace LLC
 * @version 1.0 Alpha
 * @todo 
 * 
 */
class Page extends Controller {
	

	function Page(){
		parent::Controller();	


	}
	

	/**
	 * test
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/test
	 * @access public
	 **/ 
	
	function test(){

		$this->load->view('page/test_view');	
		
	}



	/**
	 * test_inside
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/_inside
	 * @access public
	 **/ 
	
	function test_inside(){

		$this->load->view('page/test_inside_view');	
		
	}

	/**
	 * index
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/index
	 * @access public
	 **/ 
	
	function index(){
		
		$select_what =  'id, day_of_year';
		
		$where_array = array(
		'day_of_year' . ' <= ' =>  date('z',time())
		);
	
		$contents = $this->my_database_model->select_from_table( $table = 'contents', $select_what, $where_array, $use_order = TRUE, $order_field = 'day_of_year', $order_direction = 'desc', $limit = 1);
		
		$content_id = $contents[0]->id;

		
		
		if( $this->uri->segment(3) != '' ){
			$content_id = $this->uri->segment(3);
		};
		
		
		$select_what =  '*';
		
		$where_array = array('id' => $content_id);
	
		$contents = $this->my_database_model->select_from_table( $table = 'contents', $select_what, $where_array );
		

	
		$select_what =  '*';
		
		$where_array = array();
		
		$default_content = $this->my_database_model->select_from_table( $table = 'default_content', $select_what, $where_array );


		$data = array( 'default_content' => $default_content, 'contents' => $contents);
		$this->load->view('page/index_view', $data);
	
	}	
	

	/**
	 * faq
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/faq
	 * @access public
	 **/ 
	
	function faq(){
		
		$select_what =  '*';
		
		$where_array = array();
		
		$static_content = $this->my_database_model->select_from_table( $table = 'static_content', $select_what, $where_array );
		
		$data = array('static_content' => $static_content);
		$this->load->view('page/faq_view', $data);
	}

	

	/**
	 * about
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/about
	 * @access public
	 **/ 
	
	function about(){
		
		$select_what =  '*';
		
		$where_array = array();
		
		$static_content = $this->my_database_model->select_from_table( $table = 'static_content', $select_what, $where_array );
		
		$data = array('static_content' => $static_content);
		$this->load->view('page/about_view', $data);
	}


	/**
	 * team
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/team
	 * @access public
	 **/ 
	
	function team(){
		
		$select_what =  '*';
		
		$where_array = array();
		
		$static_content = $this->my_database_model->select_from_table( $table = 'static_content', $select_what, $where_array );
		
		$data = array('static_content' => $static_content);
		$this->load->view('page/team_view', $data);
	}


	/**
	 * shipping
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/shipping
	 * @access public
	 **/ 
	
	function shipping(){
		
		$select_what =  '*';
		
		$where_array = array();
		
		$static_content = $this->my_database_model->select_from_table( $table = 'static_content', $select_what, $where_array );
		
		$data = array('static_content' => $static_content);
		$this->load->view('page/shipping_view', $data);
	}


	/**
	 * returns
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/returns
	 * @access public
	 **/ 
	
	function returns(){
		
		$select_what =  '*';
		
		$where_array = array();
		
		$static_content = $this->my_database_model->select_from_table( $table = 'static_content', $select_what, $where_array );
		
		$data = array('static_content' => $static_content);
		$this->load->view('page/returns_view', $data);
	}

	/**
	 * terms
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/terms
	 * @access public
	 **/ 
	
	function terms(){
		
		$select_what =  '*';
		
		$where_array = array();
		
		$static_content = $this->my_database_model->select_from_table( $table = 'static_content', $select_what, $where_array );
		
		$data = array('static_content' => $static_content);
		$this->load->view('page/terms_view', $data);
	}

	/**
	 * privacy
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/privacy
	 * @access public
	 **/ 
	
	function privacy(){
		
		$select_what =  '*';
		
		$where_array = array();
		
		$static_content = $this->my_database_model->select_from_table( $table = 'static_content', $select_what, $where_array );
		
		$data = array('static_content' => $static_content);
		$this->load->view('page/privacy_view', $data);
	}


	/**
	 * contact
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/contact
	 * @access public
	 **/ 
	
	function contact(){
		
		$select_what =  '*';
		
		$where_array = array();
		
		$static_content = $this->my_database_model->select_from_table( $table = 'static_content', $select_what, $where_array );
		
		$data = array('static_content' => $static_content);
		$this->load->view('page/contact_view', $data);
	}



	/**
	 * frame_edit
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/frame_edit
	 * @access public
	 **/ 
	
	function frame_edit(){
		
		$data = array();

		$this->load->view('page/frame_edit_view', $data);
	
	}	



/**
 * edit_panel
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/page/edit_panel
 * @access public
 **/ 

function edit_panel(){
	
	$select_what =  'id, day_of_year';
	
	$where_array = array(
	'day_of_year' . ' <= ' =>  date('z',time())
	);

	$contents = $this->my_database_model->select_from_table( $table = 'contents', $select_what, $where_array, $use_order = TRUE, $order_field = 'day_of_year', $order_direction = 'desc', $limit = 1);
	
	$content_id = $contents[0]->id;

	
	$select_what =  'products.name, contents.id, contents.product_id, contents.year, contents.month, contents.day';
	
	$where_array = array();
	
	$join_array = array(
								'products' => 'products.id = contents.product_id'
								);
								
	
	$all_contents = $this->my_database_model->select_from_table( $table = 'contents', $select_what, $where_array, $use_order = TRUE, $order_field = 'day_of_year', $order_direction = 'asc', $limit = -1, $use_join = TRUE, $join_array );






	$option_tags = $this->custom->generate_option_tags( $all_contents, $selected_content_id = $content_id );
	
	$data= array('all_contents' => $all_contents,  'option_tags' => $option_tags);
		
	$this->load->view('header/edit_panel_view', $data);
	
	
}

/**
 * iframe of WYSIWIG
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/page/wysiwig
 * @access public
 **/ 
 
 
 

function wysiwyg(){
	$table = $this->uri->segment(3);
	$field = $this->uri->segment(4);

	$data = array('table' => $table, 'field' =>  $field);
	
	$this->load->view('iframe/wysiwyg_view', $data);
	
}


/**
 * update_static_content
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @uses My_database_model::create_table_with_fields()
 * @uses My_database_model::check_if_exist()
 * @uses My_database_model::add_column_to_table_if_exist()
 * @uses My_database_model::insert_table()
 * @uses My_database_model::get_primary_key()
 * @uses My_database_model::update_table()
 * @path /index.php/page/update_static_content
 * @access public
 **/ 

function update_static_content(){
	
	$field = $this->input->post('field');
	$text = $this->input->post('text');
	$table = 'static_content';

	/**
	 * Set up the table and the fields
	 *
	 **/ 

	$fields_array = array(
	                        'id' => array(
	                                                 'type' => 'INT',
	                                                 'unsigned' => TRUE,
	                                                 'auto_increment' => TRUE
	                                      ),
	                        'created' => array(
	                                                 'type' => 'DATETIME'
	                                        ),
	                        'updated' => array(
	                                                 'type' => 'DATETIME'
	                                        )  
	                );
	                
	$primary_key = 'id';
	
	$this->my_database_model->create_table_with_fields($table, $primary_key, $fields_array);
	
	$fields_array = array(
	                        $field => array(
	                                                 'type' => 'BLOB'
	                                        )                                      
	                );
	
	$this->my_database_model->add_column_to_table_if_exist($table, $fields_array);
	
	
	/**
	 * Insert into table if not already exist otherwise do an update
	 *
	 **/ 
	 
  
			
	if( $this->my_database_model->get_primary_key( $table, $where_field = $primary_key, '1') == 1){

			$set_what_array = array(
									$field => $text
									);			
							
			$this->my_database_model->update_table( $table, '1', $set_what_array );

	}else{

				$insert_what = array(
							$field => $text
							);	
				
				$primary_key = $this->my_database_model->insert_table(
												$table, 
												$insert_what
												); 

	};


	
}

/**
 * update_product_html_content
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @uses My_database_model::create_table_with_fields()
 * @uses My_database_model::check_if_exist()
 * @uses My_database_model::add_column_to_table_if_exist()
 * @uses My_database_model::insert_table()
 * @uses My_database_model::get_primary_key()
 * @uses My_database_model::update_table()
 * @path /index.php/page/update_product_html_content
 * @access public
 **/ 

function update_product_html_content(){
	
	$table = 'contents';
	$field = $this->input->post('field');
	$text = $this->input->post('text');
	$product_id = $this->input->post('product_id');

	/**
	 * Set up the table and the fields
	 *
	 **/ 

	$fields_array = array(
	                        'id' => array(
	                                                 'type' => 'INT',
	                                                 'unsigned' => TRUE,
	                                                 'auto_increment' => TRUE
	                                      ),
	                        'created' => array(
	                                                 'type' => 'DATETIME'
	                                        ),
	                        'updated' => array(
	                                                 'type' => 'DATETIME'
	                                        )  
	                );
	                
	$primary_key = 'id';
	
	$this->my_database_model->create_table_with_fields($table, $primary_key, $fields_array);
	
	$fields_array = array(
	                        $field => array(
	                                                 'type' => 'BLOB'
	                                        ),
	                        'product_id' => array(
	                                                 'type' => 'INT',
	                                                 'unsigned' => TRUE
	                                      )                                      
	                );
	
	$this->my_database_model->add_column_to_table_if_exist($table, $fields_array);
	
		 
	/**
	 * Insert into table if not already exist otherwise do an update
	 *
	 **/ 
	 
  $where_array = array('product_id' => $product_id);
	$table = 'contents';

  if( $this->my_database_model->check_if_exist($where_array, $table) ){
  	
  	
			$primary_key = $this->my_database_model->get_primary_key( $table, $where_field = 'product_id', $product_id);
     
			$set_what_array = array(
									$field => $text,
									'product_id' => $product_id
									);			
							
			$this->my_database_model->update_table( $table, $primary_key, $set_what_array );


     
  }else{
      
				$insert_what = array(
							$field => $text,
							'product_id' => $product_id
							);	
				
				$primary_key = $this->my_database_model->insert_table(
												$table, 
												$insert_what
												); 
      
  };
	 

	 
	 exit;
	 
	 // ******** DEFAULT contents
	 
	 
	$table = 'default_content';
	$field = $this->input->post('field');
	$text = $this->input->post('text');

	/**
	 * Set up the table and the fields
	 *
	 **/ 

	$fields_array = array(
	                        'id' => array(
	                                                 'type' => 'INT',
	                                                 'unsigned' => TRUE,
	                                                 'auto_increment' => TRUE
	                                      ),
	                        'created' => array(
	                                                 'type' => 'DATETIME'
	                                        ),
	                        'updated' => array(
	                                                 'type' => 'DATETIME'
	                                        )  
	                );
	                
	$primary_key = 'id';
	
	$this->my_database_model->create_table_with_fields($table, $primary_key, $fields_array);
	
	$fields_array = array(
	                        $field => array(
	                                                 'type' => 'BLOB'
	                                        )                                      
	                );
	
	$this->my_database_model->add_column_to_table_if_exist($table, $fields_array);
	
	
	/**
	 * Insert into table if not already exist otherwise do an update
	 *
	 **/ 
	 
  
			
	if( $this->my_database_model->get_primary_key( $table, $where_field = $primary_key, '1') == 1){

			$set_what_array = array(
									$field => $text
									);			
							
			$this->my_database_model->update_table( $table, '1', $set_what_array );

	}else{

				$insert_what = array(
							$field => $text
							);	
				
				$primary_key = $this->my_database_model->insert_table(
												$table, 
												$insert_what
												); 

	};


	
}


/**
 * get
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @uses My_database_model::select_from_table()
 * @path /index.php/dashboard/get
 * @access public
 **/ 

function get(){
	
	$content_id = $this->input->post('content_id');
	$table = 'contents';
	$field = $this->input->post('field');


	if( $this->db->field_exists($field, $table ) == TRUE){
	
		$select_what =  $field;
		
		$where_array = array('id' => $content_id );
	
		$files = $this->my_database_model->select_from_table( 
		$table, $select_what, $where_array );
		
		if( isset( $files ) && count($files) > 0 && $files[0]->$field != ''){
				echo $files[0]->$field;			
		}else{
				
						$table = 'default_content';
						$field = $this->input->post('field');				
				
						$select_what =  $field;
						
						$where_array = array('id' => '1' );
					
						$files = $this->my_database_model->select_from_table( 
						$table, $select_what, $where_array );	
						
						echo $files[0]->$field;	
				
		};
		
	}
	else{
		
			$table = 'default_content';
			$field = $this->input->post('field');				
	
			$select_what =  $field;
			
			$where_array = array('id' => '1' );
		
			$files = $this->my_database_model->select_from_table( 
			$table, $select_what, $where_array );	
			
			echo $files[0]->$field;	
			
	}
	
}





/**
 * upload_image_form
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/page/upload_image_form
 * @access public
 **/ 

function upload_image_form(){
	
	$data= array('product_id' => $this->uri->segment(3));	
	
	$this->load->view('page/upload_image_form_view', $data);


}  

/**
 * upload_image
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/page/upload_image
 * @access public
 **/ 

function upload_image(){
	

	$path_array = array('trunk'=> 'product_images', 'branch'=>  $this->input->post('product_id') );
	$upload_path = $this->tools->set_directory_for_upload( $path_array );
	
	$config['upload_path'] = './' . $upload_path;
	$config['allowed_types'] = 'bmp|jpeg|gif|jpg|png';
	$config['overwrite'] = 'TRUE';
	$config['file_name'] = 'image.png';

	
	$this->load->library('upload', $config);
	
	

	if ( ! $this->upload->do_upload("Filedata"))
	{
		
		 		echo $this->upload->display_errors();
		 		exit;	
		
	}	
	else
	{	
		
		
		$this->tools->resize_this(  $full_path = 'uploads/product_images/' . $this->input->post('product_id') . '/image.png' , $width = 442, $height=412);
		
		$data= array('product_id' => $this->input->post('product_id'));
		
		$this->load->view('page/upload_image_view', $data);
		
	}				
	


}  

/**
 * get_product_image
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/page/get_product_image
 * @access public
 **/ 

function does_product_image_exit(){
	
	  if( !is_file($directory_path  =  'uploads/product_images/' . $this->input->post('product_id') . '/image.png' ) ){
        echo  'no_image';
    }
	
}


/**
 * calendar
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/page/calendar
 * @access public
 **/ 

function calendar(){
	
		if( $this->input->post('goto_month') != ''){
			$month = $this->input->post('goto_month');
		}else{
			$month = date("m");
		};
		
		if( $this->input->post('year') != ''){
			$year = $this->input->post('year');
		}else{
			$year = date("Y");
		};	

		$select_what =  'month, day, year, product_id, id';
		
		$where_array = array(
		'month' => $month,
		'year' =>  $year
		);
		
		$contents_for_calendar = $this->my_database_model->select_from_table( $table = 'contents', $select_what, $where_array, $use_order = TRUE, $order_field = 'day_of_year', $order_direction = 'asc' );
		
	
		foreach($contents_for_calendar as $content_for_one_day){
			
			$daysInMonthBooked[$content_for_one_day->day] = $content_for_one_day->product_id;
			
		}
		
		if( !isset($daysInMonthBooked) ){
			$daysInMonthBooked = array();
		};		
		
		
		$select_what =  'day';
		
		$where_array = array(
		
		 'id' => $this->uri->segment(3),
		 'month' =>  $month,
		 'year' =>  $year
		 );
		
		$booked_for_this_product = $this->my_database_model->select_from_table( $table = 'contents', $select_what, $where_array );
		
		if( count($booked_for_this_product) == 0 ){
			$booked_day_during_month = '';
		}else{
			$booked_day_during_month = $booked_for_this_product[0]->day;
		};
		
		
		$data= array('year' => $this->input->post('year'),'month' => $this->input->post('month'),'day' => $this->input->post('day'),'goto_month' => $this->input->post('goto_month'), 'booked_for_this_product' => $booked_day_during_month, 'daysInMonthBooked' =>  $daysInMonthBooked, 'content_id' => $this->uri->segment(3));
		
		$this->load->view('page/calendar_view', $data);


}


/**
 * update_deal_with_date
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/page/update_deal_with_date
 * @access public
 **/ 

function update_contents_with_date(){
	
	$content_id = $this->input->post('content_id');
	$product_id = $this->input->post('product_id');
	$month = $this->input->post('month');
	$day = $this->input->post('day');
	$year = $this->input->post('year');
	$table ;
	

	$set_what_array = array(
							'month'=> $month,
							'day'=> $day,
							'year'=> $year,
							'day_of_year'=> date('z',strtotime($year.'-'.$month.'-'.$day))
							);			
					
	$this->my_database_model->update_table( $table = 'contents', $primary_key = $content_id, $set_what_array );

	$select_what =  'products.name,contents.id, contents.product_id, contents.year, contents.month, contents.day';
	
	$where_array = array();
	
	$join_array = array(
								'products' => 'products.id = contents.product_id'
								);
								
	
	$all_contents = $this->my_database_model->select_from_table( $table = 'contents', $select_what, $where_array, $use_order = TRUE, $order_field = 'day_of_year', $order_direction = 'asc', $limit = -1, $use_join = TRUE, $join_array );
		
	echo  $this->custom->generate_option_tags( $all_contents, $selected_content_id = $content_id );
		

}


/**
 * iframe_form_to_add_or_edit_product
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/page/iframe_form_to_add_or_edit_product
 * @access public
 **/ 

	function iframe_form_to_add_or_edit_product(){
	
		$product_id = $this->uri->segment(3);
		$content_id = $this->uri->segment(4);
		
		if( $product_id > 0){
			
			$select_what =  '*';
			
			$where_array = array('id' => $product_id);
		
			$product = $this->my_database_model->select_from_table( $table = 'products', $select_what, $where_array );
						
			$name = $product[0]->name;
			$price = $product[0]->price;
			$discount = $product[0]->discount;
			
		}else{
			
			$name = '';
			$price = '';
			$discount = '';
			
		};
	
		$data= array('content_id' => $content_id, 'product_id' => $product_id, 'name' => $name, 'price' => $price, 'discount' => $discount);
		
		$this->load->view('iframe/iframe_form_to_add_or_edit_product_view', $data);
	}


	/**
	 * iframe_jcrop_form
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/iframe_jcrop_form
	 * @access public
	 **/ 

	function iframe_jcrop_form(){
		
			$dir_path = 'uploads/product_images/' . $this->uri->segment(3);
			
			$image_information = getimagesize($dir_path . '/' . 'image.png');
			
			$width_of_file = $image_information[0];
			$height_of_file = $image_information[1];
			
		
			$data= array('product_id' => $this->uri->segment(3), 'width_of_file' => $width_of_file, 'height_of_file' => $height_of_file);	
			
			
			$this->load->view('iframe/iframe_view', $data);

	}


	
	
	/**
	 * crop
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/page/crop
	 * @access public
	 **/ 
	 
 
  function crop(){
  	
		$product_id = $this->uri->segment(3);
		
		$dir_path = "uploads/product_images/"  . $product_id . '/';
		
		$x_origin = $this->input->post('x_origin');
		$y_origin = $this->input->post('y_origin');
		$width = $this->input->post('width');
		$height = $this->input->post('height');

		$this->tools->crop_and_name_it( $new_name = 'image.png', $dir_path.'image.png', $dir_path, $width, $height, $x_origin, $y_origin );
    
  }
  	

} // END CLASS







/* End of file home.php */
/* Location: ./system/application/controllers/home.php */