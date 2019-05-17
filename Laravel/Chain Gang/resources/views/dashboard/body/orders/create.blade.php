@extends('dashboard.index')
@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Bestelling</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Bestelling aanmaken</h4>
               
                {{-- Begin Form --}}
                <form action="POST">
                    @csrf
                    {{-- Orders toevoegen --}}
                    <div class="row">
                            <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="inputfield-spacing">
                                        Status
                                        <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                            <option selected>Status</option>
                                            <option value="1">Mustafa</option>
                                            <option value="2">Mufasa</option>
                                            <option value="3">Muffie</option>
                                        </select>
                                    </div> 
                                    <div class="inputfield-spacing">
                                        Auteur
                                        <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                            <option selected>Auteur</option>
                                            <option value="1">Mustafa</option>
                                            <option value="2">Mufasa</option>
                                            <option value="3">Muffie</option>
                                        </select>
                                    </div> 
                                    <div class="inputfield-spacing">
                                        Klant
                                        <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                            <option selected>Klant</option>
                                            <option value="1">Mustafa</option>
                                            <option value="2">Mufasa</option>
                                            <option value="3">Muffie</option>
                                        </select>
                                    </div>                                     
                                    <div class="inputfield-spacing">
                                        Track & Trace
                                        <input class="form-control" type="text">
                                    </div>                                     
                                    <div class="inputfield-spacing">
                                        Datum van Bestelling
                                        <input class="form-control" type="text">
                                    </div>                                     
                                    <div>
                                        Datum van Verzending
                                        <input class="form-control" type="text">
                                    </div>         

                                </div>
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">                                     
                                    <div>
                                        Product
                                        <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                            <option selected>Product</option>
                                            <option value="1">Fiets</option>
                                            <option value="2">Fietsje</option>
                                            <option value="3">Grote fiets</option>
                                        </select>
                                        <div>
                                            <a class="btn btn-add-product" onclick="addRow('dataTable')">Voeg toe aan lijst</a>
                                        </div>
                                    </div>                                         
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
                                                <td>€50000</td>
                                            </tr>
                                            {{-- Loop this with all Products --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>   
                        <div class="submit-newsletter">
                            <input type="submit" value="Aanmaken bestelling" class="btn btn-primary">
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