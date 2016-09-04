<?php 
$body = "home";
$title = "Crystal Touch Dry Cleaning - Home";
$keywords = "";
$description = "";
  include("includes/header.php");
?>

<div class="rest">
<div class="slideshow">
<div class="carousel slide" id="featured">
 
 <ol class="carousel-indicators">
  <li data-target="#featured" data-slide-to="0" class="active"></li>
  <li data-target="#featured" data-slide-to="1" ></li>
  <li data-target="#featured" data-slide-to="2" ></li>
 </ol>

 
 <div class="carousel-inner">
  <div class="item active">
    <img class="slide-image img-responsive" src="images/slide1.png">
  </div>
  <div class="item">
  <img class="slide-image img-responsive" src="images/slide2.png">
 </div>
  <div class="item">
    <img class="slide-image img-responsive" src="images/slide3.png">
  </div>
 </div>
 
 <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
 <span class="glyphicon glyphicon-chevron-left"></span></a>
 
  <a class="right carousel-control" href="#featured" role="button" data-slide="next">
 <span class="glyphicon glyphicon-chevron-right"></span></a>
 </div>
</div>

<div class="thumnail-section  container col-xs-12">
<div class="row">
<div class="thumnail1 col-xs-3"><a href="services.php">
<img src="images/shirt.png" class="thumb-image" />
<h1 class="thumb-h">Household Laundry</h1>
<p class="thumb-p">Lorem ipsum dolor sit amet,
 adipiscing elit. Etiam pulv inar, mauris sit
 amet interdum feugiat, nibh eros elemen tum tur pis.</p>
</a></div>

<div class="thumnail1 col-xs-3"><a href="services.php">
<img src="images/washing-machine.png" class="thumb-image2" />
<h1 class="thumb-h">Commercial Laundry</h1>
<p class="thumb-p">Lorem ipsum dolor sit amet,
 adipiscing elit. Etiam pulv inar, mauris sit
 amet interdum feugiat, nibh eros elemen tum tur pis.</p>
</a></div>

<div class="thumnail1 col-xs-3"><a href="services.php">
<img src="images/person.png" class="thumb-image2" />
<h1 class="thumb-h">Friendly Customer Service</h1>
<p class="thumb-p">Lorem ipsum dolor sit amet,
 adipiscing elit. Etiam pulv inar, mauris sit
 amet interdum feugiat, nibh eros elemen tum tur pis.</p>
</a></div>

<div class="thumnail1 col-xs-3"><a href="services.php">
<img src="images/bus.png" class="thumb-image" />
<h1 class="thumb-h">Pick-Up & Delivery Service</h1>
<p class="thumb-p">Lorem ipsum dolor sit amet,
 adipiscing elit. Etiam pulv inar, mauris sit
 amet interdum feugiat, nibh eros elemen tum tur pis.</p>
</a></div>
</div>
</div>

<div class="second-section col-xs-12">
<div class="service-brief col-xs-3">
<h1>What We Offer</h1>
<ul>
<li><a href="services.php"><input type="submit" value="Dry Cleaning" /></a></li>
<li><a href="services.php"><input type="submit" value="Laundry" /></a></li>
<li><a href="services.php"><input type="submit" value="Bedding & Ballgowns" /></a></li>
<li><a href="services.php"><input type="submit" value="Shirt Service" /></a></li>
<li><a href="services.php"><input type="submit" value="Dry Cleaning" /></a></li>
<li><a href="services.php"><input type="submit" value="Repairs & Alterations" /></a></li>
<li><a href="services.php"><input type="submit" value="See More . . ." /></a></li>
</ul>
</div>

<div class="about-brief col-xs-6">
<h1>About Us</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar,
 mauris sit amet interdum feugiat, nibh eros elementum turpis, ut lobortis 
 lorem neque nec dui. Fusce convallis ipsum vitae nunc sodales pharetra. 
 Aliquam ac ipsum quam. Phasellus imperdiet, purus facilisis egestas porta,
 libero augue sagittis magna, in feugiat felis nibh sit amet leo. 
 Nulla semper erat eu dui posuere vestibulum.
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar . . . </p>
 <a href="about.php"><input type="submit" value="Read More  >>" /></a>
 
 
<div class="line-divider"></div>
 
</div>


<div class="testimony col-xs-3">
<h1>Testimonials</h1>

<div class="testimonial">
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar,
 mauris sit amet interdum feugiat, nibh eros elementum turpis, ut lobortis 
 lorem neque nec dui. Fusce convallis ipsum vitae nunc sodales pharetra.
</p>
<h1>Dennis Kayode</h1>
</div>

<div class="line2"></div>

<div class="testimonial">
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar,
 mauris sit amet interdum feugiat, nibh eros elementum turpis, ut lobortis 
 lorem neque nec dui. Fusce convallis ipsum vitae nunc sodales pharetra.
</p>
<h1>Mike Louis</h1>
</div>
</div>
</div>
</div>
<?php 
  include("includes/footer.php");
?>