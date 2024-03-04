<?php

namespace Local\Interfaces;


abstract class IRouter
{
	public abstract function run();

	/**
	 * Отправляет ответ
	 * @param $data
	 */
	protected function sendResponse($data)
	{
		header('Access-Control-Allow-Origin:*');
		header('Content-type: application/json');
		header("HTTP/1.0 200 OK", true);

		if ((int)$data["http_response_code"] > 0) {
			http_response_code((int)$data["http_response_code"]);
			unset($data["http_response_code"]);
		}

		die(json_encode($data));
	}
}