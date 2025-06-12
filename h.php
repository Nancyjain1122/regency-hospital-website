<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header</title>
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
    .btn-outline-danger{
      font-weight: 500;
    }
      .img-fluid {
      max-width: 70% !important;
      margin: 0px 10px;
    }
    .navbar{
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      background-color: #fff !important;
      padding-top: 17px;
      padding-bottom: 17px;

    }
    .form{
      margin-right: 52px;
    }
    .d-none{
    margin-right: 55px;
    padding-top: 6px;
    }
    .header-top {
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    background-color: #fff;
    z-index: 1000;
    position: relative;
    }
    .hover-dropdown:hover > .dropdown-menu {
      display: block;
    }

    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -1px;
      display: none;
      position: absolute;
    }

    .dropdown-submenu:hover > .dropdown-menu {
      display: block;
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
         }
      }

   
  </style>
</head>
<body>

<div class="header-top py-2 d-flex justify-content-between align-items-center">
  <div class="container d-flex justify-content-between align-items-center">
    <a href="index.php">
      <img src="image/logo.png" alt="Logo" class="img-fluid" style="max-height: 60px;">
    </a>

    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="bbtn d-none d-lg-flex gap-2">
      <a href="tel:05123501888" class="btn btn-outline-danger">
        <i class="fa-solid fa-phone"></i> 0512 3501888
      </a>
      <a href="tel:05123501888" class="btn btn-outline-danger">
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

          <!-- Specialities Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="specialitiesDropdown" role="button" data-bs-toggle="dropdown">Specialities</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="blood bank.php">Blood Bank</a></li>
              <li><a class="dropdown-item" href="cancer.php">Cancer</a></li>
              <li><a class="dropdown-item" href="cardiac_surgery.php">Cardiac Surgery</a></li>
              <li><a class="dropdown-item" href="cardiology.php">Cardiology</a></li>
              <li><a class="dropdown-item" href="Cosmetic and Plastic Surgery.php">Cosmetic Surgery</a></li>
              <li><a class="dropdown-item" href="Dental.php">Dental</a></li>
              <li><a class="dropdown-item" href="Emergency.php">Emergency</a></li>
                <li><a class="dropdown-item" href="Endocrinology.php">Endocrinology</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="specialities.php"><strong>View All</strong></a></li>
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
        <li><a class="dropdown-item" href="Regency Hospital Cancer.php">Regency Hospital Cancer and Gastro Care Centre Tower -2</a></li>
        <li><a class="dropdown-item" href="Regency Superspeciality Clinic.php">Regency Superspeciality Clinic</a></li>
        <li><a class="dropdown-item" href="Regency Renal Sciences Hospital.php">Regency Renal Sciences Hospital</a></li>
        <li><a class="dropdown-item" href="Regency Hospital, Govind Nagar.php">Regency Hospital, Govind Nagar</a></li>
      </ul>
      </li>
          <li><a class="dropdown-item" href="lucknow.php">Lucknow</a></li>
          <li><a class="dropdown-item" href="gorakhpur.php">Gorakhpur</a></li>
        </ul>
            </li>

          <li class="nav-item"><a class="nav-link" href="#">Health Packages</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Education</a></li>

          <!-- Resources -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Resources</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="blog.php">Blog</a></li>
              <li><a class="dropdown-item" href="events.php">Events</a></li>
              <li><a class="dropdown-item" href="media.php">Media & News</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="#">Career</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
        </ul>

        <!-- Search -->
        <form class="d-flex form" role="search">
          <input class="form-control me-2" type="search" placeholder="Looking for..." name="s">
          <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>

</body>
</html>
