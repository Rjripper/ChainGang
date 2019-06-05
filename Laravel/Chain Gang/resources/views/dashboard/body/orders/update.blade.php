@extends('dashboard.index')
@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Bestelling</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Bestelling Aanpassen</h4>
                {{-- Begin Form --}}
                    {{-- Orders toevoegen --}}
                    <div class="row">
                            <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group"><label for="title">Status</label> 
                                        @if($statusses != null)
                                            <select id="status" class="form-control">
                                                @foreach($statusses as $status)
                                                    @if($status->id == $order->status->id)
                                                        <option selected="selected">{{$status->title}}</option>
                                                    @else
                                                        <option>{{$status->title}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                    <div class="form-group"><label for="creator">Auteur</label> 
                                        @if($users != null)
                                            <select id="creator" class="form-control">
                                                @foreach($users as $user)
                                                    @if($user->id == $order->user->id)
                                                        <option selected="selected">{{$user->username}}</option>
                                                    @else
                                                        <option>{{$user->username}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                    <div class="form-group"><label for="customer">Klant</label> 
                                        @if($customers != null)
                                            <select id="customer" class="form-control">
                                                @foreach($customers as $customer)
                                                    @if($customer->id == $order->customer->id)
                                                        <option selected="selected">{{$customer->email}}</option>
                                                    @else
                                                        <option>{{$customer->email}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>                                  
                                    <div class="form-group"><label for="track_and_trace">Track & Trace</label> <input type="text" value="{{$order->track_and_trace}}" class="form-control" id="track_and_trace"></div>
                                    <div class="form-group">
                                        <label class="fw-500">Datum van Bestelling</label>
                                        <div class="timepicker-input input-icon form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon bgc-white bd bdwR-0">
                                                    <i class="ti-calendar"></i>
                                                </div>
                                                <input type="text" value="{{$order->order_date}}" class="form-control bdc-grey-200 start-date" id="order_date" placeholder="Datum van Bestelling" data-provide="datepicker">
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
                                                <input type="text"value="{{$order->shipped_date}}" class="form-control bdc-grey-200 start-date" id="ship_date" placeholder="Datum van Verzending" data-provide="datepicker">
                                            </div>
                                        </div>
                                    </div>         
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">                                    
                                   <label for="product">Product</label> 
                                        @if($products != null)
                                            <select id="product" class="form-control">
                                                @foreach($products as $product)
                                                    @if($loop->first)
                                                        <option selected="selected" data-id="{{$product->id}}">{{$product->product_name}} ({{$product->id}})</option>
                                                    @else
                                                        <option data-id="{{$product->id}}">{{$product->product_name}} ({{$product->id}})</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        @endif
                                    </div> 
                                    <div>
                                        <a class="btn btn-add-product" style="cursor: pointer;" onclick="addProduct()">Voeg toe aan lijst</a>
                                    </div>                               
                                </div>
                            </div>

                            <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <table id="tafeltje" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Productnaam</th>
                                                <th>Hoeveelheid</th>
                                                <th>Prijs</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr> 
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th id="total_amount"></th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr data-id="{{$item->product->id}}"> 
                                                    <td><img style="width: 50px; height: 50px;" class="user-table-avatar" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje"></td>
                                                    <td>{{$item->product->product_name}}</td>
                                                    <td><input type="number" min="1" value="{{$item->amount}}" disabled></td>
                                                    <td>&euro; {{$item->product->price}}</td>
                                                    <td><i class="ti-trash tables-icons" onclick="removeProduct(this);" data-id="{{$item->product->id}}"></i></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>  
                    {{-- EIND Form--}}
                    <div class="row">   
                        <div class="btn-back">
                            <a href="{{ url('/admin/orders') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                        </div>
                        <div class="btn-add-newsletter-layout">
                            <button type="button" onclick="updateOrder({{$order->id}});" class="btn btn-primary tables-function-button">Bestelling aanpassen</button>
                        </div>                
                    </div>                  
                    {{-- EIND Orders toevoegen--}}
            </div>
        </div>
    </div>
</div>
<script>
var products = [[]];

window.onload = function () {
    getItems();
    console.log(products);
};

function getItems() {
    let table = document.getElementById('tafeltje');
    table = table.children[2];
    
    for (var i = 0, row; row = table.rows[i]; i++) {
        
        let product_id = row.getAttribute('data-id');
        let amount = row.children[2].children[0].value;
        
        let product = [parseInt(product_id), parseInt(amount)];
        products.push(product);
    }
}

function updateOrder(order_id) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var form_data = new FormData();
    form_data.append('_method', 'PATCH');
    form_data.append('_token', CSRF_TOKEN);
    form_data.append('title', $('#title').val());
    form_data.append('status', $('#status').val());
    form_data.append('creator', $('#creator').val());
    form_data.append('customer', $('#customer').val());
    form_data.append('track_and_trace', $('#track_and_trace').val());
    form_data.append('order_date', $('#order_date').val());
    form_data.append('ship_date', $('#ship_date').val());
    form_data.append('order_items', JSON.stringify(products));

    // event.preventDefault();
    $.ajax({
        url: '/admin/order/update/' + order_id,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(){
            Swal.fire({
                type: 'success',
                title: 'Wijziging Bestelling',
                html: "U heeft de bestelling aangepast.",
                timer: 3000
            });
        },
        error: function(response) {
            let errors = response.responseJSON.errors;
            let myErrors = "";
            for (let key in errors) {
                for(let index in errors[key]) {
                    myErrors += "<p style='color: red; margin:0; padding:0; text-align: left;'>" + errors[key][index] + "</p>";
                }
            }

            Swal.fire({
                type: 'error',
                title: 'Wijziging Bestelling!',
                html: "Er traden foutmeldingen op tijdens het wijzigen van de bestelling.<br><br>" + myErrors,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
}

function addProduct() {
    let product_dropdown = document.getElementById('product');
    let product_id = product_dropdown.options[product_dropdown.selectedIndex].getAttribute('data-id');

    //Get Details about specific product
    $.ajax({
        url: '/product/json/' + product_id ,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            let exists = false;
            let key = 0;
            for(x in products) {
                let product_id = products[x][0];
                let amount = products[x][1];
                if(product_id == data.product.id) {
                    exists = true;
                    key = x;
                    break;
                }
            }

            let amount = 1;
            if(exists) {
                products[key][1]++;
                amount = products[key][1];
            } else {
                let product = [data.product.id, 1];
                products.push(product);
            }

            insertData(data, amount);
        }
    });
} 

function removeProduct(node) {
    let table = document.getElementById("tafeltje");
    table = table.children[2];

    let product_id = node.parentElement.parentElement.getAttribute('data-id');

    node.parentElement.parentElement.parentElement.removeChild(node.parentElement.parentElement);
    
    let total_amount = 0;
    for(let i = 0; i < table.children.length; i++){
        let price = table.children[i].children[3].innerText;
        price = price.replace('€', '');
        total_amount += parseFloat(price);
    }
    document.getElementById('total_amount').innerHTML = "&euro;" + total_amount;

    let key = 0;
    for(x in products) {
        let productid = products[x][0];
        if(productid == product_id) {
            key = x;
            break;
        }
    }

    products.splice(key, 1);
}

function insertData(data, hoeveel) {
    let table = document.getElementById("tafeltje");
    table = table.children[2];

    let exists = false;
    let child = 0;
    for(let i = 0; i < table.children.length; i++){
        let id = table.children[i].getAttribute('data-id');
        if(id != null) {
            if(id == data.product.id) {
                exists = true;
                child = i;
            }
        }
    }

    if(!exists) {
        let rowCount = table.rows.length;         
        let count = rowCount + 1;
        let row = table.insertRow(rowCount);
        row.setAttribute('data-id', data.product.id);

        let image = row.insertCell(0);             
        let product_name = row.insertCell(1);
        let amount = row.insertCell(2);
        let price = row.insertCell(3);
        let delete_cell = row.insertCell(4);
        
        image.innerHTML = '<img style="width: 50px; height: 50px;" class="user-table-avatar" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje">';
        product_name.innerHTML = data.product.product_name;
        amount.innerHTML = '<input type="number" id="amount-'+ data.product.id + '"' + 'min="1" value="'+ hoeveel +'" disabled>';
        price.innerHTML = '&euro;' + data.product.price;
        delete_cell.innerHTML = '<i class="ti-trash tables-icons" onclick="removeProduct(this);" data-id="'+ data.product.id +'"></i>';    
    } else {
        let tr = table.children[child];
        tr.children[2].children[0].value++;

        tr.children[3].innerHTML = '&euro;' + data.product.price * tr.children[2].children[0].value;
    }

    let total_amount = 0;
    for(let i = 0; i < table.children.length; i++){
        let price = table.children[i].children[3].innerText;
        price = price.replace('€', '');
        total_amount += parseFloat(price);
    }

    document.getElementById('total_amount').innerHTML = "&euro;" + total_amount;
}
</script>
@endsection