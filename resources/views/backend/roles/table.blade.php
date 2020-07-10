<div class="table-responsive">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="table" class="table table-bordered table-hover" id="roles-table">
        <thead>
            <tr>
                <th>{{ __('dashboard.attributes.role') }}</th>
                <th colspan="3">{{ __('dashboard.attributes.action') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>
                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roles.show', [$role->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('roles.edit', [$role->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>
