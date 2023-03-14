<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="card" style="margin:20px">
<div class="cardheader" >Owners Page</div>
<div class="container">
    <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
    <div class="card-body">
        <h5 class="card-title">Name: {{$owner->Name}}</h5>
        <h5 class="card-title">Surname: {{$owner->Surname}}</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Registration Number</th>
                    <th>Options</th>
                    
</thead>
@foreach($owner->cars as $car) 

<tbody>
<tr>
        <td>{{$car->Brand}}</td>
        <td>{{$car->Model}}</td>
        <td>{{$car->Registration_Number}}</td>
<td>
<a href="{{url('/car/'.$car->id. '/edit')}}" title="Edit Cars" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit </botton></a>
<form method="post" action="{{ url('/car'.'/'.$car->id)}}" accept-charset="UTF-8" style="display:inline">
{{method_field('DELETE')}}
{{csrf_field()}}
<button type="submit" class="btn btn-danger btn-sm" title="Delete Car" onclick="return confirm('Confirm Delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete </botton>
</form>

</td>
</tr>
<br/>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>