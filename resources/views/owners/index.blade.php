
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
                    <p class="fh">Hello :  {{ Auth::user()->name }}</p>
                    <br/>
                    <a class="fh" class="nav-link" href="{{ route('signout') }}">Logout</a>
                    <h2>CRUD</h2>
</div>
<div class="card-body">
@if (Auth::user()->role==0)
    <a href="{{url('/owner/create')}}" class="btn btn-success btn-sm" title="Add new owner">Add New Owner</a>
    <a href="{{url('/car/create')}}" class="btn btn-success btn-sm" title="Add new car">Add New Car</a>
    @endif
    <br/>
    <br/>
   <form method="post" action="{{route('owner.search')}}">
    @csrf
    <label>Name</label>
    <br/>
    <input name="Name" value="{{$filter->Name}}">
    <br/>
    <label>Surname</label>
    <br/>
    <input name="Surname" value="{{$filter->Surname}}">
    <button type="submit">Search</button>
</form>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Phone Number</th>
                    <th>Age</th>
                    <th>Options</th>
</tr></thead>

@foreach($owners as $item)
<tbody>
<tr>
        <td>{{$item->Name}}</td>
        <td>{{$item->Surname}}</td>
        <td>{{$item->Phone_Number}}</td>
        <td>{{$item->Age}}</td>
<td>
<a href="{{url('/owner/'.$item->id)}}" title="View Owners" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View Cars</botton></a>
@if (Auth::user()->role==0)
<a href="{{url('/owner/'.$item->id. '/edit')}}" title="Edit Owners" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit </botton></a>
<form method="post" action="{{ url('/owner'.'/'.$item->id)}}" accept-charset="UTF-8" style="display:inline">
{{method_field('DELETE')}}
{{csrf_field()}}
<button type="submit" class="btn btn-danger btn-sm" title="Delete Owner" onclick="return confirm('Confirm Delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete </botton>

</form>
@endif
</td>
</tr>
@endforeach
</tbody>
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