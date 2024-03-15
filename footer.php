<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="css/bootstrap.css" rel="Stylesheet" >
<style>
 #backToTopBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #000;
  color: #fff;
  border: none;
  border-radius: 20px;
  padding: 10px;
  cursor: pointer;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); 
}


</style>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Jquery.min.js"></script>
<script>
  function backToTop() {
  $('html, body').animate({scrollTop: 0}, 'slow');
}

// Show/hide the "Back to Top" button based on scroll position
$(window).scroll(function() {
  var btn = $('#backToTopBtn');

  if ($(this).scrollTop() > 20) {
    btn.fadeIn();
  } else {
    btn.fadeOut();
  }
});
</script>
</head>
<body>
<div class="container-fluid mt-0">
<div class="row">

  <footer class="text-center text-lg-start text-white " style="background-color: #1c2331">

    <section class="d-flex justify-content-between p-4" style="background-color:darkblue">
     
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>

      <div>
        <a href="" class="text-white me-4" style="text-decoration: none;">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4" style="text-decoration: none;">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4" style="text-decoration: none;">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4" style="text-decoration: none;">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4" style="text-decoration: none;">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4" style="text-decoration: none;">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </section>


    <section class="">
      <div class="container-fluid text-center text-md-start mt-5">

        <div class="row mt-3">
        
          <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
        
            <h6 class="text-uppercase fw-bold">M-Tech Zone</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
            Explore M-Tech Zone: Your One-Stop Shop for Premium Computer Parts!
            </p>
            <p>
            Join M-Tech Zone: Elevate Your Tech Journey with Exceptional Opportunities!
            </p>
          </div>
      
          <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4 align-content-start">
    
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white" style="text-decoration: none;">Home</a>
            </p>
            <p>
              <a href="#!" class="text-white" style="text-decoration: none;">contact Us</a>
            </p>
            <p>
              <a href="#!" class="text-white" style="text-decoration: none;">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-white" style="text-decoration: none;">Category</a>
            </p>
          </div>
     


          <div class="col-md-2 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4 align-content-end">
         
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class=" mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home me-3"></i>No.31, Main Street, Ratnapura.</p>
            <p><i class="fas fa-envelope me-3"></i>mtechzone@gmail.com</p>
            <p><i class="fas fa-phone me-3"></i> +45 123 65 80</p>
            <p><i class="fas fa-print me-3"></i> +45 123 65 88</p>
          </div>
       
        </div>
 
      </div>
    </section>



    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2024 Copyright:
      <a class="text-white" href=""
         >M-Tech Zone</a
        >
    </div>

  </footer>


</div>

  <button onclick="backToTop()" id="backToTopBtn" class="btn btn-primary" title="Go to top">&#9650; Top</button>
</div>

  
  

</body>
</html>

