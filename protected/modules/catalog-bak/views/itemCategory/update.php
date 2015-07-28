<?php
$this->breadcrumbs=array(
    Yii::t('main','Category')=>array('admin'),
	$model->name=>array('view','id'=>$model->category_id),
    Yii::t('main','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('main','Create Category'),'icon'=>'plus','url'=>array('create')),
	array('label'=>Yii::t('main','View Category'),'icon'=>'eye-open','url'=>array('view','id'=>$model->category_id)),
	array('label'=>Yii::t('main','Manage Category'),'icon'=>'cog','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>