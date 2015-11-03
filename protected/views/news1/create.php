<?php
/* @var $this News1Controller */
/* @var $model News1 */

$this->breadcrumbs=array(
	'News1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List News1', 'url'=>array('index')),
	array('label'=>'Manage News1', 'url'=>array('admin')),
);
?>

<h1>Create News1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>