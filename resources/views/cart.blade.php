<!-- include header -->
@include('include.header')
<!-- page body -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products to be requested</span></p>
            <h1 class="mb-0 bread">My Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Product List</th>
						        <th>&nbsp;</th>
						    
						        <th>Quantity</th>
						       
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-1.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>English dictionary</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						  
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						      </tr><!-- END TR-->

						  
						    </tbody>
						    <tfoot>
						<tr class="visible-xs">
						</tr>
						<tr>

							

							<td><p><a href="#" class="btn btn-secondary" style="width: 145px;height: 41px;"><i class="fa fa-angle-left"></i>Need More </a></p></td>
							
							<td colspan="2" class="hidden-xs"></td>

							<td><p><a href="request" class="btn btn-primary" style="width: 145px;height: 41px;">Request <i class="fa fa-angle-right"></i></a></p></td>
						</tr>
					</tfoot>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>
@include('include.footer')
