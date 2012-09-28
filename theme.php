<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Bootstrap extends Theme {

    public $name = 'Bootstrap';
    public $author = 'Tim Reynolds';
    public $author_website = 'http://www.timothyreynolds.co.uk/';
    public $website = 'http://www.pyrocms.com/';
    public $description = 'Bootstrap template.';
    public $version = '2.0b';
    public $options = array(
        'show_breadcrumbs' => array(
                     	    'title' => 'Show Breadcrumbs',
							'description'   => 'Would you like to display breadcrumbs?',
							'default'       => 'yes',
							'type'          => 'radio',
							'options'       => 'yes=Yes|no=No',
							'is_required'   => TRUE)
						),
        'include_nav_fix' => array(
                            'title' => 'Include Navigation Fix',
                            'description'   => 'Would you like to include a fix for the navigation bar?',
                            'default'       => 'yes',
                            'type'          => 'radio',
                            'options'       => 'yes=Yes|no=No',
                            'is_required'   => TRUE)
                        ),
    ;
}

/* End of file theme.php */