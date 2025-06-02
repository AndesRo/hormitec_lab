// assets/js/main.js

document.addEventListener('DOMContentLoaded', () => {
  // 1. Smooth scrolling for internal links
  document.querySelectorAll('a.nav-link[href^="#"], a.btn[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const targetID = link.getAttribute('href').substring(1);
      const targetEl = document.getElementById(targetID);
      if (targetEl) {
        window.scrollTo({
          top: targetEl.offsetTop - 70, // Ajusta según la altura del navbar
          behavior: 'smooth'
        });
      }
    });
  });

  // 2. Collapse navbar on link click (mobile)
  const navbarCollapse = document.getElementById('navbarSupportedContent');
  document.querySelectorAll('.navbar-nav .nav-link').forEach(navLink => {
    navLink.addEventListener('click', () => {
      if (window.getComputedStyle(document.querySelector('.navbar-toggler')).display !== 'none') {
        new bootstrap.Collapse(navbarCollapse).hide();
      }
    });
  });

  // 3. Basic client-side form validation
  const form = document.querySelector('form');
  if (form) {
    form.addEventListener('submit', e => {
      // Example: simple RUT validation (Chile)
      const rutInput = document.getElementById('rut');
      const rutPattern = /^\d{1,2}\.\d{3}\.\d{3}-[\dkK]$/;
      if (rutInput && !rutPattern.test(rutInput.value)) {
        e.preventDefault();
        rutInput.classList.add('is-invalid');
        if (!rutInput.nextElementSibling || !rutInput.nextElementSibling.classList.contains('invalid-feedback')) {
          const feedback = document.createElement('div');
          feedback.className = 'invalid-feedback';
          feedback.textContent = 'Ingrese un RUT válido (p.ej., 12.345.678-9).';
          rutInput.parentNode.appendChild(feedback);
        }
      } else if (rutInput) {
        rutInput.classList.remove('is-invalid');
      }
      // You can add further checks here (phone format, message length, etc.)
    });
  }

  // 4. Initialize Bootstrap tooltips (if any)
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(el => new bootstrap.Tooltip(el));

  // 5. Lazy-load if IntersectionObserver is supported
  if ('IntersectionObserver' in window) {
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    const imgObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src || img.src;
          observer.unobserve(img);
        }
      });
    }, { rootMargin: '0px 0px 50px 0px' });

    lazyImages.forEach(img => imgObserver.observe(img));
  }

  // 6. Back-to-top button (optional)
  const backToTop = document.createElement('button');
  backToTop.innerHTML = '&uarr;';
  backToTop.className = 'btn btn-primary back-to-top';
  document.body.appendChild(backToTop);
  backToTop.style.cssText = `
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    display: none;
    z-index: 999;
  `;
  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
  window.addEventListener('scroll', () => {
    backToTop.style.display = window.scrollY > 300 ? 'block' : 'none';
  });
});



  
  // WhatsApp Chat Interactivo

document.addEventListener("DOMContentLoaded", function () {
  const chatToggle = document.querySelector(".chat-toggle");
  const chatBox = document.querySelector(".chat-box");
  const closeChat = document.querySelector(".close-chat");
  const sendBtn = document.querySelector("#send-btn");
  const openWhatsAppBtn = document.querySelector("#open-whatsapp");
  const userInput = document.querySelector("#user-input");
  const chatMessages = document.querySelector("#chat-messages");
  const numeroWhatsApp = "56997416485";

  // Mostrar chat
  chatToggle.addEventListener("click", () => {
    chatBox.style.display = "block";
    userInput.focus();
  });

  // Cerrar chat
  closeChat.addEventListener("click", () => {
    chatBox.style.display = "none";
  });

  // Enviar con botón o Enter
  sendBtn.addEventListener("click", enviarMensaje);
  openWhatsAppBtn.addEventListener("click", enviarWhatsApp);
  userInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") enviarMensaje();
  });

  // Mostrar mensaje en la ventana del chat y abrir WhatsApp con saludo
  function enviarMensaje() {
    const mensaje = userInput.value.trim();
    if (mensaje === "") return;

    // Mostrar mensaje del usuario
    const userMsg = document.createElement("p");
    userMsg.classList.add("user-message");
    userMsg.innerText = mensaje;
    chatMessages.appendChild(userMsg);

    // Simular respuesta del bot
    setTimeout(() => {
      const botMsg = document.createElement("p");
      botMsg.classList.add("bot-message");
      botMsg.innerText = "Gracias por tu mensaje, te responderemos pronto 🙌";
      chatMessages.appendChild(botMsg);
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 1000);

    // Abrir WhatsApp con saludo automático
    const saludo = "Gracias por Comunicarte con Hormitec:";
    const mensajeFinal = `${saludo} ${mensaje}`;
    const url = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(mensajeFinal)}`;
    window.open(url, "_blank");

    // Limpiar input
    userInput.value = "";
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  // Abrir WhatsApp solo con el mensaje sin mostrar en chat
  function enviarWhatsApp() {
    const mensaje = userInput.value.trim();
    if (mensaje === "") {
      alert("Por favor escribe un mensaje antes de continuar.");
      return;
    }
    const saludo = "Hola, tengo una consulta:";
    const mensajeFinal = `${saludo} ${mensaje}`;
    const url = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(mensajeFinal)}`;
    window.open(url, "_blank");
    userInput.value = "";
  }
});


// assets/js/accesibilidad.js

  const toggleBtn = document.getElementById("toggleConfig");
  const configPanel = document.getElementById("configPanel");
  const modeSwitch = document.getElementById("modeSwitch");
  const body = document.body;

  // Mostrar/ocultar pestaña
  toggleBtn.addEventListener("click", () => {
    configPanel.style.display = configPanel.style.display === "none" ? "block" : "none";
  });

  // Aplicar configuración guardada al cargar la página
  window.addEventListener("DOMContentLoaded", () => {
    // Modo nocturno
    const savedMode = localStorage.getItem("modoOscuro");
    if (savedMode === "true") {
      body.classList.add("bg-dark", "text-white");
      modeSwitch.checked = true;
    }

    // Tamaño de fuente
    const savedFontSize = localStorage.getItem("tamanoFuente");
    if (savedFontSize) {
      body.style.fontSize = savedFontSize + "%";
      currentFontSize = parseInt(savedFontSize);
    }
  });

  // Cambiar modo oscuro/diurno
  modeSwitch.addEventListener("change", function () {
    if (this.checked) {
      body.classList.add("bg-dark", "text-white");
      localStorage.setItem("modoOscuro", "true");
    } else {
      body.classList.remove("bg-dark", "text-white");
      localStorage.setItem("modoOscuro", "false");
    }
  });

  // Control de fuente
  let currentFontSize = parseInt(localStorage.getItem("tamanoFuente")) || 100;

  function changeFontSize(action) {
    if (action === "increase") currentFontSize += 10;
    else if (action === "decrease") currentFontSize = Math.max(60, currentFontSize - 10); // mínimo 60%

    body.style.fontSize = currentFontSize + "%";
    localStorage.setItem("tamanoFuente", currentFontSize);
  }

