<div class="table-responsive">

    <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="table" class="table table-bordered table-hover" id="categories-table">
                <thead>
                    <tr>
                        <th>{{ __('dashboard.attributes.name') }}</th>
                        <th>{{ __('dashboard.attributes.status') }}</th>
                        <th colspan="3">{{ __('dashboard.attributes.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->status }}</td>
                        <td>
                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('categories.show', [$category->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                                {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>


</div>
