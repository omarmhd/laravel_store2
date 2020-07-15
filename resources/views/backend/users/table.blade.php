
<div class="table-responsive">

    <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="table" class="table table-bordered table-hover" id="products-table">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>البريد الالكتروني</th>
                        <th>رقم الموبايل</th>
                        <th>الموقع الالكتروني</th>
                        <th>الوصف</th>
                        <th>{{__('dashboard.attributes.role')}}</th>
                        <th>الصورة</th>
                        
                        <th colspan="3">الحدث</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->website }}</td>
                    <td>{{ $user->description }}</td>
                    {{-- {{ dd($user->roles) }} --}}
                    <td>{{ $user->roles[0]->name }}</td>
                    <td><img src="{{ asset('profile/'.$user->image) }}" style="width: 60px;hieght:60px" alt=""></td>
                    {{-- <td>{{ $user->password }}</td> --}}
                        <td>
                            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                {{-- <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a> --}}
                                <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('هل انت متأكد من الحذف ؟')"]) !!}
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
