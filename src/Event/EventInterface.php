<?php 

namespace Capo\Event;

interface EventInterface
{
	/**
	 * @return string
	 */
	public function getName() : string;
}