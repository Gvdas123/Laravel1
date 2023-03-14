<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
<div class="card">
    <div class="card-header">Edit Owner</div>
        <div class="body">
            <form action="{{url('owner/'.$owners->id)}}" method="post">
        {!! csrf_field()!!}
            @method("Patch")
            <input type="hidden" name="id" id="id" value="{{$owners->id}}"/>
            <label>Name</label><br/>
            <input type="text" name="Name" id="Name" value="{{$owners->Name}}" class="form-control"><br/>
            <label>Surname</label><br/>
            <input type="text" name="Surname" id="Surname" value="{{$owners->Surname}}" class="form-control"><br/>
            <label>Phone Number</label><br/>
            <input type="text" name="Phone_Number" id="Phone_Number" value="{{$owners->Phone_Number}}" class="form-control"><br/>
            <label>Age</label><br/>
            <input type="text" name="Age" id="Age" value="{{$owners->Age}}" class="form-control"><br/>
            <input type="submit" value="Update" class="btn btn-success"><br/>
</form>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>