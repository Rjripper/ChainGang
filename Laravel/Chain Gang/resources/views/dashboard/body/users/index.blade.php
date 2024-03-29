@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Gebruikers</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Alle Gebruikers</h4>
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            {{-- <th></th> --}}
                            <th>ID</th>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Gebruikersnaam</th>
                            <th>E-mailadres</th>
                            <th>Admin</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            {{-- <th></th> --}}
                            <th>ID</th>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Gebruikersnaam</th>
                            <th>E-mailadres</th>
                            <th>Admin</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- Loop this with all Users --}}
                        @foreach ($users as $user)                                
                        
                        <tr>
                            {{-- <td><img class="user-table-avatar" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje"></td> --}}
                            <td>{{$user->id}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if ($user->is_admin == 1)
                                    <i class="fa fa-check" style="color:#90ee90;font-size:21px;"></i>
                                @endif
                            </td>
                            <td>
                                <div class="text-center">
                                    <a class="table-icon-link tables-icons" href="{{ url('/admin/user/'.$user->id.'/') }} "><i class="ti-eye"></i></a>
                                    <a class="table-icon-link tables-icons" href="{{ url('/admin/user/edit/'. $user->id) }} "><i class="ti-pencil"></i></a>
                                    {{-- Data-id = User_id --}}
                                <i class="ti-trash tables-icons" data-id="{{$user->id}}" data-username="{{$user->username}}" onclick="deleteUser(this);"></i>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        {{-- Loop this with all Users --}}
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12 mb-12">
                        <div class="text-right">
                            <a href="{{ route('userCreate') }}"><button class="btn btn-primary tables-function-button">Gebruiker aanmaken</button></a> 
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<script>
    function deleteUser(node) {
        let user_id = node.getAttribute('data-id');
        let username = node.getAttribute('data-username');

        Swal.fire({
            title: 'Weet je het zeker?',
            text: "Je kan deze optie niet terug zetten.",
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Annuleren',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ja, verwijder ('+ username  +')!'
            }).then((result) => {
            if (result.value) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', CSRF_TOKEN);
        
                $.ajax({
                    url: '/admin/user/delete/' + user_id,
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(){
                        node.parentElement.parentElement.parentElement.parentElement.removeChild(node.parentElement.parentElement.parentElement);
                        Swal.fire(
                        'Verwijderd!',
                        'Gebruiker is verwijderd!',
                        'success'
                        );
                    },
                    error: function(errors) {
                        console.log(errors);
                    }
                });
                
            }
        });
        
    }
</script>
@endsection