<div id="aside" class="col-md-3">
    <div id="filters" style="display: none;">
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
    <div id="filters_small">
        <div class="aside">
            <h3 class="aside-title">Filteren</h3>
            <div class="dropdown show sort-filter">
                <h5>Merk</h5>
                <a style="border: 1px solid gray; border-radius: 0px;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Merk
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @foreach ($brands as $brand)
                        <a style="display: block; padding-left: 5px;" href="{{url('/producten/merk', $brand['id'])}}">{{$brand['title']}}</a>
                    @endforeach
                </div>
            </div>
            <br>
            <div class="dropdown show sort-filter">
                <h5>Categorie</h5>
                <a style="border: 1px solid gray; border-radius: 0px;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorie
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @foreach ($brands as $brand)
                        <a style="display: block; padding-left: 5px;" href="{{url('/producten/categorie', $categorie['id'])}}">{{ $categorie['title'] }}</a>
                    @endforeach
                </div>
            </div>
            <br>
            <div class="dropdown show sort-filter">
                <h5>Type</h5>
                <a style="border: 1px solid gray; border-radius: 0px;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Type
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @foreach ($brands as $brand)
                        <a style="display: block; padding-left: 5px;" href="{{url('/producten/type', $type['id'])}}">{{ $type['title'] }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end hide -->
</div>

@if(Request::get('sort') !== null)
<script>
    for (let i = 0; i < document.getElementsByClassName("see_value").length; i++) 
    {
        document.getElementsByClassName("see_value")[i].innerHTML = document.getElementById(document.getElementsByClassName("see_value")[0].value).innerHTML;   
    }
</script>
@endif  
<script>
// filter_button
//filters
window.addEventListener("resize", toggleFiltersResize);

function toggleFiltersResize() {
    let filters = document.getElementById('filters');
    let small = document.getElementById("filters_small");

    if(window.innerWidth > 960) {
        filters.style.display = "block";
        small.style.display = "none";
    } else {
        filters.style.display = "none";
        small.style.display = "block";
    }
}
toggleFiltersResize();
</script>