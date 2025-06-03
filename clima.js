
document.addEventListener("DOMContentLoaded", function () {
  const ciudadSelect = document.getElementById("ciudadSelect");
  const weatherInfo = document.getElementById("weatherInfo");
  const apiKey = '8c96eec4b25e570bea44db98b462f82f'; // reemplaza por tu clave real

  function obtenerClima(ciudad) {
    fetch(`https://api.openweathermap.org/data/2.5/weather?q=${ciudad}&units=metric&lang=es&appid=${apiKey}`)
      .then(response => {
        if (!response.ok) {
          throw new Error("Error en la respuesta del clima");
        }
        return response.json();
      })
      .then(data => {
        const temp = Math.round(data.main.temp);
        const desc = data.weather[0].description;
        const icon = data.weather[0].icon;
        const iconUrl = `https://openweathermap.org/img/wn/${icon}.png`;

        weatherInfo.innerHTML = `
          <img src="${iconUrl}" alt="${desc}" style="width: 24px; height: 24px;" class="me-1">
          <span>${temp}°C, ${desc}</span>
        `;
      })
      .catch(error => {
        console.error(error);
        weatherInfo.innerHTML = `<span class="text-danger">Clima no disponible</span>`;
      });
  }

  // Evento al cambiar ciudad
  ciudadSelect.addEventListener("change", function () {
    obtenerClima(this.value);
  });

  // Cargar clima inicial (ciudad seleccionada por defecto)
  obtenerClima(ciudadSelect.value);
});

