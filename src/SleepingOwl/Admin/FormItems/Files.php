<?php namespace SleepingOwl\Admin\FormItems;

class Files extends Images
{
	protected $view = 'files';

	protected static $route = 'uploadFile';

	protected static function uploadValidationRules()
	{
		return [
			'file' => 'required',
		];
	}


}