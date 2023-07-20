<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $permission->name }}</p>
</div>

<!-- Guard Name Field -->
<div class="col-sm-12">
    {!! Form::label('guard_name', 'Guard Name:') !!}
    <p>{{ $permission->guard_name }}</p>
</div>

<!-- Group Name Field -->
<div class="col-sm-12">
    {!! Form::label('group_name', 'Group Name:') !!}
    <p>{{ $permission->group_name }}</p>
</div>

