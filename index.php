<?php
// 
include 'public/headerFooter.php';
head("De Castro Hospital Foundation");
?>

    <div id="menu-wrapper">

    <div id="menu">
        <ul>
            <li class="current_page_item"><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="doctors.php">Doctors</a></li>
            <li><a href="careers.php">Careers/OJT</a></li>                
            <li><a href="charity.php">Charity</a></li>                
            <li><a href="about.php">About</a></li>
        </ul>
    </div>
</div>
<?php echo '</div>' ?>

<div id='coin-slider'>
	<a href="services.php" target="_blank">
		<img src='public/images/main1.jpg' >
		<span>
			The De Castro Hospital Foundation is the only hospital in the town of Milagros, Masbate.
		</span>
	</a>
	<a href="charity.php" target="_blank">
		<img src='public/images/main2.jpg' >
		<span>
			Charity is at the forefront of our services.
		</span>
	</a>
    <a href="doctors.php" target="_blank">
		<img src='public/images/main3.jpg' >
		<span>
			Our doctors are our best asset. Come work with us!
		</span>
	</a>
</div>



<div class="boxes">
    <div class="threecols">
        <a href="services.php">
        <h1>Services</h1>
        <img src="public/images/services.jpg"/>
        <p>Our services are top-notch.</p>
        </a>
    </div>
    <div class="threecols">
        <a href="doctors.php">
        <h1>Doctors</h1>
        <img src="public/images/doctors.jpg"/>
        <p>We have the most talented doctors this side of the Pacific.</p>
        </a>
    </div>
    <div class="threecols">
        <a href="careers.php">
        <h1>Careers/OJT</h1>
        <img src="public/images/careers.jpg"/>
        <p>Molding the future doctors and nurses of our country.</p>
        </a>
    </div>

</div>










<?php
foot();
?>
