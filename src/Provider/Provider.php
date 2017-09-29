<?php


namespace Capo\Provider;

use Capo\Provider\Loader\LoaderInterface;

abstract class Provider {

	/** @var LoaderInterface|null */
	protected $loader = null;

	public function execute() : void
	{
		if (! $this->loader) {
			throw new \ErrorException('Loader not provided yet for this provider');
		}

		$data = $this->buildData();

		$this->loader->load($data);
	}

	/**
	 * @return array|null
	 */
	protected abstract function buildData(): array;
}