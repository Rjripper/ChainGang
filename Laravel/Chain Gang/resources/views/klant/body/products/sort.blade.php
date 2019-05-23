<div class="store-filter clearfix">
    <div class="pull-left">
        <div class="row-filter">
            <a href="#"><i class="fa fa-th-large"></i></a>
            <a href="#" class="active"><i class="fa fa-bars"></i></a>
        </div>
        
        <div class="sort-filter">
            <span class="text-uppercase">Sorteren op:</span>
            <form method="GET" action="/producten/sort">
                <select class="input" name="sort" style="width:150px;" onchange="this.form.submit()">
                    <option class="see_value" value="{{ Request::get('sort') !== null ? Request::get('sort') : '' }}" selected disabled hidden>{{ Request::get('sort') !== null ? Request::get('sort') : 'Sorteer' }}</option>
                    <option value="price" id="price">Prijs</option>
                    <option value="product_name" id="product_name">Naam</option>
                </select>
                <input type="hidden" name="order_by" value="{{ Request::get('order_by') !== null && Request::get('order_by') == 'asc' ? 'desc' : 'asc'}}">
            </form>
        </div>
    </div>
    <div class="pull-right">
        <div class="page-filter">
            <span class="text-uppercase">Show:</span>
            <select class="input">
                <option value="0">10</option>
                <option value="1">20</option>
                <option value="2">30</option>
            </select>
        </div>
        <ul class="store-pages">
            <li><span class="text-uppercase">Page:</span></li>
            <li class="active">1</li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
        </ul>
    </div>
</div>

@if(Request::get('sort') !== null)
<script>
    for (let i = 0; i < document.getElementsByClassName("see_value").length; i++) {
        document.getElementsByClassName("see_value")[i].innerHTML = document.getElementById(document.getElementsByClassName("see_value")[0].value).innerHTML;   
    }
</script>
@endif    