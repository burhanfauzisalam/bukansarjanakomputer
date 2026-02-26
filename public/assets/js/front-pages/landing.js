document.getElementById("currentYear").textContent = new Date().getFullYear();

    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.getElementById("mobileMenu");

    function setMobileMenuState(isOpen) {
      if (!menuToggle || !mobileMenu) return;
      mobileMenu.classList.toggle("open", isOpen);
      menuToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
      menuToggle.setAttribute("aria-label", isOpen ? "Close menu" : "Open menu");
    }

    if (menuToggle && mobileMenu) {
      menuToggle.addEventListener("click", () => {
        const isOpen = menuToggle.getAttribute("aria-expanded") === "true";
        setMobileMenuState(!isOpen);
      });

      mobileMenu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => setMobileMenuState(false));
      });

      document.addEventListener("click", (event) => {
        const isOpen = menuToggle.getAttribute("aria-expanded") === "true";
        if (!isOpen) return;
        const clickedInside = menuToggle.contains(event.target) || mobileMenu.contains(event.target);
        if (!clickedInside) setMobileMenuState(false);
      });

      document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") setMobileMenuState(false);
      });

      window.addEventListener("resize", () => {
        if (window.innerWidth > 980) setMobileMenuState(false);
      });
    }

    const homeLinks = document.querySelectorAll('a[href="#home"]');
    homeLinks.forEach((link) => {
      link.addEventListener("click", (event) => {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    });

    const stackCards = document.querySelectorAll(".stack-card");
    const canHover = window.matchMedia("(hover: hover)").matches;

    function setActiveCard(targetCard) {
      const willActivate = !targetCard.classList.contains("active");
      stackCards.forEach((card) => {
        card.classList.remove("active");
        card.setAttribute("aria-pressed", "false");
        card.style.transform = "";
      });
      if (willActivate) {
        targetCard.classList.add("active");
        targetCard.setAttribute("aria-pressed", "true");
      }
    }

    stackCards.forEach((card) => {
      card.addEventListener("click", () => setActiveCard(card));

      card.addEventListener("keydown", (event) => {
        if (event.key === "Enter" || event.key === " ") {
          event.preventDefault();
          setActiveCard(card);
        }
      });

      if (canHover) {
        card.addEventListener("mousemove", (event) => {
          const rect = card.getBoundingClientRect();
          const x = event.clientX - rect.left;
          const y = event.clientY - rect.top;
          const rx = ((y / rect.height) - 0.5) * -8;
          const ry = ((x / rect.width) - 0.5) * 10;
          card.style.setProperty("--mx", `${x}px`);
          card.style.setProperty("--my", `${y}px`);
          card.style.transform = `translateY(-4px) rotateX(${rx}deg) rotateY(${ry}deg)`;
        });

        card.addEventListener("mouseleave", () => {
          card.style.setProperty("--mx", "50%");
          card.style.setProperty("--my", "50%");
          card.style.transform = "";
        });
      }
    });