<?php namespace Paaxonia\Presenter;

abstract class Presenter
{
	/**
	 * @var mixed
	 */
	protected $model;

	/**
	 * Construct.
	 * 
	 * @param mixed $model
	 */
	function __construct($model)
	{
		$this->model = $model;
	}

	/**
	 * Allow for property style retrieval of methods.
	 *
	 * @param string $property
	 * @return mixed
	 */
	public function __get($property)
	{
		if (method_exists($this, $property))
		{
			return $this->{$property}();
		}

		return $this->model->{$property};
	}
}