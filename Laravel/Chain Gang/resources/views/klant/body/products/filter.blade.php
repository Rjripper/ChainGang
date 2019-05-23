<div id="aside" class="col-md-3">
    <!-- aside widget -->
    <div class="aside">
        <h3 class="aside-title">Filter op merk</h3>
        <ul class="list-links">

            @foreach ($brands as $brand)
                <li><a href="{{url('/producten/merk', $brand['id'])}}">{{$brand['title']}}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- /aside widget -->

    <!-- category -->
    <div class="aside">
        <h3 class="aside-title">Filter op categorie</h3>
        <ul class="list-links">
            @foreach ($categories as $categorie)
                <li><a href="{{url('/producten/categorie', $categorie['id'])}}">{{ $categorie['title'] }}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- einde category -->

    <div class="aside">
        <h3 class="aside-title">Filter op type</h3>
        <ul class="list-links">
            @foreach ($types as $type)
                <li><a href="{{url('/producten/type', $type['id'])}}">{{ $type['title'] }}</a></li>    
            @endforeach
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