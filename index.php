<!DOCTYPE html>
<html>
<head>

  <title>Bullet Journal</title>
  <link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body>
	<header>
	  <div class="logo">
		<img src="iconlogo.png" alt="Bullet Journal Logo">
	  </div>
	  <nav>
		<ul>
		  <li><a href="home.html">Home</a></li>
		  <li><a href="#about">About</a></li>
		  <li><a href="#menu">Menu</a></li>
		  <li><a href="#reservations">Reservations</a></li>
		  <li><a href="#contact">Contact</a></li>
      <?php>
           if(isset($_COOKIE['email'])){
            $storedemail = $_COOKIE{['email']};
            setcookie('selectedTab', 'cart', time() + 3600, '/');
            echo '<li><a href = "profile">cart</a></li>';
            echo '<li><a href = "profile"><abbr title= " '. $storedemail . ' ">Profile<abbr></a></li>';
            echo '<li><a style = "color:red;" href="login/logout.php"><abbr title="' .$storedemail . '">logout</abbr></a></li>';
            
            }else {
             echo '<li><a href = "login">login</a></li>';
            }
		</ul>
	  </nav>
	</header>

<section class="hero">
  <div class="hero-content">

    <h1>Welcome to Bullet Journal</h1>
    <p>Experience the Taste of Perfection</p>
    <a href="#menu" class="btn">Explore Our BulletJournal-Spread</a>

  </div>
</section>

<section class="about dark-theme">
  <div class="about-content">
    <h2>About Bullet Journal</h2>
    <p>Bullet Journal: The Definitive Guide for beginners.</p>
    <p>Wondering what a Bullet Journal is? How do I even start? Continue reading this guide to get started in the best possible way!</p>
    <a href="#BulletJournal-Spread" class="btn">Top gorgeous  BulletJournal Spreads</a>
  </div>
  <div class="about-image">
    <img src="about-image.jpg" alt="About Image">
  </div>
</section>


<section class="BulletJournal-Spread">
  <h2>Our BulletJournal Spreads</h2>
  <div class="BulletJournal-Spread-items">
    <div class="Bulletournal-Spread-item">
      <img src="BulletJournal1.jpg" alt="BulletJournal 1">
      <h3>Classic Cheeseburger</h3>
      <p>A juicy beef patty topped with melted cheese, fresh lettuce, tomato, and our special sauce. Served with a side of crispy fries.</p>
    </div>
    <div class="BulletJournal-Spread-item">
      <img src="BulletJournal2.jpg" alt="BulletJournal 2">
      <h3>Veggie Delight</h3>
      <p>A delicious veggie patty made from a blend of fresh vegetables and spices. Topped with avocado, sprouts, and tangy mayo. Served with a side of sweet potato fries.</p>
    </div>
    <div class="BulletJournal-Spread-item">
      <img src="BulletJournal3.jpg" alt="BulletJOurnal 3">
      <h3>Spicy BBQ Burger</h3>
      <p>A fiery burger packed with flavor! Grilled chicken breast smothered in spicy BBQ sauce, topped with jalapenos, crispy onion rings, and chipotle mayo. Served with a side of coleslaw.</p>
    </div>
  </div>
</section>

<section class="reservations">
  <div class="reservation-form">
    <h2>Make a Reservation</h2>
    <form>
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <input type="tel" name="phone" placeholder="Phone Number" required>
      <input type="date" name="date" required>
      <input type="time" name="time" required>
      <textarea name="message" placeholder="Additional Message" rows="5"></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>
</section>


<section class="testimonials">
  <h2>What Our Customers Say</h2>
  <div class="testimonial">
    <img src="customer1.jpg" alt="Customer 1">
    <p>"The burgers at Berger Hut are simply amazing! The flavors are rich, and the ingredients are always fresh. It's my go-to place whenever I'm craving a delicious meal."</p>
    <h4>John Doe</h4>
  </div>
  <div class="testimonial">
    <img src="customer2.jpg" alt="Customer 2">
    <p>"Berger Hut never disappoints! The quality of their burgers and the friendly service make it a top-notch dining experience. I highly recommend it to all burger lovers!"</p>
    <h4>Jane Smith</h4>
  </div>
</section>


<section class="gallery">
  <h2>Gallery</h2>
  <div class="image-grid">
    <div class="image-item">
      <img src="gallery1.jpg" alt="Image 1">
    </div>
    <div class="image-item">
      <img src="gallery2.jpg" alt="Image 2">
    </div>
    <div class="image-item">
      <img src="gallery3.jpg" alt="Image 3">
    </div>
    <div class="image-item">
      <img src="gallery4.jpg" alt="Image 4">
    </div>
  </div>
</section>

<section class="contact">
  <div class="contact-container">
    <h2>Contact Us</h2>
    <div class="contact-info">
      <div class="info-item">
        <i class="fas fa-map-marker-alt"></i>
        <p>123 Main Street, City, Country</p>
      </div>
      <div class="info-item">
        <i class="fas fa-phone-alt"></i>
        <p>+1 234 567 890</p>
      </div>
      <div class="info-item">
        <i class="fas fa-envelope"></i>
        <p>info@BulletJournal.com</p>
      </div>
    </div>
    <form class="contact-form">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>
</section>




<footer class="footer">
  <div class="footer-content">
    <div class="footer-logo">
      <img src="iconlogo.png" alt="Logo">
    </div>
    <nav class="footer-links">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">BulletJournal-Spread</a>
      <a href="#">Reservations</a>
      <a href="#">Testimonials</a>
      <a href="#">Gallery</a>
      <a href="#">Contact</a>
    </nav>
    <div class="footer-social">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
  <p class="footer-text">&copy; 2023 Berger Hut. All rights reserved.</p>
</footer>


</body>


