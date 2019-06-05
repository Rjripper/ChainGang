<div class="masonry-item col-md-12">
    <div class="bd bgc-white">
        <div class="layers">
            <div class="layer w-100 p-20">
                <h6 class="lh-1">Nieuwe Bestellingen</h6>
            </div>
            <div class="layer w-100">
                <div class="bgc-light-blue-500 c-white p-20">
                    <div class="peers ai-c jc-sb gap-40">
                        <div class="peer peer-greed">
                            <h5>{{$month_name}} {{$current_year}}</h5>
                            <p class="mB-0">Nieuwe Bestellingen</p>
                        </div>
                        <div class="peer">
                            <h3 class="text-right">&euro;{{$total_price}}</h3>
                        </div>
                    </div>
                </div>
                <div class="table-responsive p-20">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="bdwT-0">Factuur Nummer</th>
                                <th class="bdwT-0">Status</th>
                                <th class="bdwT-0">Datum</th>
                                <th class="bdwT-0">Prijs</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="fw-600"><a href="{{ url('/admin/order/' . $order->id) }}">#{{$order->id}}</a></td>
                                    <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">{{$order->status->title}}</span></td>
                                    <td>{{$month_name}} {{\Carbon\Carbon::parse($order->order_date)->format('d') }}</td>
                                    <td><span class="text-danger">&euro;{{$order->total_price($order)}}</span></td>
                                </tr>
                            @endforeach
                            {{-- <tr>
                                <td class="fw-600"><a href="">#3323232</a></td>
                                <td><span class="badge bgc-deep-purple-50 c-deep-purple-700 p-10 lh-0 tt-c badge-pill">Afwachting Betaling</span></td>
                                <td>Mei 19</td>
                                <td><span class="text-info">&euro;34</span></td>
                            </tr>
                            <tr>
                                <td class="fw-600"><a href="">#332545</a></td>
                                <td><span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill">Verzonden</span></td>
                                <td>Mei 20</td>
                                <td><span class="text-success">&euro;45</span></td>
                            </tr>
                            <tr>
                                <td class="fw-600"><a href="">#3324523</a></td>
                                <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Geannuleerd</span></td>
                                <td>Mei 21</td>
                                <td><span class="text-danger">&euro;65</span></td>
                            </tr>
                            <tr>
                                <td class="fw-600"><a href="">#332341</a></td>
                                <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Vertraging</span></td>
                                <td>Mei 22</td>
                                <td><span class="text-success">&euro;78</span></td>
                            </tr>
                            <tr>
                                <td class="fw-600"><a href="">#332764</a></td>
                                <td><span class="badge bgc-orange-50 c-orange-700 p-10 lh-0 tt-c badge-pill">Vertraging</span></td>
                                <td>Mei 23</td>
                                <td><span class="text-success">&euro;88</span></td>
                            </tr>
                            <tr>
                                <td class="fw-600"><a href="">#33284514</a></td>
                                <td><span class="badge bgc-yellow-50 c-yellow-700 p-10 lh-0 tt-c badge-pill">Afwachting Verzending</span></td>
                                <td>Mei 22</td>
                                <td><span class="text-success">&euro;56</span></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="ta-c bdT w-100 p-20"><a href="{{ url('admin/orders/') }}">Bekijk alle bestellingen</a></div>
    </div>
</div>