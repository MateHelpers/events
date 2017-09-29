<?php


namespace Capo\Test\Event;


use Capo\EventAbstraction;

class UserLoggedInEvent extends EventAbstraction
{
	/** @var int */
	protected $userId;

	/** @var \DateTime */
	protected $date;

	public function __construct($userId, $date)
	{
		$this->userId = $userId;
		$this->date   = $date;
	}

	/**
	 * @return int
	 */
	public function getUserId(): int
	{
		return $this->userId;
	}

	/**
	 * @return \DateTime
	 */
	public function getDate(): \DateTime
	{
		return $this->date;
	}

	public  function getName(): string
	{
		return 'event.user.logged.in';
	}
}