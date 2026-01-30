// Populate the course select dropdown based on qualification
function populateCourses() {
  var qualificationSelect = document.getElementById("qualification");
  var courseSelect = document.getElementById("courseSelect");
  var courseOptions = {
    graduation: ["BA", "BBA", "BCA", "BCOM", "BSC", "BSW", "BLIS", "BTECH"],
    "post-graduation": [
      "MA",
      "MBA",
      "MCA",
      "MCOM",
      "MSC",
      "MSW",
      "MLIS",
      "MTECH",
    ],
    higherSecondary: ["Arts", "Commerce", "Science"],
    intermediate: [],
  };

  courseSelect.innerHTML =
    "<option value='' selected disabled>Select Course</option>";
  var courses = courseOptions[qualificationSelect.value] || [];

  courses.forEach(function (course) {
    var option = document.createElement("option");
    option.text = course;
    option.value = course;
    courseSelect.add(option);
  });

  courseSelect.style.display =
    qualificationSelect.value === "intermediate" ? "none" : "block";
}

// Populate the university select dropdown based on qualification
function populateUniversity() {
  var qualificationSelect = document.getElementById("qualification");
  var universitySelect = document.getElementById("universitySelect");
  universitySelect.innerHTML = "";

  var universityOptions = {
    graduation: ["DPU", "UU", "LPU"],
    "post-graduation": ["DPU", "UU", "LPU"],
    higherSecondary: ["CBSE", "NIOS"],
    intermediate: ["CBSE", "NIOS"],
  };

  var universities = universityOptions[qualificationSelect.value] || [];
  universities.forEach(function (university) {
    var option = document.createElement("option");
    option.text = university;
    option.value = university;
    universitySelect.add(option);
  });
}
