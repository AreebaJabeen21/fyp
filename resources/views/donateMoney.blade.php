@include('include.header')
   <div class="hero-wrap hero-bread" style="background-image: url('images/donate-back.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">

            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Donate</span></p>
            <h1 class="mb-0 bread">Download the app</h1>
              <!--   <p class="mt-4 " data-toggle="modal" data-target="#video"><a href="#" class="btn btn-primary" style="width: 145px;height: 41px;"><i class="fa fa-play"></i> How it Works </a></p> -->

          </div>
        </div>
      </div>
    </div>

	
{{-- 
<div class="container">
  <h2 class="mt-4 mb-4 ">Donate Money</h2>
  <div class="row">
    <div class="col-sm-6">
      <form>
        <div class="form-group">
          <label for="sel1">Donation Type:</label>
          <select class="form-control mb-3" id="sel1">
            <option value="">Select Option</option>
            <option value="1">Bank</option>
            <option value="1">Easy Paisa</option>
            <option value="1">Jazz Cash</option>
          </select>
          <label for="sel1">Donation For:</label>
          <select class="form-control mb-3" id="sel1">
            <option value="">Select Option</option>
            <option value="Donation">Donation</option>
            <option value="Marriage">Marriage</option>
            <option value="Zakaat">Zakaat</option>
            <option value="Food">Food</option>
            <option value="Education">Education</option>
            <option value="Water Well">Water Well</option>
            <option value="Monthly Rashan">Monthly Rashan</option>
            <option value="Thar">Thar Fund</option>
            <option value="Flood">Flood Victim</option>
            <option value="Fitra">Fitra(overseas)</option>
            <option value="Pani">Saff Pani</option>
            <option value="Heat Stroke">Heat Stroke</option>
            <option value="Syrian Crisis">Syrian Crisis</option>
            <option value="Masjid Construction">Masjid Constructions</option>
            <option value="Medical Project">Medical Project</option>
          </select>
           <label for="uname">Amount</label>
          <input type="text" class="form-control mb-3" id="amount" placeholder="Enter Amount" name="amount" required>
          <label for="Quantity">Quantity</label>
          <input type="number" class="form-control" id="quantity" min="0" max="30" step="1" value ="0" name="amount" required>
          <label for="uname">Name</label>
          <input type="text" class="form-control mb-3" id="uname" placeholder="Enter username" name="uname" required>
          <label for="uname">Email</label>
          <input type="text" class="form-control mb-3" id="uname" placeholder="Enter email" name="uname" required>
          <label for="uname">Mobile</label>
          <input type="text" class="form-control mb-3" id="uname" placeholder="Enter mobile number" name="uname" required>
          <a href = "#" class="border rounded container mb-3 mt-3 text-white btn"style="background-color:#a4cc44; width:25%;">Donate</a>
        </div>
      </form>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-md-5 mt-3">
      <div class="d-flex">
        <div class = "container border border-success mb-2 mt-3 rounded" style = "width:70%;">
        <a href="#" class="img-prod"><img class="img-fluid container mt-3 mb-4" style = "height:80px;" src="images/easy-paisa.png"alt="Colorlib Template"></div>
        <div class = "container border border-success mb-2 mt-3 ml-3 rounded" style = "width:70%;">
        <a href="#" class="img-prod"><img class="img-fluid container mt-3 mb-4" style = "height:80px;" src="images/JazzCash.png"alt="Colorlib Template"></div>
      </div>
    </div>
  </div>
</div>
 --}}


<div class="container py-5">

  <!-- For demo purpose -->
  <div class="row mb-4">
    <div class="col-lg-8 mx-auto text-center">
      <h1 class="display-4">Donate Money</h1>
     {{--  <p class="lead mb-0">Easily build a well-structured credit card form using Bootstrap 4</p>
      <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets">Bootstrapious</a></p>
   --}}  </div>
  </div>
  <!-- End -->

{{-- 
@if(count($errors)>0)
<ul>
  @foreach($errors->all() as $errors)
   <li>{{$errors}}</li>
   @endforeach
</ul>
@endif
@if(\session::has('success'))
<p>{{ \session::get('success') }}</p>
@endif
 --}}





  <div class="row">
    <div class="col-lg-7 mx-auto">
      <div class="bg-white rounded-lg shadow-sm p-5">
{{-- {{ Form::open(array('url' => 'Donation')) }}
 --}}


<form action="submit" method="POST">
  @csrf
      <p class="alert alert-success">Some text success or error</p>

{{Form::label('donationfor', 'Donation For')}}
<select class="form-control mb-3" name="donation_for" >
  <option value="Education">Education</option>
  <option value="">Select Option</option>
  <option value="Donation">Donation</option>
  <option value="Marriage">Marriage</option>
  <option value="Zakaat">Zakaat</option>
  <option value="Food">Food</option>
  <option value="Water Well">Water Well</option>
  <option value="Monthly Rashan">Monthly Rashan</option>
  <option value="Thar">Thar Fund</option>
  <option value="Flood">Flood Victim</option>
  <option value="Fitra">Fitra(overseas)</option>
  <option value="Pani">Saff Pani</option>
  <option value="Heat Stroke">Heat Stroke</option>
  <option value="Syrian Crisis">Syrian Crisis</option>
  <option value="Masjid Construction">Masjid Constructions</option>
  <option value="Medical Project">Medical Project</option>
</select>
{{Form::label('amount', 'Amount')}}
<input type="text" name="donation_amount"class="form-control mb-3" id="amount" placeholder="Enter Amount" required>


<!-- Credit card form tabs -->
<ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3 mt-3">
  <li class="nav-item">
    <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
      <i class="fa fa-credit-card"></i>
      <span name="credit Card" va></span>
      Credit Card
    </a>
  </li>
  <li class="nav-item">
    <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
      <i class="fa fa-paypal"></i>
      Paypal
    </a>
  </li>
  <li class="nav-item">
    <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
      <i class="fa fa-university"></i>
      Bank Transfer
    </a>
  </li>
</ul>
<!-- End -->
<!-- Credit card form content -->
<div class="tab-content">
  <!-- credit card info-->
  <div id="nav-tab-card" class="tab-pane fade show active">
    <div class="form-group">
      {{Form::label('card_name', 'Full name (on the card)')}}
      <input type="text" name="card_name" placeholder="Enter name" required class="form-control" id="card-holder-name">
    </div>
    <div class="form-group">
      {{Form::label('cardno', 'Card Number')}}
      <div class="input-group">
        <input type="text" name="card_number" placeholder="Your card number" class="form-control" required id="card-number">
        <div class="input-group-append">
          <span class="input-group-text text-muted">
            <i class="fa fa-cc-visa mx-1"></i>
            <i class="fa fa-cc-amex mx-1"></i>
            <i class="fa fa-cc-mastercard mx-1"></i>
          </span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-8">
        <div class="form-group">
          {{Form::label('exp', 'Expiration')}}
          <div class="input-group">
            <input type="month" name="expire_year" placeholder="MM" name="" class="form-control" required>
            {{--                       <input type="number" name="expire_year" placeholder="YY" name="" class="form-control" required>
          --}}                    </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group mb-4">
          <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
            <i class="fa fa-question-circle"></i>
          </label>
          <input type="text" required  name="cvv" class="form-control">
        </div>
      </div>
    </div>

    
    {{--    <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm  </button>
    {!!form::close()!!} --}}
    
  </div>
  <!-- End -->
  <!-- Paypal info -->
  <div id="nav-tab-paypal" class="tab-pane fade">
    <p>Paypal is easiest way to pay online</p>
    <p>
      <button type="button" class="btn btn-primary rounded-pill"><i class="fa fa-paypal mr-2"></i> Log into my Paypal</button>
    </p>
    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>
  <!-- End -->
  <!-- bank transfer info -->
  <div id="nav-tab-bank" class="tab-pane fade">
    <h6>Bank account details</h6>
    <dl>
      <dt>Bank</dt>
      <dd> THE WORLD BANK</dd>
    </dl>
    <dl>
      <dt>Account number</dt>
      <dd>7775877975</dd>
    </dl>
    <dl>
      <dt>IBAN</dt>
      <dd>CZ7775877975656</dd>
    </dl>
    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>
  <!-- End -->
</div>
<!-- End -->
<button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Donate  </button>
{{ Form::close() }}
</div>
</div>
</div>
</div>
@include('include.footer')

