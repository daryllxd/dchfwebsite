<?php
// 
include 'public/headerFooter.php';
head("Careers");
?>


<div id="menu-wrapper">

    <div id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="doctors.php">Doctors</a></li>
            <li><a href="careers.php">Careers/OJT</a></li>                
            <li class="current_page_item"><a href="charity.php">Charity</a></li>                
            <li><a href="about.php">About</a></li>
        </ul>
    </div>
</div>
<?php echo '</div>' ?>

<h1>Charity</h1>

<div class="article">
    <p>In Christian theology charity, latin caritas, is by Thomas Aquinas understood as "the friendship of man for God", which "unites us to God". He holds it as "the most excellent of the virtues".</p>
    <div id='coin-slider'>
	<a href="services.php" target="_blank">
		<img src='public/images/charity1.jpg' >
		<span>
			We routinely offer free checkups and circumcision to our young ones.
		</span>
	</a>
	<a href="charity.php" target="_blank">
		<img src='public/images/charity2.jpg' >
		<span>
			We are accredited under PhilHealth license number 01-6454.
		</span>
	</a>
    <a href="doctors.php" target="_blank">
		<img src='public/images/charity3.jpg' >
		<span>
			Caring for everyone, young and old.
		</span>
	</a>
</div>


</div>





<?php
foot();
?>
