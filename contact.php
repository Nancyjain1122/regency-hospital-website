<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    include 'header.php';
    ?>

    <div class="contact_bg">
        <h1 class="contact_head">Contact Us</h1>
        <hr class="hr-contact">
        <div class="contact-para">Delivering world-class healthcare services through our hospitals across all the specialties.
        <br>Get in touch for immediate assistance.</div>
    </div>

    <div class="contact-page">
        <div class="contact-info">
        <h6>Regency Hospital (Tower-1)</h6>
        <p><img src="image/location.png" alt="">A2, Sarvodaya Nagar, Kanpur</p>
        <p><img src="image/landline.png" alt="">Landline- <a href="">0512-3501111, 3501421</a> </p>
        <p><img src="image/phone.png" alt="">Mobile-<a href=""> 09670881188</a></p>
        <p class="paadding"><img src="image/email.png" alt="">Email- <a href="">info@regencyhealthcare.in</a></p>
        <h6>Regency Superspeciality Hospital</h6>
        <p><img src="image/location.png" alt="">Khurram Nagar Ring Road, Lucknow</p>
        <p><img src="image/landline.png" alt="">Landline- <a href="">0522-3503232</a> </p>
        <p><img src="image/phone.png" alt="">Mobile- <a href="">09335943232</a> </p>
        <p class="paadding"><img src="image/email.png" alt="">Email- <a href="">info@regencyhealthcare.in</a></p>
        <h6>Regency Hospital</h6>
        <p><img src="image/location.png" alt="">Medical College Road, Gorakhpur</p>
        <p><img src="image/phone.png" alt="">Mobile- <a href="">08090578811</a> </p>
        <p><img src="image/email.png" alt="">Email- <a href="">info@regencyhealthcare.in</a> </p>

        </div>

        <div class="contact-form">
      <h3>Enquiry Form</h3>
      <form id="enquiryForm" method="POST">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Name*" required pattern="[A-Za-z\s]+" title="Only letters and spaces allowed" />
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Email*" required />
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="Number*" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number" />
        <label for="enquiryType">Departments</label>
            <select id="enquiryType" name="enquiryType" required>
                <option value="">Select </option>
                <option value="Cardiology">Cardiology</option>
                <option value="Emergency">Emergency</option>
                <option value="Cosmetic Surgery">Cosmetic Surgery</option>
                <option value="Cardiac Surgery">Cardiac Surgery</option>
                <option value="Blood Bank">Blood Bank</option>
                <option value="Cancer">Cancer</option>
                <option value="Dental">Dental</option>
            </select>
        <label for="message">Message / Enquiry</label>
        <textarea id="message" name="message" placeholder="Message*" required></textarea>
        <button type="submit">Submit Enquiry</button>
        <div class="success" id="successMessage" style="display: none;">Thank you! Your enquiry has been submitted.</div>
      </form>
    </div>
   </div>

   <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d41590.152022040675!2d80.301227!3d26.479978!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c39862de0cc79%3A0x41465e2a16000e63!2sRegency%20Multi%20Super%20Speciality%20Hospital%20-%20Tower%201%2C%20Sarvodaya%20Nagar%2C%20Kanpur!5e1!3m2!1sen!2sus!4v1746517377937!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<script>
document.getElementById('enquiryForm').addEventListener('submit', function(e) {
    e.preventDefault(); 

    const form = e.target;
    const formData = new FormData(form);
    const submitBtn = form.querySelector('button[type="submit"]');
    const successMessage = document.getElementById('successMessage');

    submitBtn.disabled = true;
    submitBtn.textContent = 'Processing...';

    fetch('send_enquiry.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(responseText => {
        if (responseText.includes('success')) {
            successMessage.style.display = 'block';
            form.reset();

            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 2000);
        } else {
            alert('There was an error submitting the form.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Something went wrong. Please try again later.');
    })
    .finally(() => {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Submit Enquiry';
    });
});
</script>


<script>

document.getElementById("name").addEventListener("input", function(e) {
    this.value = this.value.replace(/[^A-Za-z\s]/g, '');
});

document.getElementById("phone").addEventListener("input", function () {
  this.value = this.value.replace(/\D/g, "").slice(0, 10);
});
</script>


<?php include 'footer.php';
?>

    
</body>
</html>