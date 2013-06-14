<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php
	if(!Yii::app()->user->isGuest)
		$this->widget('zii.widgets.jui.CJuiTabs', array(
			'tabs'=>array(
				'Current Time'=>array('ajax'=>$this->createUrl('Ajax/ajax/reqTest01')),
				'Random Quotes'=>array('ajax'=>$this->createUrl('Ajax/ajax/reqTest02')),
				'Random Pics'=>array('ajax'=>$this->createUrl('Ajax/ajax/reqTest03')),
			),
			'options'=>array(
				'collapsible'=>false
			)
		));
	else
		echo '<p class="err">Huh...Login???</p>';
?>