<?php
/**
 * ユーザ情報クラス
 * @author sakasa
 *
 */
class UserInfo {
	
	public $name = 'せい　めい';
	public $email = 'aaa@bbb.com';
	public $info;
	
	/**
	 * コンストラクタ
	 */
	function __construct() {
		$this->info = array(
				'name' => $this->name,
				'email' => $this->email,
		);
	}
}
