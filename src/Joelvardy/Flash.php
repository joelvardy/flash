<?php

namespace Joelvardy;

/**
 * Flashdata library
 *
 * @link	https://github.com/joelvardy/flash
 * @author	Joel Vardy <info@joelvardy.com>
 */
class Flash {


	// TODO: Allow this to be set
	protected static $session_name = 'flash';


	/**
	 * Get/set flash data
	 *
	 * @return	mixed|void
	 */
	public static function data($payload = null) {

		// Overwrite payload
		if ($payload) {
			$_SESSION[self::$session_name]['data'] = $payload;
			return;
		}

		// Read data
		$data = (isset($_SESSION[self::$session_name]['data']) ? $_SESSION[self::$session_name]['data'] : false);
		unset($_SESSION[self::$session_name]['data']);

		return $data;

	}


	/**
	 * Get/set flash message
	 *
	 * @return	array|void
	 */
	public static function message($type = null, $message = null) {

		// Add new message
		if ($type && $message) {
			$_SESSION[self::$session_name]['messages'][$type][] = $message;
			return;
		}

		// Read messages
		$messages = (isset($_SESSION[self::$session_name]['messages']) ? $_SESSION[self::$session_name]['messages'] : array());
		unset($_SESSION[self::$session_name]['messages']);

		return $messages;

	}


}