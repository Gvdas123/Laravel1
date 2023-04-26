<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
<div class="card"> 
    <div class="card-header">{{__("Edit Car")}}</div>
        <div class="body">
            <form action="{{url('owner/'.$cars->id)}}" method="post">
            {!! csrf_field()!!}
            @method("Patch")
            <input type="hidden" name="id" id="id" value="{{$cars->id}}"/>
            <label>{{__("Brand")}}</label><br/>
            <input type="text" name="Brand" id="Brand" value="{{$cars->Brand}}" class="form-control"><br/>
            <label>{{__("Model")}}</label><br/>
            <input type="text" name="Model" id="Model" value="{{$cars->Model}}" class="form-control"><br/>
            <label>{{__("Registration Number")}}</label><br/>
            <input type="text" name="Registration_Number" id="Registration_Number" value="{{$cars->Registration_Number}}" class="form-control"><br/>
            <label>{{__("Owner")}}</label><br/>
            <select name="Owners_id" id="Owners_id">
            @foreach($cars->owner as $item)
            <option value="{{$item->id}}">{{$item->Name}}</option>
             @endforeach
         </select></br>
            <input type="submit" value="Update" class="btn btn-success"><br/>
</form>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>