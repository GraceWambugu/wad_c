


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Bloomberg Goat Farm</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel = "stylesheet" href="css/structuresStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Bloomberg Goat farm</title>
<h1 class="logo">Bloom<span>Berg</span>  </h1>

<?include_once("template/navigation.php");?>

</head>
<body>
 
    <nav class="navbar">
        <ul>
          
        <li><a href="Sign in.php">Sign in </a></li>
        <li><a href="signup.php">signup </a></li>
        <li><a href="product.php">products</a></li>
        <li><a href="Contact us .php">Contacts</a></li>
        <li>
            <a href="about us.php">About us <i class = "fas fa-caret-down"></i> </a>
        
        <div class = "dropdown__menu">
<ul>
</ul>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/farm.jpeg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/happykids.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/custard.webp" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>

</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 

</script>
        </div>
        
        
        </li>

        <li><a href="index.php">Home</a></li>
        </ul>

    
  
</nav>


    </div>

    <main>
        
        
        <h3>This is the home page</h3>
        <p>   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, error sequi consequuntur id modi ipsam debitis quis optio voluptatum laboriosam quidem ab deserunt. Suscipit quas, libero asperiores corporis laboriosam esse?</p>
    </main>
   
      <?php include 'footer.php'; ?>

</body>
</html>


