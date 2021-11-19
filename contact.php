<?php 
    include('configs/item.config.php');
    include('include/header.php');
?>
    
    <div class="contact-container">
        <div class="contact-inner">
            <h1>Send us a message</h1>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
            <form action="include/sendmail.php" method="POST">
                <div class="contacts-inputs">
                    <input type="text" name="fullName" id="fullName" placeholder="Your Name">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <input type="text" name="subject" id="subject" placeholder="Subject">
                </div>
                <textarea name="message" id="message" placeholder="Enter your Message."></textarea>
                <input type="submit" name="contactSubmit" value="Submit">
            </form>
        </div>
    </div>



    <?php include('include/footer.php'); ?>