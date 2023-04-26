<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="card" style="margin:20px">
<div class="container">
    <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
    <div class="card-body">
        <h5 class="card-title">{{__("Name")}}: {{$owner->Name}}</h5>
        <h5 class="card-title">{{__("Surname")}}: {{$owner->Surname}}</h5>
        <a href="{{url('/img/create')}}" class="btn btn-success btn-sm" title="Add new owner">Add New Picture</a>
        <table class="table">
            <thead>
                <tr> 
                    <th>Pictures</th>
                    <th>{{__("Brand")}}</th>
                    <th>{{__("Model")}}</th>
                    <th>{{__("Registration Number")}}</th>
                    <th>{{__("Options")}}</th>
                    
</thead>


<tbody>
<tr>
            
       <td> <img src="{{ asset('/storage/public/img'.$car->image) }}" style="width:100px"></td>
       
      
        <td>{{$car->Brand}}</td>
        <td>{{$car->Model}}</td>
        <td>{{$car->Registration_Number}}</td>
<td>
@if (Auth::user()->role==0)
<a href="{{url('/car/'.$car->id. '/edit')}}" title="Edit Cars" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>{{__("Edit")}}</botton></a>
<form method="post" action="{{ url('/car'.'/'.$car->id)}}" accept-charset="UTF-8" style="display:inline">
{{method_field('DELETE')}}
{{csrf_field()}}
<button type="submit" class="btn btn-danger btn-sm" title="Delete Car" onclick="return confirm('Confirm Delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>{{__("Delete")}}</botton>
</form>
@endif
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