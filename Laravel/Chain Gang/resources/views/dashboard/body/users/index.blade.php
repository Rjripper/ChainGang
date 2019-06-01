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
                                <th></th>
                                <th>ID</th>
                                <th>Gebruikersnaam</th>
                                <th>E-mailadres</th>
                                <th>Rol</th>
                                <th>Ipadres</th>
                                <th>Registratie Datum</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Gebruikersnaam</th>
                                <th>E-mailadres</th>
                                <th>Rol</th>
                                <th>Ipadres</th>
                                <th>Registratie Datum</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Users --}}
                            <tr>
                                <td><img class="user-table-avatar" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje"></td>
                                <td>1</td>
                                <td>bobross</td>
                                <td>bob@ross.com</td>
                                <td>Admin</td>
                                <td>31.151.233.21</td>
                                <td>12:03:12 14/03/2019</td>
                                <td>
                                    <div class="text-center">
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/user/1/') }} "><i class="ti-eye"></i></a>
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/user/edit/1/') }} "><i class="ti-pencil"></i></a>
                                        {{-- Data-id = User_id --}}
                                        <i class="ti-trash tables-icons remove-user-icon" data-id="1"></i>
                                    </div>
                                </td>
                            </tr>
                            {{-- Loop this with all Users --}}
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="text-right">
                                <a href="{{ url('/admin/user/create') }}"><button class="btn btn-primary tables-function-button">Gebruiker aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@endsection