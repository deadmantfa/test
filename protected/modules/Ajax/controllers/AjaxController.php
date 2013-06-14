<?php

class AjaxController extends Controller
{
	public function actionReqTest01()
	{
		echo '<h2 class="time">'.date('H:i:s')."</h2>";
		Yii::app()->end();
	}
	public function actionReqTest02()
	{
		$modelCount = Content::model()->count();
		$randKey = rand(1,$modelCount);

		$model = Content::model()->findByPk(array($randKey));
		echo '<blockquote><p>'.trim($model->content).'</p></blockquote><div class="att"><p class="author">'.trim($model->author).'</p></div>';
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