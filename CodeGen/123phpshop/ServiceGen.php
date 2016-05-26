<?php
class ServiceGen {
	
	protected $result;
	protected $folder_root;
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