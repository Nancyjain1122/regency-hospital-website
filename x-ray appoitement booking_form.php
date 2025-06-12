<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-Ray Appointment Booking Form</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="form-section">
    <h4>Book Your X-Ray Appointment</h4>
    <p>Please fill out the form below to schedule your X-ray. Our team will get back to you with confirmation.</p>

    <form id="bookingForm" method="POST" class="xray-form">
        <div class="form-group">
            <label for="name">Full Name <span>*</span></label>
            <input type="text" id="name" name="name" required placeholder="Enter your full name">
        </div>

        <div class="form-group">
            <label for="age">Age <span>*</span></label>
            <input type="number" id="age" name="age" required min="1" max="120" placeholder="Your age">
        </div>

        <div class="form-group">
            <label for="contact">Contact Number <span>*</span></label>
            <input type="tel" id="contact" name="contact" required placeholder="Phone number">
        </div>

        <div class="form-group">
            <label for="email">Email Address (optional)</label>
            <input type="email" id="email" name="email" placeholder="example@domain.com">
        </div>

        <div class="form-group">
            <label for="xray_type">Type of X-Ray <span>*</span></label>
            <select id="xray_type" name="xray_type" required>
                <option value="">-- Select --</option>
                <option value="Chest X-Ray">Chest X-Ray</option>
                <option value="Abdominal X-Ray">Abdominal X-Ray</option>
                <option value="Spine X-Ray">Spine X-Ray</option>
                <option value="Orthopedic X-Ray">Orthopedic X-Ray</option>
                <option value="Skull X-Ray">Skull X-Ray</option>
                <option value="Contrast X-Ray">Contrast X-Ray</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="preferred_date">Preferred Appointment Date <span>*</span></label>
            <input type="date" id="preferred_date" name="preferred_date" required>
        </div>

        <div class="form-group">
            <label for="notes">Additional Notes</label>
            <textarea id="notes" name="notes" rows="4" placeholder="Any special concerns or instructions"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="submit-btn">Submit Booking</button>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>

<script>
    document.getElementById('bookingForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);
        const submitButton = form.querySelector('button[type="submit"]');
        const originalButtonText = 'Submit Booking';

        submitButton.textContent = '⏳ Processing...';
        submitButton.disabled = true;

        fetch('xray-form-handler.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            const resultText = result.trim().toLowerCase();
            if (resultText === 'success') {
                submitButton.textContent = '✅ Booking Submitted';
                form.reset();
            } else {
                submitButton.textContent = '❌ Submission Failed';
            }

            setTimeout(() => {
                submitButton.textContent = originalButtonText;
                submitButton.disabled = false;
            }, 3000);
        })
        .catch(error => {
            console.error('Error:', error);
            submitButton.textContent = '❌ Network Error';
            setTimeout(() => {
                submitButton.textContent = originalButtonText;
                submitButton.disabled = false;
            }, 3000);
        });
    });
</script>

</body>
</html>
