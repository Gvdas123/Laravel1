<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
        <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
<div class="card" style="margin:20px;">
<div class="card-header">Create New Owner</div>
<div class="card-body">
    <form action="{{url('owner')}}" method="post">
        {!! csrf_field()!!}
        <label>Name</label></br>
        <input type="text" name="Name" id="Name" class="form-control"></br>
        <label>Surname</label></br>
        <input type="text" name="Surname" id="Surname" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="text" name="Phone_Number" id="Phone_Number" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="Age" id="Age" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-primary btn-sm"></br>
</div>
</div>
</div>
</div>
</div>
</div>
