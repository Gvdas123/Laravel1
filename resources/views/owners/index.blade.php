
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
                    <p class="fh">{{__("Hello")}} :  {{ Auth::user()->name }}</p>
                    <br/>
                    <a class="fh" class="nav-link" href="{{ route('signout') }}">Logout</a>
                    <h2>CRUD</h2>
</div>
<div class="card-body">
    <a href="{{url('/owner/create')}}" class="btn btn-success btn-sm" title="Add new owner">{{__("Add New Owner")}}</a>
    <a href="{{url('/car/create')}}" class="btn btn-success btn-sm" title="Add new car">{{__("Add New Car")}}</a>
    <br/>
    <br/>
   <form method="post" action="{{route('owner.search')}}">
    @csrf
    <label>{{__("Name")}}</label>
    <br/>
    <input name="Name" value="{{$filter->Name}}">
    <br/>
    <label>{{__("Surname")}}</label>
    <br/>
    <input name="Surname" value="{{$filter->Surname}}">
    <button type="submit">{{__("Search")}}</button>
</form>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                
                    <th>{{__("Name")}}</th>
                    <th>{{__("Surname")}}</th>
                    <th>{{__("Phone Number")}}</th>
                    <th>{{__("Age")}}</th>
                    <th>{{__("Options")}}</th>
</tr></thead>

@foreach($owners as $item)
@can('view', $item) 
<tbody>
<tr>
        <td>{{$item->Name}}</td>
        <td>{{$item->Surname}}</td>
        <td>{{$item->Phone_Number}}</td>
        <td>{{$item->Age}}</td>
<td>
@can('update',$item)
<a href="{{url('/owner/'.$item->id)}}" title="View Owners" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>{{__("View Cars")}}</botton></a>
<a href="{{url('/owner/'.$item->id. '/edit')}}" title="Edit Owners" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>{{__("Edit")}} </botton></a>
<form method="post" action="{{ url('/owner'.'/'.$item->id)}}" accept-charset="UTF-8" style="display:inline">
{{method_field('DELETE')}}
{{csrf_field()}}
<button type="submit" class="btn btn-danger btn-sm" title="Delete Owner" onclick="return confirm('Confirm Delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>{{__("Delete")}} </botton>
</form>
@endcan
</td>
</tr>
</tbody>
@endcan 
@endforeach

</table>
</div>
</div>
</div>
</div>
</div>
</div>
<style>
    .fh{
        float: right;
    }
    </style>