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
