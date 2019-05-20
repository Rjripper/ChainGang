@extends('dashboard.index')
@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Bestelling</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Bestelling - #4343123 (1)</h4>
               
                {{-- Begin Form --}}
                <form>
                    @csrf
                    {{-- Orders toevoegen --}}
                    <div class="row">
                            <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group"><label for="inputTitle">Titel</label>
                                        <input type="text" class="form-control" id="validationCustom05" placeholder="" disabled required>
                                    </div>
                                    <div class="form-group"><label for="inputStatus">Status</label> 
                                        <select id="inputStatus" class="form-control" disabled>
                                            <option selected="selected">Status...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group"><label for="inputAteur">Auteur</label> 
                                        <select id="inputAteur" class="form-control" disabled>
                                            <option selected="selected">Auteur...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group"><label for="inputKlant">Klant</label> 
                                        <select id="inputKlant" class="form-control" disabled>
                                            <option selected="selected">Klant...</option>
                                            <option>...</option>
                                        </select>
                                    </div>                                  
                                    <div class="form-group"><label for="inputTrackAndTrace">Track & Trace</label>
                                        <input type="text" class="form-control" id="validationCustom05" placeholder="" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label class="fw-500">Datum van Bestelling</label>
                                        <div class="timepicker-input input-icon form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon bgc-white bd bdwR-0">
                                                    <i class="ti-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Eind Datum" data-provide="datepicker" disabled>
                                            </div>
                                        </div>
                                    </div>                                     
                                    <div class="form-group">
                                        <label class="fw-500">Datum van Verzending</label>
                                        <div class="timepicker-input input-icon form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon bgc-white bd bdwR-0">
                                                    <i class="ti-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Eind Datum" data-provide="datepicker" disabled>
                                            </div>
                                        </div>
                                    </div>         
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-9">
                            <div class="card">
                                <div class="card-body">
                                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Productnaam</th>
                                                <th>Hoeveelheid</th>
                                                <th>Prijs</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr> 
                                                <th></th>
                                                <th>Productnaam</th>
                                                <th>Hoeveelheid</th>
                                                <th>Prijs</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            {{-- Loop this with all Products --}}
                                            <tr>
                                                <td><img style="width: 50px; height: 50px;" class="user-table-avatar" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje"></td>
                                                <td>fiets</td>
                                                <td>20</td>
                                                <td>
                                                    €50000
                                                </td>
                                            </tr>
                                            {{-- Loop this with all Products --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                    {{-- EIND Form--}}             
                    <div class="row">   
                        <div class="btn-back">
                            <a href="{{ url('/orders') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                        </div>
                        <div class="btn-add-newsletter-layout">
                        </div>                
                    </div>    
                    {{-- EIND Orders toevoegen--}}              
            </div>
        </div>
    </div>
</div>


<script>

function addRow(dataTable) {               
    var table = document.getElementById(dataTable);               
    var rowCount = table.rows.length;         
    var count = rowCount + 1;
    var row = table.insertRow(rowCount);               
        //*** EDIT ***               
    var cell1 = row.insertCell(0);             
    cell1.innerHTML = count;
    var cell2 = row.insertCell(1);             
    var element2 = document.createElement("select");

    //Append the options from the arraylist to the "select" element
    for (var i = 0; i < arraylist.length; i++) {
        var option = document.createElement("option");
        option.value = arraylist[i];
        option.text = arraylist[i];
        element2.appendChild(option);
    }

    cell2.appendChild(element2);  
} 
</script>
@endsection