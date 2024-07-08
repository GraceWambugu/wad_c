


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


<?include_once("template/navigation.php");?>

</head>
<body>
 
    <nav class="navbar">
        <ul>
            
        <h1 class="logo">Bloom<span>Berg</span>  </h1>
          <li><a href="Sign in.php">Sign in </a></li>
        <li><a href="signup.php">signup </a></li>
        <li><a href="product.php">products</a></li>
        <li><a href="Contact_us .php">Contacts</a></li>
        <li><a href="about_us.php">About us </a></li>
          <li><a href="index.php">Home</a></li>
</ul>
<main>

<p>
        Nestled in the scenic landscapes of Nyandarua, Bloom Berg Goat Dairy Farm was established in 1960. 
        With a rich heritage spanning over six decades, the farm is renowned for its high-quality goat milk products. 
        Committed to sustainable farming practices and animal welfare, Bloom Berg continues to be a pillar of excellence 
        in the dairy industry, providing nutritious and delicious dairy products to its community and beyond.
    </p>
    
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/bighorngoats.jpeg" style="width:100%">
    <div class="text">Bloomberg farm</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/kid drinking  milk.png" style="width:100%">
    <div class="text">    Growing strong healthy 'kids' is what wwe do </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/two goats.jpeg" style="width:100%">
    <div class="text">Wlk with us on every journey</div>
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
        
        
     p>
    </main>
   
      <?php include 'footer.php'; ?>

</body>
</html>


