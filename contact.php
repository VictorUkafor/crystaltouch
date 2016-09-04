<?php 
$body = "contact";
$title = "Get in Touch with us Today - Contact Us";
$keywords = "";
$description = "";
  include("includes/header.php");
?>

<div class="rest">
<div class="about-container ">
<h1 class="about-h">Get in Touch with Us Today!</h1>

<p class="contact-p">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar, mauris sit amet 
 interdum feugiat, nibh eros elementum turpis, ut lobortis lorem neque nec dui.
 Fusce convallis ipsum vitae nunc sodales pharetra.  Aliquam ac ipsum  quam. 
</p>

<div class="container">
<div class="row col-xs-12">

<form class="form-horizontal contact-form col-xs-8" method="post" action="includes/form_validation.php" novalidate>

<div class="form-group">
<label class="col-xs-2 control-label" id="name" for="name2">Name:<span class="ast">*</span></label>  
 <div class="col-xs-10"><input class="form-control" id="name2" type="text" name="name" placeholder="Your Full Name" <?php echo isset($fields['Name']) ? ' value=" ' . $fields['Name'] . ' " ' : ''?>/></div>
 </div>
 
 
<div class="form-group">
<label class="col-xs-2 control-label" id="email" for="email2">E-mail:<span class="ast">*</span></label>  
 <div class="col-xs-10"><input class="form-control" id="email2" type="email" name="email" placeholder="Your E-mail Address" <?php echo isset($fields['Email']) ? ' value=" ' . $fields['Email'] . ' " ' : ''?> /></div>
 </div> 
 
<div class="form-group">
<label class="col-xs-2 control-label" id="phone" for="phone2">Phone:<span class="ast">*</span></label>  
 <div class="col-xs-10"><input class="form-control" id="phone2" type="phone" name="phone" placeholder="Your Phone Number"  <?php echo isset($phone) ? ' value=" ' . $phone . ' " ' : ''?> /></div>
 </div> 
 
  <div class="form-group">
<label class="col-xs-2 control-label" id="address" for="address2">Address:</label>  
 <div class="col-xs-10"><input class="form-control" id="address2" type="text" name="address" placeholder="Your Contact Address"  <?php echo isset($subject) ? ' value=" ' . $subject . ' " ' : ''?> /></div>
 </div> 
 
 <div class="form-group">
<label class="col-xs-2 control-label" id="subject" for="subject2">Subject:</label>  
 <div class="col-xs-10"><input class="form-control" id="subject2" type="text" name="subject" placeholder="The Subject of your Message"  <?php echo isset($subject) ? ' value=" ' . $subject . ' " ' : ''?> /></div>
 </div> 
 
 <div class="form-group">
<label class="col-xs-2 control-label" id="message" for="message2">Message:<span class="ast">*</span></label> 
<div class="col-xs-10"><textarea name='message' class="form-control" id="message2"  placeholder="Enter your Message here . . ." ><?php echo isset($fields['Message']) ? $fields['Message'] : ''?></textarea></div>
 </div>

 <div class="form-group">
<div class="col-xs-10 col-xs-offset-2"> 
<input class="btn" id="send" type="submit" name="send" value="Send" />
</div>
</div>
 
 <p class="lastast"><span class="aster">*</span> &nbsp; means a required field</p>

 <div class="contact-line"></div>
 
</form>

<div class="side-contact col-xs-4">

<div class="contact-item">
<h1><img src="images/home.png" class="cont-img" />ADDRESS</h1>
<p>13 Folake Street, LASU-Isheri Road, Alimosho, Lagos. Nigeria.</p>
</div>

<div class="contact-item">
<h1><img src="images/telephone.png" class="cont-img" />PHONE</h1>
<p>+234 (0) 803XXX XXXX,
+234&nbsp;(0)&nbsp;803&nbsp;XXX&nbsp;XXXX.</p>
</div>

<div class="contact-item">
<h1><img src="images/email.png" class="cont-img" />E-MAIL</h1>
<p>info@crystaltouchdrycleaning.com,
contact@crystaltouchdrycleaning.com.
</p>
</div>

<div class="contact-item">
<h1><img src="images/social-media.png" class="cont-img" />SOCIAL MEDIA</h1>
<p><a href="www.facebook.com" target="_blank">www.facebook/crystaltouchdrycleaning</a>,
<a href="www.twitter.com" target="_blank">www.twitter.com/crystaltouchdrycleaning</a>,
<a href="www.linkedin.com" target="_blank">www.linkedin.com/crystaltouchdrycleaning</a>.
</p>
</div>

</div>

</div>
</div>

</div>

</div>



<?php 
  include("includes/footer.php");
?>