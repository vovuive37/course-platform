// ===== DEMO LOGIN CHUYỂN ROLE =====
function loginDemo() {
  const role = document.getElementById("role").value;

  if (role === "student") {
    window.location.href = "student.html";
  }
  if (role === "instructor") {
    window.location.href = "instructor.html";
  }
  if (role === "admin") {
    window.location.href = "admin.html";
  }
}

// ===== HIỆU ỨNG CLICK CARD =====
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".card");

  cards.forEach(card => {
    card.addEventListener("mouseenter", () => {
      card.style.transform = "scale(1.02)";
      card.style.transition = "0.3s";
    });

    card.addEventListener("mouseleave", () => {
      card.style.transform = "scale(1)";
    });
  });
});
function login() {
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  fetch("http://localhost/e-learning-platform/backend/api/login.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ username, password })
  })
    .then(res => res.json())
    .then(data => {
      if (data.role) {
        localStorage.setItem("user", JSON.stringify(data));

        if (data.role === "admin") {
          window.location.href = "admin.html";
        } else if (data.role === "instructor") {
          window.location.href = "instructor.html";
        } else {
          window.location.href = "student.html";
        }
      } else {
        alert("Đăng nhập thất bại");
      }
    });
}
fetch("http://localhost/e-learning-platform/backend/api/courses.php")
  .then(res => res.json())
  .then(courses => {
    console.log(courses);
    // bạn render ra HTML tùy trang courses.html
  });
