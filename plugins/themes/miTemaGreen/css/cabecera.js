// custom-header.js - Personalización de cabecera para OJS

document.addEventListener('DOMContentLoaded', function() {
  // Seleccionar el elemento de cabecera existente
  const header = document.querySelector('#header');
  
  // Si no existe el header, lo creamos
  if (!header) {
    const body = document.querySelector('body');
    const newHeader = document.createElement('header');
    newHeader.id = 'header';
    body.insertBefore(newHeader, body.firstChild);
  }
  
  // HTML personalizado para la cabecera
  const headerHTML = `
    <div class="custom-header-container">
      <div class="logo-title-container">
        <div class="logo-container">
          <!-- Reemplaza con la ruta correcta a tu logo -->
          <img src="/public/journals/1/journalHeaderLogoImage_es_ES.png" 
               alt="Green World Journal Logo" 
               class="custom-logo">
        </div>
        <div class="title-container">
          <h1 class="journal-title">Green World Journal</h1>
          <p class="journal-issn">e-ISSN 2737-6109</p>
        </div>
      </div>
      <div class="journal-description">
        <p>Natural and Environmental Sciences</p>
      </div>
    </div>
  `;
  
  // Aplicar el HTML personalizado
  document.querySelector('#header').innerHTML = headerHTML;
  
  // Añadir estilos dinámicamente
  const style = document.createElement('style');
  style.textContent = `
    /* Estilos para la cabecera personalizada */
    #header {
      background: linear-gradient(135deg, #2c3e50, #1a6a3a);
      color: white;
      padding: 1.5rem 0;
      margin-bottom: 2rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    .custom-header-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    .logo-title-container {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      margin-bottom: 0.5rem;
    }
    
    .custom-logo {
      height: 80px;
      width: auto;
      object-fit: contain;
      filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
    }
    
    .title-container {
      flex: 1;
    }
    
    .journal-title {
      margin: 0;
      font-size: 2.5rem;
      font-weight: 700;
      letter-spacing: 1px;
      color: white;
      text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    .journal-issn {
      margin: 0;
      font-size: 1rem;
      color: #bdc3c7;
      font-style: italic;
    }
    
    .journal-description {
      border-top: 1px solid rgba(255,255,255,0.2);
      padding-top: 0.5rem;
    }
    
    .journal-description p {
      margin: 0;
      font-size: 1.2rem;
      font-weight: 500;
      color: #ecf0f1;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .logo-title-container {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
      }
      
      .journal-title {
        font-size: 2rem;
      }
      
      .custom-logo {
        height: 60px;
      }
    }
  `;
  
  // Añadir los estilos al documento
  document.head.appendChild(style);
  
  // Opcional: Añadir efecto de scroll
  window.addEventListener('scroll', function() {
    const header = document.querySelector('#header');
    if (window.scrollY > 50) {
      header.style.padding = '0.5rem 0';
      header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
    } else {
      header.style.padding = '1.5rem 0';
      header.style.boxShadow = '0 4px 12px rgba(0,0,0,0.15)';
    }
  });
});