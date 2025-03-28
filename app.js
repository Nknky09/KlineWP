// Reveal Container
const reveals = document.querySelectorAll(".reveal");
const observer = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.1 }
);
reveals.forEach(el => observer.observe(el));

// Hamburger Toggle
const toggle = document.getElementById("mobileToggle");
const navWrapper = document.getElementById("mainNavWrapper");

if (toggle && navWrapper) {
  toggle.addEventListener("click", () => {
    navWrapper.classList.toggle("show");
  });
}

// External Link Confirmation
document.addEventListener("DOMContentLoaded", function () {
  const currentHost = this.location.hostname;
  document.querySelectorAll("a[href]").forEach(link => {
    const href = link.getAttribute("href");
    const url = new URL(href, location.href);

    const isInternal = url.hostname === currentHost;
    const isSafeProtocol =
      url.protocol === "mailto:" ||
      url.protocol === "tel:" ||
      href.startsWith("#");

    if (!isInternal && !isSafeProtocol) {
      link.addEventListener("click", function (e) {
        const confirmLeave = confirm(
          "You are now leaving our website. Click OK to continue"
        );
        if (!confirmLeave) e.preventDefault();
      });
    }
  });
});
