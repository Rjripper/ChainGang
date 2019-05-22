@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Klanten</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Klanten</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>E-mailadres</th>
                                <th>Telefoonnummer</th>
                                <th>Adres</th>
                                <th>Plaats</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>E-mailadres</th>
                                <th>Telefoonnummer</th>
                                <th>Adres</th>
                                <th>Plaats</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Users --}}
                            <tr>
                                <td>1</td>
                                <td>Bob</td>
                                <td>Ross</td>
                                <td>bobross@ross.com</td>
                                <td>+316439243823</td>
                                <td>J.F. Kennedylaan 21</td>
                                <td>Doetinchem</td>
                                <td>
                                    <div class="text-center">
                                        <a class="table-icon-link tables-icons" href="{{ url('/customer/1/') }} "><i class="ti-eye"></i></a>
                                        <a class="table-icon-link tables-icons" href="{{ url('/customer/edit/1/') }} "><i class="ti-pencil"></i></a>
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
                                <a href="{{ url('/customer/create') }}"><button class="btn btn-primary tables-function-button">Klant aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@endsection