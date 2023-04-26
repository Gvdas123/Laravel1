<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
        <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
<div class="card" style="margin:20px;">
<div class="card-header">Add new Picture</div>
<div class="card-body">
<form method="POST" action="{{ route('img.store') }}" enctype="multipart/form-data">
        {!! csrf_field()!!}
        <input type="file" name="image[]" id="image" calss="form-control"><br>
        <label>Choose a Car</label></br>
        <select name="Cars_id" id="Cars_id">
        @foreach($Img as $item)
  <option value="{{$item->id}}">{{$item->Registration_Number}}</option>
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
