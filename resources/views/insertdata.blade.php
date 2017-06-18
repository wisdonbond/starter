<head>
{!! Html::style('bootstrap/css/bootstrap.min.css')!!}
</head>
{!! Html::script('bootstrap/js/bootstrap.min.js')!!}
{!! Html::script('js/jquery-3.2.1.slim.min.js')!!}
@include('menu')
{!! Form::open(['url' => 'insert']) !!}
<div class="container">
<div class="row">
	<div class="col-md-6 col-md-offset-1 ">
		<h1 >เพื่มรายการลูกค้า</h1>
	</div>
</div>
<div class="row">

	<label class="col-md-1 col-md-offset-1 col-xs-1 control-label">ชื่อ :</label>
	<div class=" col-xs-6 col-md-6 ">	

<?php echo Form::text('username',null,['class' => 'form-control','required'=>'true']);

?>
</div>
</div>
<div class="row">

	<label class="col-md-1 col-md-offset-1 col-xs-1 control-label">เลขที่โฉนด:</label>
	<div class="col-xs-6 col-md-6">	

<?php echo Form::text('landnumber',null,['class' => 'form-control','required'=>'true']);

?>
</div>
</div>
<div class="row">

	<label class="col-md-1 col-md-offset-1 col-xs-1 control-label">เลขที่ที่ดิน:</label>
	<div class="col-xs-6 col-md-6">	

<?php echo Form::text('landnumber2',null,['class' => 'form-control','required'=>'true']);

?>
</div>
</div>
<div class="row">

	<label class="col-md-1 col-md-offset-1 col-xs-1 control-label">ตำบล :</label>
	<div class="col-xs-6 col-md-6">	

<?php echo Form::text('district',null,['class' => 'form-control','required'=>'true']);

?>
</div>
</div>
<div class="row">

	<label class="col-md-1 col-md-offset-1 col-xs-1 control-label">เนื้อที่ :</label>
	<div class="col-xs-6 col-md-6">	

<?php echo Form::text('area',null,['class' => 'form-control','required'=>'true']);

?>
</div>
</div>

<div class="row">

	<label class="col-md-1 col-md-offset-1 col-xs-1 control-label">หมายเหตุ :</label>
	<div class="col-xs-6 col-md-6 ">	

<?php echo Form::text('detail',null,['class' => 'form-control']);

?>
</div>
</div>
<div class="row">

	<label class="col-md-1 col-md-offset-1 col-xs-1 control-label">ดอกเบี้ยต่อปี:</label>
	<div class="col-xs-6 col-md-6">	

<?php echo Form::number('rate',null,['class' => 'form-control','required'=>'true']);

?>
</div>
</div>
<div class="row">

	<label class="col-md-1 col-md-offset-1 col-xs-1 control-label">ต้น :</label>
	<div class="col-xs-6 col-md-6">	

<?php echo Form::number('start',null,['class' => 'form-control','required'=>'true']);?>
</div>
</div>
<div class="row">
	<div class="col-md-1 col-md-offset-1 control-label">
<?php echo Form::submit('เพิ่มรายการ',['class' => 'btn btn-default']); ?>
</div>
</div>


{!! Form::close() !!}
</div>
</div>
</div>