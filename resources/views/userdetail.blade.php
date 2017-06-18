<head>
{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
{!! Html::style('css/abac.css') !!}
</head>
{!! Html::script('bootstrap/js/bootstrap.min.js')!!}
{!! Html::script('js/jquery-3.2.1.slim.min.js')!!}
@include('menu')
<div class="row">
<div class="col-md-4 col-md-offset-1">
<h1>รายละเอียดลูกค้า</h1>
<table class="table table-striped" >
	<tr>
		<td>ชื่อ: </td>  
		<td>{{ $results[0]->customer_name }}</td> 
	</tr> 
	<tr>
		<td>หมายเลขโฉนด: </td>   
		<td> {{ $results[0]->land_no1 }} </td> 

		<tr>
		<td>หมายเลขที่ดิน: </td>   
		<td> {{ $results[0]->land_no2 }} </td> 
	</tr> 
		<tr>
		<td>ตำบล: </td>   
		<td> {{ $results[0]->district }} </td> 
	</tr> 
		<tr>
		<td>ขนาด: </td>   
		<td> {{ $results[0]->area }} </td> 
	</tr> 
		<tr>
		<td>หมายเหตุ </td>   
		<td> {{ $results[0]->detail }} </td> 
	</tr> 
	<tr>
		<td>ดอกเบี้ย: </td>   
		<td> {{ $results[0]->rate }}% </td> 
	</tr> 
	
		<tr>
		<td>เงินต้น: </td>   
		<td> {{ $results[0]->start }} </td> 
	</tr> 
	
</table>
</div>
<div class="col-md-3 col-md-offset-1">
<h1>จด</h1>
<table class="table">
<th>รายการจด</th>
@foreach ($results2 as $result)
<tr>
<td>{{ number_format($result->amount)}}</td>
</tr>
@endforeach

</table>
{!! Form::open(['url' => 'intran']) !!}
<div id="input_container">
{{Form::number('amout',null,['class' => 'form-control','required'=>'true'])}} 
{{Form::submit('เพิ่มรายการ',['class' => 'btn btn-primary'])}}
{{Form::hidden('id', $results[0]->customer_id)}}

</div>
{!! Form::close() !!}


</div>

</div>
