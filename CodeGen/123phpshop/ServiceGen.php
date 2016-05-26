<?php
class ServiceGen {
	protected $results; // 模型层
	protected $folder_root; // 文档的
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
		$this->gen_service_by_forlder_name ( 'admin' );
	}
	abstract function gen_service_for_user_folder() {
		$this->gen_service_by_forlder_name ( 'user' );
	}
	abstract function gen_service_for_public_folder() {
		$this->gen_service_by_forlder_name ( '' );
	}
	abstract function gen_service_url_config_file() {
		
			
		// 循环模型层，拼接形成一行api的访问url
		foreach($results as $domain_name){
			foreach($domain_name['children'] as $class_name){
				foreach($class_name['children'] as $method_name){
					$line_text="public static $";
					$line_text.=$domain_name['name']."_";
					$line_text.=$class_name['name']."_";
					$line_text.=$method_name['name']."='";
					
				}
			}
		}
		// 将这个url写入到配置文件里面
		
		
	}
}