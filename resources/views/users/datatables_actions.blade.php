{!! Form::open(['route' => ['users.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('users.show', $id) }}" class='btn btn-info btn-sm'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('users.edit', $id) }}" class='btn btn-warning btn-sm'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
         'class' => 'btn btn-danger btn-sm remove-user',
         'type' => 'submit',
         'onclick' => "return delete_confirmation()",
         'data-id' => $id,
         'data-action' => route('users.destroy', $id)
    ]) !!}
</div>
{!! Form::close() !!}
