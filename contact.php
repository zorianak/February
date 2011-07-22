
<? 
/*<br />
Template Name: Contactform</p>
<p>*/
?>

<?php get_header(); ?>

<!--now begins the fun part-->
<div class="contents">
<div id="contact-form">
        <div id="stylized" class="myform">    <div id="message"></div>
<form id="form" name="form" method="post" action="securemail.php">
<h4><span><span>Contact BeLink'd Web Design Today!</span></span></h4>
<p> Please fill out the form below in order to contact BeLinkd Design about any questions you might have.  Alternatively, you may call (702) 423-3759 and leave a message, or webmaster@belinkddesign.com.</p>

<label>Name
<span class="small">Your full name</span>
</label>
<input type="text" name="name" id="name" />

<label>Email
<span class="small">How may I respond?</span>
</label>
<input type="text" name="email" id="email" />

<label>Comments
<span class="small">Questions or comments?</span>
</label>

<textarea rows="6" name="comments" id="comments"></textarea>
<button type="button" id="submit_btn">Submit</button>
<div class="spacer">
</div>

</form></div>
</div>

    </div>

    
    </div>

</div>
</div>
<?php get_footer() ?>
