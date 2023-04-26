<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
        <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
<div class="card" style="margin:20px;">
<div class="card-header">{{__("Create New Car")}}</div>
<div class="card-body">
    <form action="{{url('car')}}" method="post" enctype="multiform/form-data">
        {!! csrf_field()!!}
        <label>{{__("Brand")}}</label></br>
        <input type="text" name="Brand" id="Brand" class="form-control"></br>
        <label>{{__("Model")}}</label></br>
        <input type="text" name="Model" id="Model" class="form-control"></br>
        <label>{{__("Registration Number")}}</label></br>
        <input type="text" name="Registration_Number" id="Registration_Number" class="form-control"></br>
        <label>{{__("Owner")}}</label></br>
        <select name="Owners_id" id="Owners_id">
        @foreach($Cars as $item)
  <option value="{{$item->id}}">{{$item->Name}}</option>
  @endforeach
</select></br>
<input type="submit" value="Save" class="btn btn-primary btn-sm"></br>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
