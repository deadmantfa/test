<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div class="error cen">
	<p class="err">We cannot find your page. Looks like a job for super.... Er...sorry... Sherlock Homes.</p>
<?php echo CHtml::image(Yii::app()->baseUrl.'/images/15.jpg',array('class'=>'polo')); ?>
</div>