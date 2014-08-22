<?php namespace Paaxonia\Presenter\Contracts;

interface PresentableInterface {

	/**
	 * Prepare a new presenter or return a cached presenter instance.
	 *
	 * @return object
	 */
	public function present();
}