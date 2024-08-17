document.addEventListener("DOMContentLoaded", function() {
  const title = document.getElementById("collarino-title");
  const description = document.getElementById("collarino-description");
  const image = document.getElementById("collarino-image");
  const text = "Il Cirneco antico cane siciliano, simboleggia la storia millenaria della Sicilia. Il logo della birra rendono omaggio a questa razza, evocando la sua eleganza e le radici profonde nell'isola. Ogni bottiglia diventa così un tributo alla tradizione e alla resilienza siciliana.";
  
  let index = 0;

  function typeText() {
    if (index < text.length) {
      description.textContent += text.charAt(index);
      index++;
      setTimeout(typeText, 50);
    }
  }

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        title.classList.add("visible");
        description.classList.add("visible");
        image.classList.add("visible");

        setTimeout(typeText, 1000); // Inizia a digitare il testo dopo un secondo
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1
  });

  observer.observe(document.getElementById("collarino-section"));
});


  // etichette
  document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card');
    const cardContainers = document.querySelectorAll('.card-container');
  
    cardContainers.forEach((container, index) => {
      const card = container.querySelector('.card');
      if (index < 2) {
        card.classList.add('slide-left');
      } else {
        card.classList.add('slide-right');
      }
    });
  
    window.addEventListener('scroll', () => {
      const triggerBottom = window.innerHeight / 5 * 4;
  
      cardContainers.forEach(container => {
        const card = container.querySelector('.card');
        const cardTop = container.getBoundingClientRect().top;
  
        if (cardTop < triggerBottom) {
          card.classList.add('visible');
        }
      });
    });
  });


  //birre
  document.addEventListener('DOMContentLoaded', function() {
    const productItems = document.querySelectorAll('.card-container-banner');
  
    const checkVisibility = () => {
      const triggerBottom = window.innerHeight / 5 * 4;
  
      productItems.forEach((item, index) => {
        const itemTop = item.getBoundingClientRect().top;
  
        if (itemTop < triggerBottom) {
          item.classList.add('visible');
          if (index % 2 === 0) {
            item.classList.add('left');
          } else {
            item.classList.add('right');
          }
        } else {
          item.classList.remove('visible', 'left', 'right');
        }
      });
    };
  
    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // Verifica iniziale
  });
// sezione social 
document.addEventListener('DOMContentLoaded', function() {
  const socialIcons = document.querySelectorAll('.social-icon');

  const checkVisibility = () => {
    const triggerBottom = window.innerHeight / 5 * 4;

    socialIcons.forEach(icon => {
      const iconTop = icon.getBoundingClientRect().top;

      if (iconTop < triggerBottom) {
        icon.classList.remove('hidden');
        icon.style.animation = ''; // Reset animation
        setTimeout(() => {
          icon.style.animation = icon.dataset.animation + ' 1.5s forwards';
        }, 100); 
      } else {
        icon.classList.add('hidden');
        icon.style.animation = 'none'; 
      }
    });
  };

  window.addEventListener('scroll', checkVisibility);
  checkVisibility(); 
});



// sezione card 
document.addEventListener('DOMContentLoaded', () => {
  const card = document.querySelector('.card');
  const extraInfo = document.querySelector('.extra-info');

  card.addEventListener('mouseover', () => {
    extraInfo.style.display = 'block';
    extraInfo.style.right = '0';
  });

  card.addEventListener('mouseleave', () => {
    extraInfo.style.right = '-250px';
    extraInfo.style.display = 'none';
  });
});



// H2 SUBTITLE 
//pop-up
document.addEventListener('DOMContentLoaded', () => {
  const agePopup = document.getElementById('age-verification-popup');
  const yesButton = document.getElementById('yes-button');
  const noButton = document.getElementById('no-button');

  // Mostra il pop-up solo se non è stato già accettato in precedenza
  if (!localStorage.getItem('ageVerified')) {
    agePopup.style.display = 'flex';
  }

  yesButton.addEventListener('click', () => {
    localStorage.setItem('ageVerified', 'true');
    agePopup.style.display = 'none';
  });

  noButton.addEventListener('click', () => {
    window.location.href = 'https://www.google.com'; // Reindirizza a Google o qualsiasi altro sito
  });
});
//script per il video 


document.addEventListener('DOMContentLoaded', function() {
  var video = document.querySelector('.video-background');

  function playVideo() {
     video.play().catch(function(error) {
        console.log("Riproduzione automatica fallita: " + error);
     });
  }


  document.addEventListener('touchstart', function() {
     playVideo();
  });

  video.addEventListener('canplaythrough', playVideo);

  if (video.readyState >= 3) {
     playVideo();
  }
});