
<? 
/*<br />
Template Name: Fronttemp
*/
?>

<?php define('WP_USE_THEMES', false); get_header(); ?>
<!--now begins the fun part-->
<div class="contents">
<div class="grid_4 welcome">
<h1>Welcome</h1>
<h2>Get Yourself Designed</h2>
</div>

<div class="grid_8 frontpost">

    <?php include (TEMPLATEPATH . "/newsfeed.php"); ?>
</div>

<div style="clear:both;"></div>

<div class="outerrecent">
<img src="images/placer.gif" height="3" alt="recent website design work placer" />
	<div class="recentwork">
    
<h3>Recent Designs</h3>
 
 <div class="recentimage"><img src="http://belinkddesign.com/images/recentworkcybersmoothie.png" alt="image of the Cyber Smoothie Cafe" /></div>
 
 <div class="recentdescription">
<p> Are you in the greater Las Vegas area? Looking for a place for a great smoothie, some refreshing boba tea, or just need to surf the internet?
</p>
<p>Then <a href="http://cybersmoothiecafe.com">The Cyber Smoothie Cafe</a> is just for you!</p>

<p>The owner, Mr. Randy Parker, is a great person all around. Offering many services, from smoothies to great water, to health supplements, this store is everything you expect and more. Back before I started being a full-time freelance designer, I used to take my lunches at the Cyber Smoothie Cafe every day; my personal favorites are the India Smoothie, Arctic Chill, Honeydew Heaven (boba), the Coconut boba, and I love to request chocolate in my Coconut boba (it tastes great!)</p>
 </div>
    
    </div>

</div>
</div>
<?php get_footer();?>

