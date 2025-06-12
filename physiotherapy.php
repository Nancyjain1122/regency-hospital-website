<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physiotherapy | Regency Healthcare</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="physio-hero">
    <div class="ttttext">
        <h5>Advanced Physiotherapy & Rehabilitation Care</h5>
        <p>Helping you regain mobility, relieve pain, and restore strength through personalized care and expert physiotherapy treatment.</p>
    </div>
</div>

<div class="abouuut-container">
    <h4>About Our Physiotherapy Department</h4>
    <p>At Regency Healthcare, our Physiotherapy & Rehabilitation Unit is committed to enhancing the physical well-being of patients through evidence-based therapeutic interventions. Whether you're recovering from surgery, injury, or managing chronic pain, our expert physiotherapists provide tailored treatment plans to help you achieve optimal recovery.</p>
</div>

<div class="aboooutt-container">
    <h4>Key Services Offered</h4>
    <ul>
        <li>Post-surgical rehabilitation (orthopedic, neurological, cardiac)</li>
        <li>Sports injury rehabilitation</li>
        <li>Chronic pain management (e.g., back pain, arthritis)</li>
        <li>Neuro-rehabilitation (stroke, Parkinson’s, spinal cord injuries)</li>
        <li>Pediatric physiotherapy</li>
        <li>Geriatric physiotherapy</li>
        <li>Manual therapy & joint mobilization</li>
        <li>Electrotherapy (TENS, IFT, ultrasound)</li>
    </ul>
</div>

<div class="colummn">
    <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
        <i class="fa-solid fa-heart-pulse" style="opacity: 0.5;"></i>
        <div class="p">
            <h6>Personalized Treatment Plans</h6>
            <p>Each patient receives a customized physiotherapy protocol designed after comprehensive physical assessments and consultations with orthopedic or neurology specialists.</p>
        </div>
    </div>
    <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
        <i class="fa-solid fa-people-group" style="opacity: 0.5;"></i>
        <div class="p">
            <h6>Experienced Physiotherapy Team</h6>
            <p>Our team consists of licensed physiotherapists with expertise in musculoskeletal, neurological, and sports rehabilitation therapies.</p>
        </div>
    </div>
</div>

<div class="visiiion-mission">
    <div class="visiiion">
        <h4>Our Vision</h4>
        <p>To be a leader in physiotherapy services by providing compassionate, evidence-based care that restores function and improves quality of life.</p>
    </div>
    <div class="visiiion">
        <h4>Our Mission</h4>
        <p>To empower patients through education, movement, and expert-guided rehabilitation in a safe and supportive environment.</p>
    </div>
</div>

<div class="milestoones">
    <h4>Why Choose Regency Physiotherapy?</h4>
    <ul>
        <li>State-of-the-art rehab equipment & facilities</li>
        <li>Interdisciplinary approach with doctors, therapists & nurses</li>
        <li>Private consultation and therapy rooms</li>
        <li>Home exercise programs and remote follow-up</li>
        <li>Positive outcomes in recovery from orthopedic & neurological conditions</li>
    </ul>
</div>

<div class="core-valluues">
    <h4>Patient Testimonials</h4>
    <div class="values-grid">
        <div>
            <i class="fa-solid fa-user-check"></i>
            <p><strong>Ravi Sharma</strong><br> "After my knee replacement, Regency's physiotherapy team helped me walk independently within weeks. Professional and caring!"</p>
        </div>
        <div>
            <i class="fa-solid fa-user-nurse"></i>
            <p><strong>Neha Agarwal</strong><br> "I suffered a slip disc injury. Thanks to the physiotherapists at Regency, my pain has drastically reduced, and I’m back to daily life!"</p>
        </div>
    </div>
</div>

<div class="faq-section">
    <h4>Frequently Asked Questions</h4>
    <div class="faq-item">
        <button class="faq-question">Do I need a referral from a doctor to see a physiotherapist?</button>
        <div class="faq-answer">
            <p>Not necessarily. You can book an appointment directly, but a referral can help guide your treatment if you have a specific condition.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">What should I wear to my physiotherapy session?</button>
        <div class="faq-answer">
            <p>Wear comfortable, loose-fitting clothes that allow easy movement and access to the area being treated.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">How many sessions will I need?</button>
        <div class="faq-answer">
            <p>This varies based on your condition and progress. Some patients need a few sessions; others require ongoing care.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">Is physiotherapy painful?</button>
        <div class="faq-answer">
            <p>Some discomfort is normal during certain exercises, but therapists work to ensure pain is minimal and tolerable.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">Are physiotherapy services covered by insurance?</button>
        <div class="faq-answer">
            <p>Most insurance plans do cover physiotherapy. Please check with your provider or consult our billing desk for confirmation.</p>
        </div>
    </div>
</div>


<div class="bbbttn"><a href="Online-Booking.php">Online Booking</a></div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach(item => {
        const question = item.querySelector(".faq-question");

        question.addEventListener("click", () => {
            faqItems.forEach(i => {
                if (i !== item) i.classList.remove("active");
            });

            item.classList.toggle("active");
        });
    });
});
</script>



</body>
</html>
