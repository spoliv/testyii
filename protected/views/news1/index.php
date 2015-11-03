<?php
/* @var $this News1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'News1s',
);

$this->menu=array(
	array('label'=>'Create News1', 'url'=>array('create')),
	array('label'=>'Manage News1', 'url'=>array('admin')),
);
?>

<h1>News1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
