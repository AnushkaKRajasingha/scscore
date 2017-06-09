<?php
$SCSCORE_var_array = array(
		SCSCORE.'_PLUGIN_FILE' => 'SCSCORE.php',
		SCSCORE.'_PLUGINDIR' =>  dirname(plugin_dir_path(__FILE__)),
		SCSCORE.'_PLUGIN_PAGES' =>  dirname(plugin_dir_path(__FILE__)).'/inc/pages',
		SCSCORE.'_PLUGIN_TEMPLATES' =>  dirname(plugin_dir_path(__FILE__)).'/inc/pages/templates',
		SCSCORE.'_PLUGINDIR_URL' => plugin_dir_url(dirname(__FILE__)),
		SCSCORE.'_PLUGIN_PGDIR_URL' => plugin_dir_url(dirname(__FILE__)).'inc/pages',
		SCSCORE.'_PLUGIN_TMDIR_URL' => plugin_dir_url(dirname(__FILE__)).'inc/pages/templates',
		SCSCORE.'_PLUGIN_IMGDIR_URL' => plugin_dir_url(dirname(__FILE__)).'inc/pages/images',
		SCSCORE.'_PLUGIN_CSSDIR_URL' => plugin_dir_url(dirname(__FILE__)).'inc/pages/css',
		SCSCORE.'_PLUGIN_JSDIR_URL' => plugin_dir_url(dirname(__FILE__)).'inc/pages/js',
		SCSCORE.'_PLUGIN_SPLASHTEMDIR_PATH' =>  dirname(plugin_dir_path(__FILE__)).'/inc/pages/inc/splashTemplates',
		SCSCORE.'_PLUGIN_SPLASHTEMDIR_URL' => plugin_dir_url(dirname(__FILE__)).'inc/pages/inc/splashTemplates',
		SCSCORE.'_PLUGIN_VIDSKINSDIR_PATH' =>  dirname(plugin_dir_path(__FILE__)).'/inc/pages/inc/skins',
		SCSCORE.'_PLUGIN_VIDSKINSDIR_URL' => plugin_dir_url(dirname(__FILE__)).'inc/pages/inc/skins',
		SCSCORE.'_INC_DIR' => dirname(plugin_dir_path(__FILE__)).'/inc',
		SCSCORE.'_CLS_DIR' => dirname(plugin_dir_path(__FILE__)).'/inc/classes'
);



$plugin_main_page = array('_key'=>'scscoredahseboard','Title'=>__( 'Dashboard', 'scscore'),'MenuText'=>__( 'Dashboard', 'scscore') ,'capability'=> 'manage_options','callback' => '_option_page_sub','page-style'=>true,'page-script'=>true ,'scriptDep' => array('jquery','common-data','plugin_utilities','bootstrap-switch-master'),'cls'=>'page-main');

$plugin_menu_items = array(		
		/*'_testpage' => array('_key'=>'_testpage','Title'=>'Test Page','MenuText'=>'Test Page','capability'=> 'manage_options','callback' => '_option_page_sub','page-style'=>true,'page-script'=>true ,'scriptDep' => array('jquery')),*/
		'_licenseSettings' => array('_key'=>'_licenseSettings','Title'=>'License Settings','MenuText'=>'License','capability'=> 'manage_options','callback' => '_option_page_sub','page-style'=>true,'page-script'=>true ,'scriptDep' => array('jquery'))
);


$db_tables = array(
		"_temptbl" => "CREATE TABLE IF NOT EXISTS @table_name (
		 			`id` mediumint(9) NOT NULL AUTO_INCREMENT,
					`uniqueid` varchar(10) NOT NULL,
					`description` varchar(200) NOT NULL DEFAULT ' ',
					`sortOrder` int(11) NOT NULL DEFAULT '0',
					`copyof` varchar(10) NOT NULL DEFAULT '0',
					`isActive` int(11) NOT NULL DEFAULT '1',
					`isDelete` int(11) NOT NULL DEFAULT '0',
					`createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
					`updatedate` timestamp NULL,
					 UNIQUE KEY `id` (`id`),KEY `uniqueid` (`uniqueid`)) ;"
				,
);

$methods_ajax = array(
		"_activateLicense" => array('func'=>'_activateLicense','user'=>false),
		"_searchapplicant" => array('func'=>'getApplicant','user'=>false),
);

$ShortCodeSettings = array(
	'htrecdata' => '_getHtRecData'
);

$default_css_settings = array(
	"fontfamily" => "plugin-default",
	"fontsize" => "12px",
	"fontsizeadjust" => "none",
	"fontstretch" => "normal",
	"fontstyle" => "normal",
	"fontvariant" => "normal",
	"fontweight" => "normal",
	"lineheight" => "12px"
);

$sysMsg = array(
	0 => "Successfully Saved",
	1 => "Successfully Updated",
	2 => "Successfully Deleted",
	3 => "Successfully Copied"
);

$states = array (
		'AL'=>'Alabama',
		'AK'=>'Alaska',
		'AZ'=>'Arizona',
		'AR'=>'Arkansas',
		'CA'=>'California',
		'CO'=>'Colorado',
		'CT'=>'Connecticut',
		'DE'=>'Delaware',
		'DC'=>'District Of Columbia',
		'FL'=>'Florida',
		'GA'=>'Georgia',
		'HI'=>'Hawaii',
		'ID'=>'Idaho',
		'IL'=>'Illinois',
		'IN'=>'Indiana',
		'IA'=>'Iowa',
		'KS'=>'Kansas',
		'KY'=>'Kentucky',
		'LA'=>'Louisiana',
		'ME'=>'Maine',
		'MD'=>'Maryland',
		'MA'=>'Massachusetts',
		'MI'=>'Michigan',
		'MN'=>'Minnesota',
		'MS'=>'Mississippi',
		'MO'=>'Missouri',
		'MT'=>'Montana',
		'NE'=>'Nebraska',
		'NV'=>'Nevada',
		'NH'=>'New Hampshire',
		'NJ'=>'New Jersey',
		'NM'=>'New Mexico',
		'NY'=>'New York',
		'NC'=>'North Carolina',
		'ND'=>'North Dakota',
		'OH'=>'Ohio',
		'OK'=>'Oklahoma',
		'OR'=>'Oregon',
		'PA'=>'Pennsylvania',
		'RI'=>'Rhode Island',
		'SC'=>'South Carolina',
		'SD'=>'South Dakota',
		'TN'=>'Tennessee',
		'TX'=>'Texas',
		'UT'=>'Utah',
		'VT'=>'Vermont',
		'VA'=>'Virginia',
		'WA'=>'Washington',
		'WV'=>'West Virginia',
		'WI'=>'Wisconsin',
		'WY'=>'Wyoming',
);


$plugin_Schedules =  array(
		"_visitordataclear" => array('func'=>'_visitordataclear','user'=>false,'frequent'=>'hourly'),
);
