@extends('crud.layout')

@section('title', "List Devices")

@section('body')
<h2>List Devices</h2>
  <div class="panel panel-primary">
    <div class="panel-heading">List Devices
      <a class="btn btn-warning pull-right" style="margin-top: -7px" href="{{ route('device.create')  }}">Add Device</a>
    </div>
    <div class="panel-body">
          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Device Name</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($devices as $index => $item)

      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ ucwords($item->name) }}</td>
        <td>
          @if ($item->status == 1)

            <button class="btn btn-success">Active</button>

          @else

            <button class="btn btn-danger">Inactive</button>
              
          @endif
          
        </td>
        <td>
          <a href="{{ route('device.edit', $item->id) }}" class="btn btn-warning">EDIT</a>
          <a href="#" onclick="if(confirm('Are you sure you want to delete?')){ $('#frm-delete-data-{{ $item->id }}').submit() }"class="btn btn-danger">DELETE</a>



          <form action="{{ route('device.destroy', $item->id) }}" id="frm-delete-data-{{ $item->id }}" method = "post">

            @csrf
            @method("delete")

          
          
          </form>
        </td>
      </tr>
          
      @endforeach
      
    </tbody>
  </table>

</body>
</html>

    </div>
  </div>
    
@endsection
    