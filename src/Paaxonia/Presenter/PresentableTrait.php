<?php namespace Paaxonia\Presenter;

use Paaxonia\Presenter\Exceptions\PresenterException;

trait PresentableTrait {

	/**
	 * Presenter instance.
	 * 
	 * @var object
	 */
	protected $presenterInstance;

	/**
	 * Present a certain trait.
	 * 
	 * @return object
	 * @throws PresenterException
	 */
	public function present()
	{
		if ( ! $this->presenter or ! class_exists($this->presenter))
		{
			throw new PresenterException('Protected property $presenter is not set on the repository.');
		}

		// If no presenter instance exists create it.
		if ( ! $this->presenterIntance)
		{
			$this->presenterInstance = new $this->presenter($this);
		}

		return $this->presenterInstance;
	}
}