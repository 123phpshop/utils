<?php
class GenAllService {
	private $_ci;
	private $_discuz;
	private $_ibatis;
	private $_jsp;
	private $_jfinal;
	private $_ssh;
	public function run() {
		$this->_ci = new CI ();
		$this->_discuz = new Discuz ();
		$this->_ibatis = new iBatis ();
		$this->_jsp = new JSP ();
		$this->_ssh = new SSH ();
		
		$this->_ci->run();
		$this->_discuz->run();
		$this->_ibatis->run();
		$this->_jsp->run();
		$this->_ssh->run();
	}
}