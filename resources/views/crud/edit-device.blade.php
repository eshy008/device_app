@extends('crud.layout')

@section('title', "Edit Device")

@section('body')
<h2>Add Device</h2>
  <div class="panel panel-primary">
    <div class="panel-heading">Edit Device
      <a class="btn btn-warning pull-right" style="margin-top: -7px" href="{{ route('device.index')  }}">List Devices</a>
    </div>
    <div class="panel-body">
          
      <form class="form-horizontal" method="post" action="{{ route('device.store') }}">

        @csrf

        <div class="form-group">
          <label class="control-label col-sm-2" for="Name">Name:</label>
          <div class="col-sm-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="<?= $device->name ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="Status">Status:</label>
          <div class="col-sm-6">
            <select name="status" class="form-control">
              <option value="1" @if ($device->status == 1) selected @endif >Active </option>
              <option value="0" @if($device->status == 0) selected @endif >Inactive</option>
            </select>
          </div>
        </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Update</button>
              </div>
            </div>
          </form>
        
  

</body>
</html>

    </div>
  </div>
    
@endsection
    