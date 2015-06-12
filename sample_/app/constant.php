<?php
/**
 * 定数クラス
 * @author sakasa
 *
 */
class Constant {
	
	/** webrootディレクトリ */
	public static function rootDir() {
		return $_SERVER['DOCUMENT_ROOT'];
	}
	
	/** appディレクトリ */
	public static $APP_DIR = __DIR__;
}