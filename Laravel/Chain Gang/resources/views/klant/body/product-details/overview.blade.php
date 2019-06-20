<div class="product-body">
    <div class="product-label">
        <span>New</span>
        @if($product_in_sale != null)
            <span class="sale">-{{$product_in_sale->sale}}%</span>
        @endif
    </div>
    <h2 class="product-name">{{$product->product_name}}</h2>    
        @if($new_price != null)
        <h3 class="product-price">&euro;{{$new_price}}</h3>
        <h3><del class="product-old-price">{{$product->price}}</del></h3>
        @else
        <h3 class="product-price">&euro;{{$product->price}}</h3>
        @endif
    <div>
        <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o empty"></i>
        </div>
        <a href="#">{{$reviews_amount}} Review(s) / Add Review</a>
    </div>
    <p><strong>Brand:</strong>{{$product->brand->title}}</p>
    <p>{{$product->description}}</p>
<div class="product-options">
            
    <div class="product-btns">
        <div class="qty-input">
            <span class="text-uppercase">AANTAL: </span>
            <input class="input" type="number" value="1">
        </div>
        <button onclick="addItemToCart(this.getAttribute('data-id'));" class="primary-btn add-to-cart" data-id="{{$product->id}}"><i class="fa fa-shopping-cart"></i> Toevoegen</button>
        <div class="pull-right">
            
        </div>
    </div>
</div>
<script>
		function addItemToCart(product_id) {
			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		
			var form_data = new FormData();
			form_data.append('_method', 'POST');
			form_data.append('_token', CSRF_TOKEN);
		
			event.preventDefault();
		
			$.ajax({
				url: '/product/add/cart/' + product_id,
				dataType: 'json',
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				type: 'post',
				success: function(data) {
					console.log(data.cart_session);
				}
			});
		}
		</script>
		

