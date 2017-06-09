<?php
class Loader{
	public function __construct(){}
	public function classloader(){
		if (is_admin()) {
			$classes = array( 
					'ErrorLogger' => SCSCORE_CLS_DIR.'/subclasses/class-plugin-errorlogger.php',
					'Plugin_Utilities' 	=> SCSCORE_CLS_DIR.'/subclasses/class-plugin-utilities.php',
					'Plugin_Settings' =>  SCSCORE_CLS_DIR.'/subclasses/class-plugin-settings.php',
					'Plugin_lisense' =>  SCSCORE_CLS_DIR.'/subclasses/class-plugin-licensing.php',
					'Plugin_Header' => SCSCORE_CLS_DIR.'/subclasses/class-plugin-wpheader.php',
					'Plugin_Menu' 		 => SCSCORE_CLS_DIR.'/subclasses/class-plugin-menu.php',
					'Plugin_Scripts' 	=> SCSCORE_CLS_DIR.'/subclasses/class-plugin-script.php',
					'Plugin_Functions' 	=> SCSCORE_CLS_DIR.'/subclasses/class-plugin-functions.php',
					'Plugin_page' 	=> SCSCORE_CLS_DIR.'/subclasses/class-plugin-pages.php',					
					'Add_Hooks' 		 => SCSCORE_CLS_DIR.'/subclasses/class-add-hooks.php',
					// outof framework */
					'clsDbBase' => SCSCORE_CLS_DIR.'/class-plugin-dbbase.php',
					'IclsStatusBase'	=> 	SCSCORE_CLS_DIR.'/class-plugin-statusbase.php',
					'clsPluginBase' => SCSCORE_CLS_DIR.'/class-plugin-baseclass.php',
					'clsApplicant' 	=> SCSCORE_CLS_DIR.'/subclasses/class-plugin-applicant.php',
					
					
			);
			$this->register_classes( $classes ); //var_dump(Plugin_Core::$class_array);
		}elseif (!is_admin()){
			$classes = array(
					'ErrorLogger' => SCSCORE_CLS_DIR.'/subclasses/class-plugin-errorlogger.php',					
					'Plugin_Utilities' 	=> SCSCORE_CLS_DIR.'/subclasses/class-plugin-utilities.php',
					'Plugin_Settings' =>  SCSCORE_CLS_DIR.'/subclasses/class-plugin-settings.php',
					'Plugin_lisense' =>  SCSCORE_CLS_DIR.'/subclasses/class-plugin-licensing.php',
					'Plugin_Header' => SCSCORE_CLS_DIR.'/subclasses/class-plugin-wpheader.php',											
					'Add_Hooks' 		 => SCSCORE_CLS_DIR.'/subclasses/class-add-hooks.php'
			);
			$this->register_classes( $classes );//var_dump(Plugin_Core::$class_array);
			
		}else{
			
		}
	}
}