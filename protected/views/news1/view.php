<?php
/* @var $this News1Controller */
/* @var $model News1 */

$this->breadcrumbs=array(
	'News1s'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List News1', 'url'=>array('index')),
	array('label'=>'Create News1', 'url'=>array('create')),
	array('label'=>'Update News1', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete News1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage News1', 'url'=>array('admin')),
);
?>

<h1>View News1 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'text',
	),
)); ?>
