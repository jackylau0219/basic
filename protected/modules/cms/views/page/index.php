<?php$this->breadcrumbs = array(    Yii::t('main','Page'),);$this->menu = array(    array('label' =>Yii::t('main','Create Page'), 'icon' => 'plus', 'url' => array('create')),    array('label' =>Yii::t('main','Manage Page'), 'icon'=>'cog','url'=>array('admin')),);?><?php$this->widget('zii.widgets.CListView', array(    'dataProvider' => $dataProvider,    'itemView' => '_view',));?>