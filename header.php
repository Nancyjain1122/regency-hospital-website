<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .heading img {
      max-height: 60px;
    }

    .container {
      max-width: 1287px;
    }

    .books {
      background: #f7f9fc;
      /* padding: 0px 20px; */
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .btn-outline-danger {
      font-weight: 500;
    }

    .img-fluid {
      max-width: 70% !important;
      margin: 0px 10px;
    }

    .selects {
      width: 100%;
      padding: 5px 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 15px;
      transition: border-color 0.3s ease;
      box-sizing: border-box;
      color: grey;
    }

    .modal-dialog {
      margin: 16px 18% !important;
    }

    .modal-body {
      padding: 15px !important;
    }

    .forms input {
      width: 86%;
      padding: 5px 18px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 15px;
      transition: border-color 0.3s ease;
      box-sizing: border-box;
    }

    .forms {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-bottom: 20px;
    }

    .navbar {
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      background-color: #fff !important;
      height: 15vh;
      position: fixed;
      z-index: 1000;
      margin-top: 62px;
      width: 100%;
      top: 0;

      /* padding-top: 17px;
      padding-bottom: 17px; */

    }

    .form {
      margin-right: 52px;
    }

    .d-none {
      margin-right: 28px;
      padding-top: 6px;
    }

    .header-top {
      padding: 15px 0px;
      border-bottom: 1px solid #c4bdbd9c;
      background-color: #fff;
      z-index: 1050;
      position: relative;
      width: 100%;
      position: fixed;
      top: 0;
    }

    .hover-dropdown:hover>.dropdown-menu {
      display: block;
    }

    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -1px;
      display: none;
      position: absolute;
    }

    .dropdown-submenu:hover>.dropdown-menu {
      display: block;
    }

    .formm {
      margin-right: 28px;
    }

    .books1 {
      flex: 1 1 300px;
      max-width: 400px;
      padding: 45px;
      background: white;
    }

    .books1 h5 {
      font-size: 20px;
      color: #e74c3c;
      margin-bottom: 10px;
    }

    .books1 h3 {
      font-size: 32px;
      color: #2c3e50;
      margin-top: 10px;
    }

    .books1 hr.class {
      border: none;
      height: 3px;
      background-color: #e74c3c;
      width: 60px;
      margin: 10px 0;
    }

    .modal-content .btn-close {
      position: absolute;
      right: 32px;
      top: 10px;
      z-index: 10;
    }

    @media (max-width: 767.98px) {
      .bbtn {
        display: none !important;
      }

      .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba%280,0,0,0.7%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
      }

      .container {
        max-width: 1287px;
        --bs-gutter-x: 0rem !important;
      }

      .navbar-nav {
        margin: 0px 17px;
      }

      .navbar-collapse {
        width: 100%;
        background-color: #fff;
        padding-top: 22%;
      }

      body {
        padding-top: 85px;
      }

      .navbar {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-color: #fff !important;
        height: 0%;
        position: fixed;
        z-index: 1000;
        margin-top: 0px;
        width: 100%;
        top: 0;
      }
      .navbar-nav .dropdown-menu {
         max-width: 96% !important;
      }
      #locationDropdown .dropdown-menu{
        max-width: 50% !important;
      }
      .img-fluid {
        max-height: 85px !important;
      }

      .py-2 {
        padding-top: 2rem !important;
      }

      .formm {
        margin: 0px 16px;
        margin-right: 52px;
        padding-bottom: 30px;
      }
    }
  </style>
</head>

<body>

  <div class="header-top  d-flex justify-content-between align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="index.php">
        <img src="image/logo.png" alt="Logo" class="img-fluid" style="max-height: 60px;">
      </a>

      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="bbtn d-none d-lg-flex gap-2">
        <a href="tel:05123501888" class="btn btn-outline-danger">
          <i class="fa-solid fa-phone"></i> 0512 3501888
        </a>
        <a href="tel:1800 123 1337" class="btn btn-outline-danger">
          <i class="fa-solid fa-truck-medical"></i> Call an Ambulance
        </a>
      </div>
    </div>
  </div>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="doctor.php">Doctors</a></li>

          <li class="nav-item dropdown hover-dropdown">
            <a class="nav-link dropdown-toggle" href="specialities.php" id="specialitiesDropdown" role="button">
              Specialities</a>
            <ul class="dropdown-menu" aria-labelledby="specialitiesDropdown">
              <li class="dropdown-submenu">
              <li><a class="dropdown-item" href="blood bank.php">Blood Bank</a></li>
              <li><a class="dropdown-item" href="cancer.php">Cancer</a></li>
              <li><a class="dropdown-item" href="cardiac_surgery.php">Cardiac Surgery</a></li>
              <li><a class="dropdown-item" href="cardiology.php">Cardiology</a></li>
              <li><a class="dropdown-item" href="Cosmetic and Plastic Surgery.php">Cosmetic Surgery</a></li>
              <li><a class="dropdown-item" href="Dental.php">Dental</a></li>
              <li><a class="dropdown-item" href="Emergency.php">Emergency</a></li>
              <li><a class="dropdown-item" href="Endocrinology.php">Endocrinology</a></li>
              <li><a class="dropdown-item" href="Neurology.php">Neurology</a></li>
              <li><a class="dropdown-item" href="Neuro Surgery.php">Neuro Surgery</a></li>
              <li><a class="dropdown-item" href="surgery.php">Gastroenterology</a></li>
              <li><a class="dropdown-item" href="Anaesthesia.php">Critical Care</a></li>
          </li>
        </ul>
        </li>


        <li class="nav-item dropdown hover-dropdown">
          <a class="nav-link dropdown-toggle" href="Location.php" id="locationDropdown" role="button">
            Location
          </a>
          <ul class="dropdown-menu" aria-labelledby="locationDropdown">
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Kanpur</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Regency Hospital (Tower-1).php">Regency Hospital (Tower-1)</a></li>
                <li><a class="dropdown-item" href="Regency Hospital Cancer.php">Regency Hospital Cancer and Gastro Care
                    Centre Tower -2</a></li>
                <li><a class="dropdown-item" href="Regency Superspeciality Clinic.php">Regency Superspeciality
                    Clinic</a></li>
                <li><a class="dropdown-item" href="Regency Renal Sciences Hospital.php">Regency Renal Sciences
                    Hospital</a></li>
                <li><a class="dropdown-item" href="Regency Hospital, Govind Nagar.php">Regency Hospital, Govind
                    Nagar</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="Regency Super Speciality Hospital, Lucknow.php">Lucknow</a></li>
            <li><a class="dropdown-item" href="gorakhpur.php">Gorakhpur</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Hosptial Facilities</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ambulance.php">Ambulance Service</a></li>
            <li><a class="dropdown-item" href="x-ray.php">X-Ray</a></li>
            <li><a class="dropdown-item" href="ultrasound.php">UltraSound</a></li>
            <li><a class="dropdown-item" href="Operation Theaters.php">Operation Theaters</a></li>
            <li><a class="dropdown-item" href="ct-scan.php">CT-Scan</a></li>
            <li><a class="dropdown-item" href="physiotherapy.php">Physiotherapy</a></li>
            <li><a class="dropdown-item" href="pathology.php">Pathology Lab</a></li>
            <li><a class="dropdown-item" href="echo.php">Echocardiogram</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="healthpackage.php">Health Packages</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Resources</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="blog.php">Blog</a></li>
            <li><a class="dropdown-item" href="events.php">Events</a></li>
            <li><a class="dropdown-item" href="testimonial.php">Testimonials</a></li>
            <!-- <li><a class="dropdown-item" href="media.php">Media & News</a></li> -->
          </ul>
        </li>

        <!-- <li class="nav-item"><a class="nav-link" href="academic.php">Education</a></li> -->
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
        </ul>
        <div class="d-flex formm">
          <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal"
            data-bs-target="#appointmentModal">
            <i class="fa fa-calendar-check"></i> Get Appointment
          </button>
        </div>
      </div>
    </div>
  </nav>
  <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          <div class="books">
            <div class="books1">
              <h5>Have an emergency?</h5>
              <hr class="class">
              <h3>Book your visit</h3>
            </div>
            <div class="book2">
              <form id="appointment-form">
                <div class="forms">
                 <input type="text" class="text" name="name" placeholder="Your Name *" required oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'');">
                 <input type="tel" name="phone" placeholder="Phone Number *" pattern="[0-9]{10}" maxlength="10" required oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                  <input type="email" name="email" placeholder="Your Email *" required>
                </div>
                <div class="form">
                  <select class="selects" name="gender" required>
                    <option value="">Gender *</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
                  <select class="selects" name="doctor" required>
                    <option value="">Doctor *</option>
                    <option value="Dr. Geetika Bhatia">Dr. Geetika Bhatia</option>
                    <option value="Dr. Anil Kumar">Dr. A A Hashmi</option>
                    <option value="Dr. Seema Jain">Dr. A K Trivedi</option>
                    <option value="Dr. Rohit Verma">Dr. Abhijeet Singh</option>
                    <option value="Dr. Meena Gupta">Dr. Abhimanyu Kapoor</option>
                    <option value="Dr. Rakesh Singh">Dr. Abhinit Gupta</option>
                    <option value="Dr. Priya Sharma">Dr. Abhishek Srivastava</option>
                    <option value="Dr. Arvind Tiwari">Dr. Aditya Nath Shukla</option>
                    <option value="Dr. Ajeet Tiwari">Dr. Ajeet Tiwari</option>
                    <option value="Dr. Ajmal Hasan">Dr. Ajmal Hasan</option>
                    <option value="Dr. Akanksha Gupta">Dr. Akanksha Gupta</option>
                    <option value="Dr. Alok Kumar Pandey">Dr. Alok Kumar Pandey</option>
                  </select>
                </div>
                <div class="form">
                  <select class="selects" name="department" required>
                    <option value="">Department *</option>
                    <option value="Dental">Dental</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Cosmetic Surgery">Cosmetic Surgery</option>
                    <option value="Endocrinology">Endocrinology</option>
                    <option value="Orthopedics">Orthopedics</option>
                    <option value="Cardiac Surgery">Cardiac Surgery</option>
                    <option value="Blood Bank">Blood Bank</option>
                    <option value="Cancer">Cancer</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Neuro Surgery">Neuro Surgery</option>
                    <option value="Gastroenterology">Gastroenterology</option>
                    <option value="Critical Care">Critical Care</option>
                  </select>
                </div>
                <div class="form">
                  <select class="selects" name="appointment_time" required>
                    <option value="">Appointment Time *</option>
                    <option value="9:00 AM">9:00 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="2:00 PM">2:00 PM</option>
                    <option value="3:00 PM">3:00 PM</option>
                  </select>
                </div>
                <div class="forms">
                  <input class="selects" type="date" name="appointment_date" id="appointment_date" required>
                </div>
                <button type="submit">Book Appointment</button>
                <div id="appointment-message" style="display:none; margin-top:10px; font-weight:bold;"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const btn = document.getElementById("getAppointmentBtn");
      if (btn) {
        btn.addEventListener("click", function () {
          $('#appointmentModal').modal('show');
        });
      }
    });
  </script>


 <script>
  document.getElementById("appointment-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const appointmentDate = new Date(formData.get("appointment_date"));
    const today = new Date();
    const maxAllowedDate = new Date();
    maxAllowedDate.setMonth(today.getMonth() + 1);

    const messageDiv = document.getElementById("appointment-message");
    const submitButton = form.querySelector("button[type='submit']");

    const allowedDays = [0, 1, 3, 5]; 
    if (!allowedDays.includes(appointmentDate.getDay())) {
      messageDiv.textContent = "Doctor is available only on Sunday, Monday, Wednesday, and Friday.";
      messageDiv.style.color = "red";
      messageDiv.style.display = "block";
      setTimeout(() => messageDiv.style.display = "none", 3000);
      return;
    }

    if (appointmentDate > maxAllowedDate) {
      messageDiv.textContent = "You can only book appointments up to 1 month in advance.";
      messageDiv.style.color = "red";
      messageDiv.style.display = "block";
      setTimeout(() => messageDiv.style.display = "none", 3000);
      return;
    }
    submitButton.disabled = true;
    submitButton.textContent = "Processing...";

    fetch("appointment.php", {
      method: "POST",
      body: formData
    })
      .then(response => response.text())
      .then(result => {
        
        messageDiv.textContent = "Appointment booked successfully!";
        messageDiv.style.color = "green";
        messageDiv.style.display = "block";
        form.reset();

        setTimeout(() => {
          const modalElement = document.getElementById("appointmentModal");
          const modalInstance = bootstrap.Modal.getOrCreateInstance(modalElement);
          modalInstance.hide();
        }, 1000);
      })
      .catch(error => {
        messageDiv.textContent = "There was an error booking your appointment.";
        messageDiv.style.color = "red";
        messageDiv.style.display = "block";
        console.error("Error:", error);
      })
      .finally(() => {
        submitButton.disabled = false;
        submitButton.textContent = "Book Appointment";

        setTimeout(() => messageDiv.style.display = "none", 3000);
      });
  });
</script>

</body>

</html>