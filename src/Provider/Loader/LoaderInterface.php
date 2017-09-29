<?php


namespace Capo\Provider\Loader;


interface LoaderInterface
{
	/**
	 * @param null $data
	 *
	 * @return mixed
	 */
	public function load($data = null);
}