<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book a Test | Regency Healthcare</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
  <script src="https://kit.fontawesome.com/YOUR-FONT-AWESOME-KIT.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background-color: #f8f9fa;
    }

    .about-container {
      text-align: center;
      padding: 30px 20px;
      background-color: #fff;
    }

    .about-container h4 {
      font-size: 24px;
      margin-bottom: 10px;
      color: #007b8e;
    }

    .about-container p {
      font-size: 16px;
    }

    .book-form-container {
      max-width: 600px;
      margin: 30px auto;
      background-color: #ffffff;
      padding: 30px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .book-form .form-group {
      margin-bottom: 20px;
    }

    .book-form label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
    }

    .book-form input[type="text"],
    .book-form input[type="email"],
    .book-form input[type="tel"],
    .book-form input[type="date"],
    .book-form select,
    .book-form textarea {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 15px;
    }

    .book-form textarea {
      resize: vertical;
    }

    .bbttn {
      background-color: #007b8e;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    .bbttn:hover {
      background-color: #005f6b;
    }

    a {
      color: #007b8e;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .book-form-container {
        margin: 20px;
        padding: 20px;
      }

      .about-container h4 {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

  <div class="about-container">
    <h4>Fill the Form Below</h4>
    <p>Please complete the details below and our team will get in touch with you shortly to confirm your appointment.</p>
  </div>

  <div class="book-form-container">
    <form action="submit-test-booking.php" method="POST" class="book-form">
      <div class="form-group">
        <label for="fullname">Full Name *</label>
        <input type="text" name="fullname" id="fullname" required placeholder="Enter your full name">
      </div>

      <div class="form-group">
        <label for="phone">Phone Number *</label>
        <input type="tel" name="phone" id="phone" required placeholder="e.g., 9876543210">
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" placeholder="Optional">
      </div>

      <div class="form-group">
        <label for="testname">Test Name / Package *</label>
        <select name="testname" id="testname" required>
          <option value="">-- Select a Test / Package --</option>
          <optgroup label="Common Blood Tests">
            <option value="CBC (Complete Blood Count)">CBC (Complete Blood Count)</option>
            <option value="ESR (Erythrocyte Sedimentation Rate)">ESR (Erythrocyte Sedimentation Rate)</option>
            <option value="Blood Sugar (Fasting/PP)">Blood Sugar (Fasting/PP)</option>
            <option value="Lipid Profile">Lipid Profile</option>
            <option value="Liver Function Test (LFT)">Liver Function Test (LFT)</option>
            <option value="Kidney Function Test (KFT)">Kidney Function Test (KFT)</option>
            <option value="Thyroid Profile (T3, T4, TSH)">Thyroid Profile (T3, T4, TSH)</option>
          </optgroup>
          <optgroup label="Urine and Stool Tests">
            <option value="Urine Routine & Microscopy">Urine Routine & Microscopy</option>
            <option value="Stool Routine & Occult Blood">Stool Routine & Occult Blood</option>
          </optgroup>
          <optgroup label="Serology & Infection">
            <option value="HIV Test">HIV Test</option>
            <option value="Hepatitis B (HBsAg)">Hepatitis B (HBsAg)</option>
            <option value="Hepatitis C (Anti-HCV)">Hepatitis C (Anti-HCV)</option>
            <option value="Widal Test">Widal Test</option>
            <option value="Dengue NS1/IgG/IgM">Dengue NS1/IgG/IgM</option>
            <option value="COVID-19 RT-PCR">COVID-19 RT-PCR</option>
          </optgroup>
          <optgroup label="Hormonal & Immunological">
            <option value="Vitamin D, B12">Vitamin D, B12</option>
            <option value="FSH, LH, Prolactin">FSH, LH, Prolactin</option>
            <option value="Testosterone">Testosterone</option>
            <option value="Insulin (Fasting/PP)">Insulin (Fasting/PP)</option>
          </optgroup>
          <optgroup label="Health Packages">
            <option value="Basic Health Check-up">Basic Health Check-up</option>
            <option value="Executive Health Package">Executive Health Package</option>
            <option value="Pre-Employment Screening">Pre-Employment Screening</option>
            <option value="Diabetes Care Package">Diabetes Care Package</option>
            <option value="Heart Risk Profile">Heart Risk Profile</option>
          </optgroup>
          <optgroup label="Others">
            <option value="Other (Specify in Notes)">Other (Specify in Notes)</option>
          </optgroup>
        </select>
      </div>

      <div class="form-group">
        <label for="date">Preferred Date *</label>
        <input type="date" name="date" id="date" required>
      </div>

      <div class="form-group">
        <label for="time">Preferred Time Slot</label>
        <select name="time" id="time">
          <option value="Morning (8am - 12pm)">Morning (8am - 12pm)</option>
          <option value="Afternoon (12pm - 4pm)">Afternoon (12pm - 4pm)</option>
          <option value="Evening (4pm - 8pm)">Evening (4pm - 8pm)</option>
        </select>
      </div>

      <div class="form-group">
        <label for="address">Home Collection Address</label>
        <textarea name="address" id="address" rows="3" placeholder="If you prefer home collection, enter your full address here."></textarea>
      </div>

      <div class="form-group">
        <label for="notes">Additional Notes</label>
        <textarea name="notes" id="notes" rows="3" placeholder="Any symptoms, prior reports, or doctor referrals?"></textarea>
      </div>

      <button type="submit" class="bbttn">Submit Request</button>
    </form>
  </div>

  <div class="about-container">
    <p><strong>Need help?</strong> Call us at <a href="tel:+91XXXXXXXXXX">+91-XXXXXXXXXX</a> or email us at <a href="mailto:lab@regencyhealth.in">lab@regencyhealth.in</a></p>
  </div>

  <?php include 'footer.php'; ?>

</body>
</html>
