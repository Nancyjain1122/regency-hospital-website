<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Medical Services</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .service-booking h1{
            text-align: center;
             font-size: 25px;
            margin-top: 15px;
             color: red;
        }
        .booking-form {
            max-width: 600px;
            margin: auto;
            box-shadow: 0px 0px 1px 1px;
                padding: 30px;
                /* height: 100vh; */
                margin-bottom:40px;

        }

        .booking-form input,
        .booking-form select,
        .booking-form textarea,
        .booking-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .bbbttn {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        .bbbttn:disabled {
            background-color: #999;
            cursor: not-allowed;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>

<div class="service-booking">
    <h1>Book a Medical Service</h1>
    <p style="text-align: center;">Please fill out the form below to request your service.</p>

    <form id="bookingForm" class="booking-form">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Mobile Number:</label>
        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" placeholder="10-digit number">

        <label for="service_type">Select Service Type:</label>
        <select id="service_type" name="service_type" required>
            <option value="">-- Select Service --</option>
            <option value="ambulance">Ambulance</option>
            <option value="ct_scan">CT Scan</option>
            <option value="xray">X-Ray</option>
            <option value="operation">Operation Theater</option>
            <option value="ultrasound">Ultrasound</option>
            <option value="physiotherapy">Physiotherapy</option>
            <option value="Pathology Lab">Pathology Lab</option>
            <option value="echocardiograms">Echocardiogram</option>
        </select>

      
        <div id="ambulanceFields" class="hidden">
            <label for="pickup_location">Pickup Location:</label>
            <input type="text" id="pickup_location" name="pickup_location">

            <label for="ambulance_type">Ambulance Type:</label>
            <select id="ambulance_type" name="ambulance_type">
                <option value="">-- Select Type --</option>
                <option value="BLS">Basic Life Support (BLS)</option>
                <option value="ALS">Advanced Life Support (ALS)</option>
                <option value="Neonatal">Neonatal Ambulance</option>
                <option value="Air">Air Ambulance</option>
            </select>
        </div>

        <div id="scanFields" class="hidden">
            <label for="preferred_date">Preferred Date:</label>
            <input type="date" id="preferred_date" name="preferred_date">

            <label for="preferred_time">Preferred Time:</label>
            <input type="time" id="preferred_time" name="preferred_time">
        </div>

        <label for="note">Additional Notes (Optional):</label>
        <textarea id="note" name="note" rows="4" placeholder="Mention patient condition or preferences"></textarea>

        <button type="submit" class="bbbttn">Submit Booking</button>
    </form>
</div>

<?php include 'footer.php';
?>

<script>
    const serviceTypeSelect = document.getElementById('service_type');
    const ambulanceFields = document.getElementById('ambulanceFields');
    const scanFields = document.getElementById('scanFields');

    serviceTypeSelect.addEventListener('change', () => {
        const selectedService = serviceTypeSelect.value;
        ambulanceFields.classList.add('hidden');
        scanFields.classList.add('hidden');

        if (selectedService === 'ambulance') {
            ambulanceFields.classList.remove('hidden');
        } else if (['ct_scan', 'xray', 'ultrasound', 'operation', 'physiotherapy', 'echocardiograms', 'Pathology Lab'].includes(selectedService)) {
            scanFields.classList.remove('hidden');
        }
    });

    document.getElementById('bookingForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);
        const submitButton = form.querySelector('button[type="submit"]');
        const originalButtonText = 'Submit Booking';

        submitButton.textContent = '⏳ Processing...';
        submitButton.disabled = true;

        fetch('submit-booking.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            const resultText = result.trim().toLowerCase();
            if (resultText === 'success') {
                submitButton.textContent = '✅ Booking Submitted';
                form.reset();
                ambulanceFields.classList.add('hidden');
                scanFields.classList.add('hidden');
            } else {
                submitButton.textContent = '❌ Submission Failed';
            }

            setTimeout(() => {
                submitButton.textContent = originalButtonText;
                submitButton.disabled = false;
            }, 3000);
        })
        .catch(error => {
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
