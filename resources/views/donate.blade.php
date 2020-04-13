<!-- include header -->
@include('include.header')
<!-- 
<div id="myCarousel" class="carousel slide">

Indicators 
  <ol class="carousel-indicators">
    <li class="item1 active"></li>
    <li class="item2"></li>
    <li class="item3"></li>
  </ol>
  

  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner_2.jpg"  alt="Los Angeles" >
      <div class="carousel-caption" style="padding-bottom: 100px;">
        <h1 class="text-white display-4 font-weight-bold">The measure of life is not its<br>duration, but it's donation.</h1>
                <p><a href="#" class="btn btn-primary" style="width: 145px;height: 41px;">Start Giving</a></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/banner_2.jpg"  alt="Chicago" width="100%" height="500">
      <div class="carousel-caption" style="padding-bottom: 150px;">
        <h1 class="text-white display-4 font-weight-bold">GIVE A HELPING HAND</h1>
                <p><a href="#" class="btn btn-primary" style="width: 145px;height: 41px;">Start Giving</a></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/banner_2.jpg" alt="New York" width="100%" height="500">
      <div class="carousel-caption" style="padding-bottom: 150px;">
        <h1 class="text-white display-4 font-weight-bold">HELP TURN TEARS TO SMILES</h1>
                <p><a href="#" class="btn btn-primary" style="width: 145px;height: 41px;">Start Giving</a></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
-</div> 
-->
   <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">

            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Donate</span></p>
            <h1 class="mb-0 bread">HELP TURN TEARS TO SMILES</h1>
                <p class="mt-4 " data-toggle="modal" data-target="#video"><a href="#" class="btn btn-primary" style="width: 145px;height: 41px;"><i class="fa fa-play"></i> How it Works </a></p>

          </div>
        </div>
      </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
      
         <video style="width:100%" controls>
            <source src="images/fypvedio.mp4" type="video/mp4" class="container">
            </video>



      </div>
   
    </div>
  </div>
</div>



<<!--Donations-->





@include('include.donateCat')














      <!--Vedio-->
    <!--   <div style = "background-color:#e6ee9c;width:100%;height:500px;">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-md-8  mt-3 mb-4">
          <h1 class="text-center text-dark" style="font-size: 40px;">Development Goal</h1>
          <video style="width:1000px;height: 350px;" controls class="mt-4 ml-5">
           <source src="images/fypvedio.mp4" type="video/mp4" class="container">
            </video></div>
            <div class="col-sm-2"></div>    
          </div>
      </div> -->
      <!--Another blog-->
 <!--      <div class="container mt-5"> 
    <div class="services-main">
       <div class="col-md-6 services-left">
           <div style="padding-top: 100px;">
           <h1>GIVE2SHARE APPLICATIOIN</h1><br><br>
           <p> To download Give2Share Application you can easily donate new, old and used items or goods such as clothing, electronic appliances, furniture, food, or computer accessories, etc. by posting/uploading the items.</p><br>
           <p> To use this appliacation can easily Donate Online, Donate via Bank, Donate via Easypaisa, Donate via JazzCash and Donate by “You call we collect” to collect your donations from your location.</p>
           </div>
         <div class="clearfix"> </div>
       </div>
       <div class="col-md-2"></div>
       <div class="col-md-4 services-right mt-4">
         <img src="images/mobileapp.png">
       </div>
       <div class="clearfix"> </div>
    </div>
  </div>
 -->
 <div class="container">  
  <div class="row"> 

    <div class="col-sm-6 mt-5">
      <h2 class="mt-5">Happier, healthier & more connected</h2>    
        <p class="mt-3">The secret to living is giving. When we serve others, we think outside ourselves, feel more connected and yes, even happier and healthier</p>
         <p class="mt-3"> To download Give2Share Application you can easily donate new, old and used items or goods such as clothing, electronic appliances, furniture, food, or computer accessories, etc. by posting/uploading the items.</p>       
           <p class="mt-3"> To use this appliacation can easily Donate Online, Donate via Bank, Donate via Easypaisa, Donate via JazzCash and Donate by “You call we collect” to collect your donations from your location.</p>   
          
    </div>

    <div class="col-sm-6 d-flex justify-content-center mt-3">
   
      <img src="images/donate-app.png"  >
    </div>

  </div>
</div>



@include('include.footer')