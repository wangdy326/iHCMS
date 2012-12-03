<?php
$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Karyawan','url'=>array('index')),
	array('label'=>'Create Karyawan','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('karyawan-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Manajemen Karyawan</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'karyawan-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
		'nip',
		'nama_depan',
		'nama_tengah',
		'nama_belakang',
		'nama_panggilan',
		/*
		'tgl_lahir',
		'warga_negara',
		'kelamin',
		'no_ktp',
		'no_ktp_exp_date',
		'no_sim',
		'no_sim_exp_date',
		'status_kawin',
		'status_karyawan',
		'alamat1',
		'alamat2',
		'kota',
		'negara',
		'propinsi',
		'kodepos',
		'tlp_rumah',
		'tlp_mobile',
		'tlp_kantor',
		'email1',
		'email2',
		'custom',
		'user_id',
		*/
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
