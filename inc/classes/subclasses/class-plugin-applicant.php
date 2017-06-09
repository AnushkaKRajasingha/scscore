<?php
/**
 * @author Anushka Rajasingha
 * @url http://www.anushkar.com
 * @date 09/02/2016
 * @uses Applicant
 *
 */
if (!class_exists('clsApplicant')) {
	class clsApplicant extends clsPluginBase{
		use clsDbBase;
		
		
		public function getApplicant() {
			echo 'clsApplicant';
			exit;
		}
		
		public function __construct(){ parent::___init(); $this->__init(); }
		
		/* Implement clsPluginBase */
		public function __init(){
			try {
				
			} catch (Exception $e) {
				$errorlogger = new ErrorLogger();
				$errorlogger->add_message($e->getMessage());
				exit;
			}
		}
	}
}