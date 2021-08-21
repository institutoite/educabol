<div>
    <div class="card">

        <card-body>
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user) }}" class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Editar </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </card-body>
        
        <div class="card-footer">
            {{$users->links()}}
        </div>
    </div>
    
</div>
