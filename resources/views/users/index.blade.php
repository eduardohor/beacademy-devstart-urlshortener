@extends('template.admin')
@section('body')
<div class='shadow-sm p-3 rounded w-100'>
    <div>
        <div class='mx-3'>
            <h1 class="text-info mt-4">Listagem de Usuários</h1>
            @if(session()->has('destroy'))
                <div class="alert alert-danger alert-dismissible fade show w-75" role="alert">
                    <strong>Sucesso!</strong> {{session()->get('destroy')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

            <form action="{{ route('users.index') }}" method="get" class='d-flex'>
                @csrf
                <div class='form-group w-50 me-3'>
                    <input type="search" id="form1" name='search' class="form-control rounded "
                        placeholder='Pesquisar' />
                </div>
                <button type="submit" class="btn btn-info text-white">
                    Buscar<i class="fas fa-search"></i>
                </button>
            </form>
            <table class="table table-striped ">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Administrador</th>
                        <th scope="col">Data de Cadastro</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($users as $user)
                        <tr>
                        @if($user->photo)
                            <th><img src="{{ asset('https://url-shortener-api.s3.eu-west-1.amazonaws.com/' . $user->photo) }}" width="60px" height="60px" class="border rounded-circle"></th>
                        @else    
                            <th><img src="{{ asset('storage/profile/avatar.png') }}" width="60px" height="60px" class="border rounded-circle"></th>
                        @endif
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->telephone}}</td>
                        <td>{{$user->birth_date}}</td>
                        <td>
                            @if($user->is_admin == '1')
                                <b>SIM</b>
                                @else
                                    NÃO
                             @endif
                                
                        </td>
                        <td>{{date('d/m/Y', strtotime($user->created_at))}}</td>
                        <td><a href="{{route('user.show', $user->id)}}" class="btn btn-info text-white">Visualizar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>   
                {{$users->links('pagination::bootstrap-5')}}
        </div>
    </div>
</div>
@endsection