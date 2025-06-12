<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - Hospital</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f7f8;
    }

    .contact-page {
      display: flex;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 50px auto;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    .contact-info {
      flex: 1;
      background-color: #2E8B57;
      color: white;
      padding: 40px;
      min-width: 300px;
    }

    .contact-info h2 {
      margin-bottom: 30px;
      font-size: 28px;
    }

    .contact-info p {
      font-size: 16px;
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .contact-info p strong {
      display: inline-block;
      width: 100px;
    }

    .contact-form {
      flex: 2;
      padding: 40px;
      background-color: #ffffff;
      min-width: 300px;
    }

    .contact-form h3 {
      margin-bottom: 20px;
      color: #2E8B57;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-top: 10px;
      font-weight: bold;
    }

    input, textarea {
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    button {
      margin-top: 20px;
      padding: 12px;
      background-color: #2E8B57;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #246f47;
    }

    .success {
      color: green;
      margin-top: 15px;
    }

    @media (max-width: 768px) {
      .contact-page {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <div class="contact-page">
   
    <div class="contact-info">
      <h2>Contact Information</h2>
      <p><strong>Location:</strong><br>Healing Touch Hospital,<br>Near City Center, Delhi - 110001</p>
      <p><strong>Mobile:</strong><br>+91 9876543210</p>
      <p><strong>Email:</strong><br>info@healingtouchhospital.com</p>
    </div>

    <!-- RIGHT SIDE: ENQUIRY FORM -->
    <div class="contact-form">
      <h3>Send Us Your Enquiry</h3>
      <form id="enquiryForm">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required />

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required />

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required />

        <label for="message">Message / Enquiry</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Submit Enquiry</button>
        <div class="success" id="successMessage" style="display: none;">Thank you! Your enquiry has been submitted.</div>
      </form>
    </div>
  </div>

  <script>
    document.getElementById('enquiryForm').addEventListener('submit', function(e) {
      e.preventDefault();
      document.getElementById('successMessage').style.display = 'block';
      this.reset();
    });
  </script>

</body>
</html>
