<?php

class AjaxController extends Controller
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
	public function actionReqTest01()
	{
		echo '<h2 class="time">'.date('H:i:s')."</h2>";
		Yii::app()->end();
	}

	/* MemCache Example */
	public function actionReqTest02()
	{
		$cache = Yii::app()->cache;
		if($cache->get('modelCount')!==false){
			$modelCount = $cache->get('modelCount');
		} else {
			$modelCount = Content::model()->count();
			if($modelCount != null)
				$cache->set('modelCount', $modelCount,800);
		}

		$randKey = rand(1,$modelCount);

		if($cache->get($randKey)!==false){
			$model=$cache->get($randKey);
		} else {
			$model = Content::model()->findByPk(array($randKey));
		}
		if($model != null){
			if(isset($randKey))
				$cache->set($randKey,$model,300);
			echo '<blockquote><p>'.trim($model->content).'</p></blockquote><div class="att"><p class="author">'.trim($model->author).'</p></div>';
		}

		Yii::app()->end();
	}

	public function actionReqTest03()
	{
		$imgPath = Yii::app()->basePath.'/../images/';
		$numFile = count(glob($imgPath.'*.jpg'));
		$randFile = rand(1,$numFile).'.jpg';
		echo '<div>'.CHtml::image(Yii::app()->baseUrl.'/images/'.$randFile, $imgPath.$randFile, array('class'=>'polo')).'</div>';
		Yii::app()->end();
	}
}