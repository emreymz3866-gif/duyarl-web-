// Navbar Scroll Effect
const header = document.getElementById('header');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// FAQ Accordion
const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
    const header = item.querySelector('.accordion-header');
    
    header.addEventListener('click', () => {
        // Toggle current item
        item.classList.toggle('active');
        
        // Optional: Close other items
        accordionItems.forEach(otherItem => {
            if (otherItem !== item && otherItem.classList.contains('active')) {
                otherItem.classList.remove('active');
            }
        });
    });
});

// Smooth Scroll for Anchor Links (if CSS smooth scroll is not fully supported or needs an offset)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');
        if(targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        
        if (targetElement) {
            e.preventDefault();
            
            // Calculate offset for fixed header
            const headerHeight = document.getElementById('header').offsetHeight;
            const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight - 20;
            
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Form Submission Mock with Animation
const contactForm = document.getElementById('contactForm');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const btn = contactForm.querySelector('button[type="submit"]');
        
        // Adım 1: Uçuş animasyonunu başlat
        btn.classList.add('sending');
        btn.disabled = true;
        
        // Adım 2: Uçak gittikten sonra yükleniyor animasyonu
        setTimeout(() => {
            btn.innerHTML = 'İletiliyor... <i class="fa-solid fa-spinner fa-spin"></i>';
        }, 800);
        
        // Adım 3: Başarılı duruma geçiş
        setTimeout(() => {
            btn.classList.remove('sending');
            btn.classList.add('sent');
            btn.innerHTML = 'Harika! Mesajınız İletildi <i class="fa-solid fa-check"></i>';
            
            // Formu temizle
            contactForm.reset();
            
            // Adım 4: 3.5 saniye sonra butonu sıfırla
            setTimeout(() => {
                btn.classList.remove('sent');
                btn.innerHTML = 'Gönder <i class="fa-solid fa-paper-plane"></i>';
                btn.disabled = false;
            }, 3500);
            
        }, 2500);
    });
}

// Pricing Modal Logic
const modalOverlay = document.getElementById('pricingModal');
const modalCloseBtns = document.querySelectorAll('.close-modal');
const modalTriggers = document.querySelectorAll('.trigger-modal');

if (modalOverlay) {
    modalTriggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const card = btn.closest('.pricing-card');
            
            if(card) {
                // Determine Plan Info
                const planName = card.querySelector('h3').innerText;
                const priceAmount = card.querySelector('.amount').innerText;
                const pricePeriod = card.querySelector('.period').innerText;
                const featuresInfo = card.querySelector('.features').innerHTML;
                
                // Inject into Modal
                document.getElementById('modalPlanName').innerText = planName + ' Planı';
                document.getElementById('modalPlanPrice').innerHTML = `${priceAmount} <span class="period">${pricePeriod}</span>`;
                document.getElementById('modalPlanFeatures').innerHTML = featuresInfo;
                
                // Attach dynamic subject to CTA
                document.getElementById('modalContactBtn').onclick = () => {
                    modalOverlay.classList.remove('active');
                    const subjectInput = document.getElementById('subject');
                    if(subjectInput) {
                        subjectInput.value = planName + ' Planı ile ilgileniyorum';
                    }
                };
            }
            
            // Show modal
            modalOverlay.classList.add('active');
        });
    });
    
    // Close Modal when X is clicked
    modalCloseBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            modalOverlay.classList.remove('active');
        });
    });
    
    // Close Modal when clicking outside the box
    modalOverlay.addEventListener('click', (e) => {
        if (e.target === modalOverlay) {
            modalOverlay.classList.remove('active');
        }
    });
}

// Contact Greeting Modal Logic
const contactModal = document.getElementById('contactInfoModal');
const contactTriggers = document.querySelectorAll('.trigger-contact-modal');
const goToContactBtn = document.getElementById('goToContactFormBtn');

if (contactModal) {
    // Open Modal
    contactTriggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            contactModal.classList.add('active');
        });
    });

    // Close logic is already handled by the generic close-modal classes usually, 
    // but just in case we add it specifically for this modal:
    const contactCloseBtns = contactModal.querySelectorAll('.close-modal');
    contactCloseBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            contactModal.classList.remove('active');
        });
    });

    contactModal.addEventListener('click', (e) => {
        if (e.target === contactModal) {
            contactModal.classList.remove('active');
        }
    });

    // Go down to contact form 
    if(goToContactBtn) {
        goToContactBtn.addEventListener('click', () => {
            contactModal.classList.remove('active');
            
            const targetElement = document.getElementById('contact');
            if(targetElement) {
                const headerHeight = document.getElementById('header').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    }
}

// Back to Top Button Logic
const backToTopBtn = document.getElementById('backToTopBtn');

if (backToTopBtn) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Mobile Menu Toggle
const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');

if (menuToggle && navLinks) {
    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        const icon = menuToggle.querySelector('i');
        if (navLinks.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-xmark');
        } else {
            icon.classList.remove('fa-xmark');
            icon.classList.add('fa-bars');
        }
    });

    // Close menu when a link is clicked
    navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            const icon = menuToggle.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }
        });
    });
}
