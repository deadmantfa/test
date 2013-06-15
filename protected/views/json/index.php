<?php
/* @var $this JsonController */

$this->breadcrumbs=array(
	'Json',
);
?>
<h1>JSON + jQuery Example</h1>
<table id="data">
	<thead>
		<tr>
			<th>Bank Id</th>
			<th>Bank Name</th>
			<th>Bank Address</th>
			<th>Bank Logo</th>
			<th>Bank Processor</th>

		</tr>
	</thead>
	<tbody>
	</tbody>
</table>

<?php
	echo CHtml::button("You want some more huh!!!", array('id'=>'loadMore'));
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->assetManager->publish(Yii::getPathOfAlias('application.scripts'), false, -1, true).'/json.js', CClientScript::POS_END);
?>

