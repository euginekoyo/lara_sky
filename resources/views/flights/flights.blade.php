 @guest
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner vh-50">
    <div class="carousel-item active vh-30" style="height:50%; ">
      <img src="{{URL('/images/pic2.jpg')}}" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item" style="height:50%;  ">>
      <img src="{{URL('/images/pic3.jpg')}}" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div> 
    </div>
    <div class="carousel-item" style="height:50%; ">>
      <img src="{{URL('/images/pic5.jpg')}}" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption text-">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next " type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
  <button class="btn btn-primary shadow" type="button">
    <span class="">Book your ticket today</span>
  </button>
  <p>Take charge of your comfort and tryout skytracks airlines today.</p>
</div>
                      @endguest
                      @auth
<div class="container-fluid mt-3 mx-3">
  <h1>View offers</h1>
<div class="card-group mx-2 my-3">
  <div class="card mx-2 shadow" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">The Carribean</h4>
    <p class="card-text">fly,feel it.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2 shadow" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic1.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Visit Polland</h4>
    <p class="card-text">Its possible fly today.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic2.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title text-dark">Visit Africa</h4>
    <p class="card-text text-dark">Making dreams come true.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic5.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Shipments made easier</h4>
    <p class="card-text">Trade with ease.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>

 <div class="card-group mx-2 my-3">
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
  <div class="card mx-2" style="width:900px">
  <img class="card-img-top" src="{{URL('/images/pic6.jpg')}}" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
 </div>
 </div>
</div>

                      @endauth