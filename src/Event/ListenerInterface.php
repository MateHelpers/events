<?php


namespace Capo\Event;

use Capo\EventAbstraction;

interface ListenerInterface
{
	public function handle(EventAbstraction $event) : void;
}