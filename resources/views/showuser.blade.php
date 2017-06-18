<head>
{!! Html::style('bootstrap/css/bootstrap.min.css')!!}
{!! Html::style('css/abac.css') !!}
{!! Html::script('js/jquery-3.2.1.slim.min.js')!!}
{!! Html::script('bootstrap/js/bootstrap.min.js')!!}

</head>

@include('menu')



<div  class="container">
<div class="col-md-12">

<h1>รายชื่อลูกค้า</h1>
{!! Form::open(['url' => 'searchuserone']) !!}
        <div class="input-group" id="adv-search">
               
				{{Form::text('search',null,['class' => 'form-control','placeholder'=>'ค้นหาลูกค้า'])}}
                <div class="input-group-btn">
						
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            

{!! Form::close() !!}

<table class="table" >
<tr>
<th>ชื่อ</th>
<th>เลขที่ฉโนด</th>
<th>เลชที่ดิน</th>
<th>หมายเหตุ</th>
</tr>
@foreach ($results as $result )
<tr>
	<td><a href="userdetail/{{$result->customer_id}}"> {{ $result->customer_name }}</a>  </td>  
    <td>{{ $result->land_no1}}</td>  
    <td> {{ $result->land_no2}}</td> 
	<td> {{ $result->detail}}</td> 
</tr>
@endforeach
</table>
</div>
</div>
