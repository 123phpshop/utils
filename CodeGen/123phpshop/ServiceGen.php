<?php
class ServiceGen {
	
	protected $result;
	protected $folder_root;
	protected $save_folder_root;
	
	public function run() {
		
		// 生成admin文件夹的请求文件
		$this->gen_service_for_admin_folder ();
		
		// 生成user用户文件夹的请求文件
		$this->gen_service_for_user_folder ();
		
		// 生成公共文件
		
		$this->gen_service_for_public_folder ();
		
		// 生成api效用文件爱
		$this->gen_service_url_config_file ();
	}
	abstract function gen_service_for_admin_folder() {
		
		$this->gen_service_by_forlder_name('admin');
	}
	abstract function gen_service_for_user_folder() {
		$this->gen_service_by_forlder_name('user');
	}
	abstract function gen_service_for_public_folder() {
		$this->gen_service_by_forlder_name('');
	}
	abstract function gen_service_url_config_file() {
		
	}
}