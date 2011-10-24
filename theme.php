<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Bootstrap extends Theme {

    public $name = 'Bootstrap';
    public $author = 'Tim Reynolds';
    public $author_website = 'http://www.tomothyreynolds.co.uk/';
    public $website = 'http://www.pyrocms.com/';
    public $description = 'Bootstap template.';
    public $version = '1.0b';
    public $options = array('show_breadcrumbs' => array(
                     	         'title' => 'Show Breadcrumbs',
							'description'   => 'Would you like to display breadcrumbs?',
							'default'       => 'yes',
							'type'          => 'radio',
							'options'       => 'yes=Yes|no=No',
							'is_required'   => TRUE)
						);

}

/* End of file theme.php */