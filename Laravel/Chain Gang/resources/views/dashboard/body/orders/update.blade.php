@extends('dashboard.index')
@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Bestelling</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Bestelling Aanpassen</h4>
               
                {{-- Begin Form --}}
                <form>
                    @csrf
                    {{-- Orders toevoegen --}}
                    <div class="row">
                            <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group"><label for="inputTitle">Titel</label> <input type="text" class="form-control" id="inputTitle"></div>
                                    <div class="form-group"><label for="inputStatus">Status</label> 
                                        <select id="inputStatus" class="form-control">
                                            <option selected="selected">Status...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group"><label for="inputAteur">Auteur</label> 
                                        <select id="inputAteur" class="form-control">
                                            <option selected="selected">Auteur...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group"><label for="inputKlant">Klant</label> 
                                        <select id="inputKlant" class="form-control">
                                            <option selected="selected">Klant...</option>
                                            <option>...</option>
                                        </select>
                                    </div>                                  
                                    <div class="form-group"><label for="inputTrackAndTrace">Track & Trace</label> <input type="text" class="form-control" id="inputTrackAndTrace"></div>
                                    <div class="form-group">
                                        <label class="fw-500">Datum van Bestelling</label>
                                        <div class="timepicker-input input-icon form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon bgc-white bd bdwR-0">
                                                    <i class="ti-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Datum van Bestelling" data-provide="datepicker">
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
                                                <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Datum van Verzending" data-provide="datepicker">
                                            </div>
                                        </div>
                                    </div>         
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">                                    
                                   <label for="inputProduct">Product</label> 
                                        {{-- <select id="inputProduct" id="inputGroupSelect03" class="form-control"> --}}
                                            <select id="inputKlant" class="form-control">
                                            <option selected="selected">Product...</option>
                                            <option value="1">Fiets</option>
                                            <option value="2">Fietsje</option>
                                            <option value="3">Grote fiets</option>
                                        </select>
                                    </div> 
                                    <div>
                                        <a class="btn btn-add-product" onclick="addRow('dataTable')">Voeg toe aan lijst</a>
                                    </div>                               
                                </div>
                            </div>

                            <div class="col-sm-6">
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
                                                <td><img style="width: 20%; height: 20%;" class="user-table-avatar" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje"></td>
                                                <td>fiets</td>
                                                <td>20</td>
                                                <td>
                                                    €50000
                                                    <i class="ti-trash tables-icons remove-user-icon" data-id="1"></i>
                                                </td>
                                            </tr>
                                            {{-- Loop this with all Products --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>   
                        <div class="btn-add-newsletter-layout">
                            <a href="{{ url('/orders') }}"><button class="btn btn-primary tables-function-button">Bestelling aanpassen</button></a> 
                        </div>                    
                        
                    {{-- EIND Orders toevoegen--}}
                </form>
                {{-- EIND Form--}}
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