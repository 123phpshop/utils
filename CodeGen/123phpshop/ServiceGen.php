<?php
class ServiceGen {
	protected $results; // ģ�Ͳ�
	protected $folder_root; // �ĵ���
	protected $save_folder_root;
	public function run() {
		
		// ����admin�ļ��е������ļ�
		$this->gen_service_for_admin_folder ();
		
		// ����user�û��ļ��е������ļ�
		$this->gen_service_for_user_folder ();
		
		// ���ɹ����ļ�
		
		$this->gen_service_for_public_folder ();
		
		// ����apiЧ���ļ���
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
		
			
		// ѭ��ģ�Ͳ㣬ƴ���γ�һ��api�ķ���url
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
		// �����urlд�뵽�����ļ�����
		
		
	}
}