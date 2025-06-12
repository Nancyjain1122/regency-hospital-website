<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include 'header.php';
?>
<div class="abouttt">
   <img src="image/EDUCATION.jpg" alt="">
</div>
<table>
    <h2 class="teble">Total Number of Seats</h2>
    <thead>
      <tr>
        <th>Hospital</th>
        <th>DNB – Broad Speciality (Post MBBS)</th>
        <th>Diploma (Post MBBS)</th>
        <th>DNB – Broad Speciality (Post Diploma)</th>
        <th>DNB – Super Speciality</th>
        <th>Total DNB / FNB Seats</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Regency Hospital, A-2, Sarvodaya Nagar, Kanpur</td>
        <td>08</td>
        <td>06</td>
        <td>08</td>
        <td>04</td>
        <td>26</td>
      </tr>
      <tr>
        <td>Regency Hospital, A-4, Sarvodaya Nagar, Kanpur</td>
        <td>00</td>
        <td>00</td>
        <td>00</td>
        <td>02</td>
        <td>02</td>
      </tr>
      
    </tbody>
  </table>


  <div class="package">
     <h2 class="teblee">DNB Courses</h2>
        <hr class="ac">
        <div class="package_heading" onclick="toggleDetails('details1',this)">
            <h5>DNB Pathology</h5>
             <span class="toggle-icon">▼</span>
        </div>
        <div id="details1" class="package_details">
        <table>
    <thead>
      <tr>
        <th>Name of course</th>
        <th>Eligibility</th>
        <th>No of Seats</th>
        <th>Course Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Primary DNB</td>
        <td>MBBS</td>
        <td>2</td>
        <td>3 Years</td>
      </tr>
      <tr>
        <td>Secondary DNB</td>
        <td>MBBS, Relevant Diploma</td>
        <td>2</td>
        <td>2 Years</td>

      </tr>
      
    </tbody>
        </table>  
        </div>
  </div>
   <div class="package">
        <div class="package_heading" onclick="toggleDetails('details2',this)">
            <h5>DNB Paediatrics</h5>
             <span class="toggle-icon">▼</span>
        </div>
        <div id="details2" class="package_details">
        <table>
    <thead>
      <tr>
        <th>Name of course</th>
        <th>Eligibility</th>
        <th>No of Seats</th>
        <th>Course Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Primary DNB</td>
        <td>MBBS</td>
        <td>3</td>
        <td>3 Years</td>
      </tr>
      <tr>
        <td>Secondary DNB</td>
        <td>MBBS, Relevant Diploma</td>
        <td>3</td>
        <td>2 Years</td>

      </tr>
      
    </tbody>
  </table>
        
        </div>
    </div>
    <div class="package">
        <div class="package_heading" onclick="toggleDetails('details3',this)">
            <h5>DNB- Anaesthesiology</h5>
             <span class="toggle-icon">▼</span>
        </div>
        <div id="details3" class="package_details">
        <table>
    <thead>
      <tr>
        <th>Name of course</th>
        <th>Eligibility</th>
        <th>No of Seats</th>
        <th>Course Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Primary DNB</td>
        <td>MBBS</td>
        <td>2</td>
        <td>3 Years</td>
      </tr>
      <tr>
        <td>Secondary DNB</td>
        <td>MBBS, Relevant Diploma</td>
        <td>2</td>
        <td>2 Years</td>

      </tr>
      
    </tbody>
  </table>    
    </div>
    </div>
    <div class="package">
        <div class="package_heading" onclick="toggleDetails('details4',this)">
            <h5>DNB- Radio Diagnosis</h5>
             <span class="toggle-icon">▼</span>
        </div>
        <div id="details4" class="package_details">
        <table>
    <thead>
      <tr>
        <th>Name of course</th>
        <th>Eligibility</th>
        <th>No of Seats</th>
        <th>Course Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Primary DNB</td>
        <td>MBBS</td>
        <td>1</td>
        <td>3 Years</td>
      </tr>
      <tr>
        <td>Secondary DNB</td>
        <td>MBBS, Relevant Diploma</td>
        <td>1</td>
        <td>2 Years</td>

      </tr>
      
    </tbody>
  </table>
        
        </div>
    </div>
    <div class="package">
        <div class="package_heading" onclick="toggleDetails('details5',this)">
            <h5>DrNB – Critical Care Medicine</h5>
             <span class="toggle-icon">▼</span>
        </div>
        <div id="details5" class="package_details">
        <table>
    <thead>
      <tr>
        <th>Name of course</th>
        <th>Eligibility</th>
        <th>No of Seats</th>
        <th>Course Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>DNB SS Critical Care Medicine</td>
        <td>MD/DNB</td>
        <td>2</td>
        <td>3 Years</td>
      </tr>
    </tbody>
  </table>    
    </div>
    </div>
    <div class="package">
        <div class="package_heading" onclick="toggleDetails('details6',this)">
            <h5>DrNB – Surgical Gastroenterology</h5>
             <span class="toggle-icon">▼</span>
        </div>
        <div id="details6" class="package_details">
        <table>
    <thead>
      <tr>
        <th>Name of course</th>
        <th>Eligibility</th>
        <th>No of Seats</th>
        <th>Course Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>DNB SS Surgical Gastroenterology</td>
        <td>MD/DNB</td>
        <td>2</td>
        <td>3 Years</td>
      </tr>
    </tbody>
  </table>    
    </div>
    </div>
    <div class="package">
        <div class="package_heading" onclick="toggleDetails('details7',this)">
            <h5>DrNB Medical Oncology</h5>
             <span class="toggle-icon">▼</span>
        </div>
        <div id="details7" class="package_details">
        <table>
    <thead>
      <tr>
        <th>Name of course</th>
        <th>Eligibility</th>
        <th>No of Seats</th>
        <th>Course Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>DNB SS Medical Oncology</td>
        <td>MD/DNB</td>
        <td>2</td>
        <td>3 Years</td>
      </tr>
    </tbody>
  </table>    
    </div>
    </div>
    <div class="package">
        <div class="package_heading" onclick="toggleDetails('details8',this)">
            <h5>Diploma in Tuberculosis & Chest Disease ( DTCD)</h5>
             <span class="toggle-icon">▼</span>
        </div>
        <div id="details8" class="package_details">
        <table>
    <thead>
      <tr>
        <th>Name of course</th>
        <th>Eligibility</th>
        <th>No of Seats</th>
        <th>Course Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Diploma in Tuberculosis & Chest Disease ( DTCD)</td>
        <td>MBBS</td>
        <td>4</td>
        <td>2 Years</td>
      </tr>
    </tbody>
  </table>    
    </div>
    </div>


  <div class="heading__">Glimpse of Academics</div>
  <hr class="acad_">
  <div class="academic">
    <img src="image/index1.jpeg" alt="" onclick="openImage(0)">
    <img src="image/index2.jpeg" alt="" onclick="openImage(1)">
    <img src="image/index3.jpeg" alt="" onclick="openImage(2)">
    <img src="image/index4.jpg" alt="" onclick="openImage(3)">
    <img src="image/index5.jpg" alt="" onclick="openImage(4)">
    <img src="image/index6.jpg" alt="" onclick="openImage(5)">
    <img src="image/index7.jpg" alt="" onclick="openImage(6)">
    <img src="image/index8.jpeg" alt="" onclick="openImage(7)">
  </div>

  <div id="imagePopup" class="popup" onclick="closeImage(event)">
    <span class="close" onclick="closeImage(event)">&times;</span>
    <button class="nav prev" onclick="prevImage(event)">&#10094;</button>
    <img class="popup-content" id="popupImage">
    <button class="nav next" onclick="nextImage(event)">&#10095;</button>
  </div>


     <script>
    function toggleDetails(packageId, element) {
      var details = document.getElementById(packageId);
      var icon = element.querySelector('.toggle-icon');

      if (details.style.display === "block") {
        details.style.display = "none";
        icon.textContent = "▼";
      } else {
        details.style.display = "block";
        icon.textContent = "▲";
      }
    }
  </script>
  <script>
    const images = [
      "image/index1.jpeg",
      "image/index2.jpeg",
      "image/index3.jpeg",
      "image/index4.jpg",
      "image/index5.jpg",
      "image/index6.jpg",
      "image/index7.jpg",
      "image/index8.jpeg"
    ];

    let currentIndex = 0;

    function openImage(index) {
      currentIndex = index;
      const popup = document.getElementById("imagePopup");
      const popupImg = document.getElementById("popupImage");
      popup.style.display = "block";
      popupImg.src = images[currentIndex];
    }

    function closeImage(event) {
      if (
        event.target.classList.contains('popup-content') ||
        event.target.classList.contains('nav')
      ) return;
      document.getElementById("imagePopup").style.display = "none";
    }

    function nextImage(event) {
      event.stopPropagation();
      currentIndex = (currentIndex + 1) % images.length;
      document.getElementById("popupImage").src = images[currentIndex];
    }

    function prevImage(event) {
      event.stopPropagation();
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      document.getElementById("popupImage").src = images[currentIndex];
    }
  </script>


<?php include 'footer.php';
?>
</body>
</html>