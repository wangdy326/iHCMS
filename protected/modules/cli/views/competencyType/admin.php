<?php
$this->breadcrumbs=array(
	'Competency Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CompetencyType','url'=>array('index')),
	array('label'=>'Create CompetencyType','url'=>array('create')),
);

?>

<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Manajemen Competency Type</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'competency-type-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					//'id',
					'name',
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
