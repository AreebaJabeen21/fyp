@include('include.header')
<style type="text/css">
	.col-sm-6{
		padding:3%;
		background-color: white;
	}
</style>
<div class="container ">
	<div class="row">
		<div class="col"></div>
		<div class="col-sm-6">
			<h2 class="text-center pb-4">Product Donation</h2>
					<?php $result= DB::select('select * from type'); ?>

			{!! Form::open(['url' => 'submitdonate','method'=>'POST','files' => true, 'enctype' => 'multipart/form-data']) !!}

				<div class="form-group">

					{{Form::label('pro_category', 'Donate Product Category')}}
						<select class="form-control" id="Categorie" name="product_category">
							@foreach ($result as $category)
				
						<option value="{{$category->id}}">{{$category->productfor}}</option>
							@endforeach
						</select>	
				</div>


				<div class="form-group">
					
					{{Form::label('title', 'Title')}}
			        <input type="text" class="form-control" id="title" placeholder="What are you sharing"  name="title" required>
			
				</div>


				<div class="form-group">
				
					{{Form::label('description', 'Description')}}
					<textarea class="form-control" rows="5" id="desc" name="desc"></textarea>
				</div>



				<div class="form-group">
				
					{{Form::label('quantity', 'Quantity')}}
					<input type="number" class="form-control" id="quantity" min="0" max="30" step="1" value ="0"placeholder="What are you sharing" name="quantity" required>
				</div>

				<div class="form-group">
				
					{{Form::label('condition', 'Condition')}}
					<div class="form-check-inline"  >
					{{Form::label('new', 'New',['class'=>'form-check-label'])}}
					{{Form::radio('condition', 'New', true,['class'=>'form-check-input'])}}
					{{Form::label('Used', 'Used')}}
					{{Form::radio('condition', 'Used', true)}}
					{{Form::label('Unused', 'Unused')}}
					{{Form::radio('condition', 'unused', true)}}
					</div>
		
				</div>


				
				<div class="form-group">
				{{Form::label('image', 'Product Image',['class'=>'mt-3'])}}
				{!! Form::file('image',['class'=>'form-control']) !!}

				</div>
				<button type="submit" class="border rounded container mb-3 mt-3 text-white btn"style="background-color:#a4cc44; ">Donate</button>
			{!! Form::close() !!}
		</div>
		<div class="col">
			
		</div>
	</div>
</div>
@include('include.footer')
