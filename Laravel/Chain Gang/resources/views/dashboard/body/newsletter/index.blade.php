@extends('dashboard.index')
@section('body')

        <div class="container-fluid">
            <h4 class="c-grey-900 mT-10 mB-30">Data Tables</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Nieuwsbrieven</h4>
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Titel</th>
                                    <th>Bericht</th>
                                    <th>Auteur</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Titel</th>
                                    <th>Bericht</th>
                                    <th>Auteur</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>

                            {{-- Loop this with all Newsletters --}}
                            <tr>
                                <td>Mooie Titel</td>
                                <td>Leuk Berichtje</td>
                                <td>RJ</td>
                                <td>
                                    <div class="text-center">
                                        <a class="table-icon-link tables-icons" href="{{ url('/newsletter/1/') }} "><i class="ti-eye"></i></a>
                                        <a class="table-icon-link tables-icons" href="{{ url('/newsletter/update/') }} "><i class="ti-pencil"></i></a>
                                        {{-- Data-id = Nieuwsbrief_id --}}
                                        <i class="ti-trash tables-icons remove-user-icon" data-id="1"></i>
                                    </div>
                                </td>
                            </tr>
                            {{-- Loop this with all Newsletters --}}
                            </tbody>                            
        
                        </table>
                        <div class="btn-add-newsletter-layout">
                            <a type="button" class="btn btn-primary" href="{{ url('/newsletter/create') }}">Aanmaken Nieuwsbrief</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection