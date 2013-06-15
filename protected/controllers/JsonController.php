<?php

class JsonController extends Controller
{
	public function filters()
	{
		return array(
			'accessControl',
		);
	}
	public function accessRules()
	{
		return array(
				array('allow',
					'users'=>array('@'),
				),
				array('deny',
					'users'=>array('*'),
				),
		);
	}
	public function actionIndex()
	{
		$this->render('index');
	}
}