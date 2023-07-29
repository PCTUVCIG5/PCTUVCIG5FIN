@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User </a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
 <th width="1px">No</th>
   <th>Name</th>
   <th>Email</th>
   <th width="1px">Roles</th>
   <th width="1px"></th>
   <th width="1px">Action</th>
   <th width="1px">statut</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
        @if(Cache::has('is_online' . $user->id))
            <div class="online-indicator">
            <span class="blink"></span>
            </div>
        @else
        <div class="online-indicator1">
            <span class="blink1"></span>
            </div>
        @endif
    </td>
    <td>
    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
    <div class='btn-group'>
        <a href="{{ route('users.show', [$user->id]) }}"
            class='btn btn-default btn-xs'>
            <i class="far fa-eye"></i>
        </a>
        <a href="{{ route('users.edit', [$user->id]) }}"
            class='btn btn-success btn-xs'>
            <i class="far fa-edit"></i>
        </a>
        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
    </div>
    {!! Form::close() !!}

    </td>
    <td>
    @if($user->status==1)
  <a href="{{ url('change-status/'.$user->id) }}" onclick="return confirm('Voulez-vous desactiver {{ $user->name }}?')" class="btn btn-sm btn-success">Active</a>
  @else
  <a href="{{ url('change-status/'.$user->id) }}" onclick="return confirm('Voulez-vous activer {{ $user->name }}?')" class="btn btn-sm btn-danger">Inactive</a>
  @endif
   </td>

  </tr>
 @endforeach
</table>



{!! $data->render() !!}

@endsection