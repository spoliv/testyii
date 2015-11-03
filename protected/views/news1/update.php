<?php
/* @var $this News1Controller */
/* @var $model News1 */

$this->breadcrumbs=array(
	'News1s'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List News1', 'url'=>array('index')),
	array('label'=>'Create News1', 'url'=>array('create')),
	array('label'=>'View News1', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage News1', 'url'=>array('admin')),
);
?>

<h1>Update News1 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>