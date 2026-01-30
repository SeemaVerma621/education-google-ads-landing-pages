document
  .getElementById("qualificationForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission
    var course = document.getElementById("courseSelect").value;
    var tabContent = document
      .getElementById("result")
      .querySelector(".tab-content");
    clearTabContent(); // Clear existing tab content before adding new content

    // Switch statement to handle different courses
    switch (course) {
      case "BBA":
        createTabContent(
          "MBA",
          `Bachelor of Business Administration (BBA) is a three-year undergraduate program designed to give students the essential skills and knowledge in business and management.`,
          "3 years",
          "Minimum high school diploma or equivalent",
          "https://beta.distanceeducationschool.com/",
          "https://beta.distanceeducationschool.com/online-courses"
        );
        createTabContent(
          "MCA",
          `Master of Computer Applications (MCA) is a two-year postgraduate program focusing on advanced concepts in computer science and applications.`,
          "2 years",
          "Bachelor's degree in Computer Science or related field"
        );
        break;
      case "BCOM":
        createTabContent(
          "MCOM",
          `Bachelor of Commerce (BCom) is a three-year undergraduate program providing students with a strong foundation in accounting, finance, and business.`,
          "3 years",
          "Minimum high school diploma or equivalent"
        );
        break;
      case "MBA":
        createTabContent(
          "PhD",
          `Doctor of Philosophy (PhD) is the highest academic degree awarded by universities and is typically completed over several years of research in a specific field.`,
          "Varies (typically 3-7 years)",
          "Master's degree in a relevant field"
        );
        break;
      default:
      // Handle other cases or do nothing
    }

    // Show the first tab content by default
    var firstTabContent = tabContent.querySelector(".tab-content");
    if (firstTabContent) {
      firstTabContent.style.display = "block";
    }
  });

// Collect form data
var formData = new FormData(this);

// Send form data to mail.php
fetch("mail.php", {
  method: "POST",
  body: formData,
})
  .then((response) => {
    if (!response.ok) {
      throw new Error("Network response was not ok");
    }
    return response.text();
  })
  .then((data) => {
    console.log(data); // Log response from mail.php
    // You can handle the response here, such as displaying a success message to the user
  })
  .catch((error) => {
    console.error("There was a problem with the fetch operation:", error);
    // You can handle errors here, such as displaying an error message to the user
  });

// Function to create tab content
function createTabContent(
  courseName,
  description,
  duration,
  eligibility,
  checkAgain,
  dynamicLink
) {
  var tabContent = document
    .getElementById("result")
    .querySelector(".tab-content");
  var contentDiv = document.createElement("div");
  contentDiv.innerHTML = `
        <h2>${courseName}</h2>
        <p>${description}</p><br>
        <p><strong>Duration:</strong> ${duration}<span class="s1"><strong>Eligibility:</strong> ${eligibility}</span> </p><br>
      
        <button onclick="window.location.href='${checkAgain}'" class="checkAgain">Check other Eligibilty</button>
        <button onclick="window.location.href='${dynamicLink}'" class="knowMore">Know More</button>
        
    `;
  contentDiv.id = courseName.toLowerCase();
  contentDiv.classList.add("tab-content");
  tabContent.appendChild(contentDiv);

  // Hide all tab content initially
  contentDiv.style.display = "none";

  createTabLink(courseName, contentDiv);
}

// Function to create tab link
function createTabLink(courseName, contentDiv) {
  var tabLinks = document.getElementById("result").querySelector(".tab-links");
  var tabLink = document.createElement("div");
  tabLink.textContent = courseName;
  tabLink.classList.add("tab-link");

  // Add 'active' class only to the first tab link
  if (tabLinks.children.length === 0) {
    tabLink.classList.add("active");
  }

  // Event listener for tab link
  tabLink.addEventListener("click", function () {
    tabLinks.querySelectorAll(".tab-link").forEach(function (link) {
      link.classList.remove("active");
    });
    tabLink.classList.add("active");

    // Hide all tab content
    contentDiv.parentElement
      .querySelectorAll(".tab-content")
      .forEach(function (content) {
        content.style.display = "none";
      });
    // Show the corresponding tab content
    contentDiv.style.display = "block";
  });

  // Append tab link to tab links container
  tabLinks.appendChild(tabLink);
}

// Function to clear existing tab content
function clearTabContent() {
  var tabContent = document
    .getElementById("result")
    .querySelector(".tab-content");
  tabContent.innerHTML = "";

  var tabLinks = document.getElementById("result").querySelector(".tab-links");
  tabLinks.innerHTML = "";
}
