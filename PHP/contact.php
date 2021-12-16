<?php
    print '
          <h1>Contact Form</h1>
          <div id="contact">
            <iframe src="https://maps.google.com/maps?q=zagreba%C4%8Dka%20ulica%20osijek&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            <form action="http://work2.eburza.hr/pwa/responzive-page/send-contact.php" id="contact_form" name="contact_form" method="POST">
              <label for="fname">First Name *</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name *</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="lname">Your E-mail *</label>
    <input type="email" id="email" name="email" placeholder="Your e-mail.." required>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="">Please select</option>
      <option value="BE">Belgium</option>
      <option value="HR" selected>Croatia</option>
      <option value="LU">Luxembourg</option>
      <option value="HU">Hungary</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>';
?>
