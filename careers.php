<?php
include 'public/headerFooter.php';
head("Careers");
?>


<div id="menu-wrapper">

    <div id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="doctors.php">Doctors</a></li>
            <li class="current_page_item"><a href="careers.php">Careers/OJT</a></li>                
            <li><a href="charity.php">Charity</a></li>                
            <li><a href="about.php">About</a></li>
        </ul>
    </div>
</div>
<?php echo '</div>' ?>

<h1>We are hiring!</h1>
<div class="article">
    <div class="twothirds">
        <p>Send your resumes to <a href="mailto:careers@dchf.com.ph">careers@dchf.com.ph</a>
        <p>Or contact us at +(63)921-391-0910</p>
        <ul>
            <li><h1>Nurse - Qualifications</h1>
                <p>Must have graduated from a B.S. Nursing program.</p>
                <p>Finishing with honors is a plus.</p>
                <p>Having work experience is a plus.</p>                                                            
            </li>
            <li><h1>Internship (OJT) - Qualifications</h1>
                <p>Must be enrolled in a B.S. Nursing program.</p>
                <p>Has a good attitude.</p>
                <p>With payment and living allowance.</p>    
            </li>
        </ul>
    </div>
    <div class="onethirds">      
        <div class="contactForm">
        <h2>Contact us!</h2>
        <form method="post">
            <label for="fullName">Full Name (required) </label>
            <input type="text" id="fullName" placeholder="Your full name" autofocus/> 
            <label for="email">Email (required) </label>
            <input type="text" id="email" placeholder="Your Email address"/> 
            <label for="contactNumber">Contact Number </label>
            <input type="text" id="contactNumber" placeholder="Your contact number"/> 
            <label for="comments">Comment </label>
            <textarea cols="1" rows="1" id="comments" placeholder="Your comment"></textarea>
            <input type="button" id="submit" value="Contact us!"/>


        </form>
        
        </div>

    </div>

</div>





<?php
foot();
?>
