<?php get_header(); ?>

    <!-- Hero Section -->
    <section id="hero" class="container hero-section">
        <div class="hero-image-wrapper">
            <div class="hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg" alt="Emre Yılmaz Portrait">
            </div>
            <div class="floating-badge">
                <div class="badge-item">
                    <span class="badge-number">6+</span>
                    <span class="badge-text">YIL<br>DENEYİM</span>
                </div>
                <div class="badge-item">
                    <span class="badge-number">50+</span>
                    <span class="badge-text">TAMAMLANAN<br>PROJE</span>
                </div>
            </div>
        </div>

        <div class="hero-content">
            <p class="hero-subtitle">HELLO, I'M EMRE YILMAZ</p>
            <h1 class="hero-title">YARATICI<br><span class="highlight">KAŞİF</span></h1>
            <p class="hero-description">Web Tasarım Dünyasında tutkulu bir tasarımcı. İhtiyaçlarınızı ve hayallerinizi
                çarpıcı gerçekliğe dönüştürüyorum.</p>

            <div class="hero-buttons">
                <a href="#portfolio" class="btn btn-primary">Tüm Çalışmaları Gör <i
                        class="fa-solid fa-arrow-right"></i></a>
                <button class="btn btn-text trigger-contact-modal">İletişime Geç</button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container about-section">
        <div class="about-left">
            <h2 class="section-title">Hakkımda <span class="accent-dot">.</span></h2>
            <p class="about-text">Web tasarım yolculuğuma tutkuyla başlamış bir tasarımcı olarak, karmaşık problemleri
                basit, zarif ve kullanıcı dostu çözümlere dönüştürmeyi seviyorum. Tasarımın sadece görsel bir zevk işi
                değil; bir deneyim olduğuna inanıyorum.</p>

            <div class="about-details">
                <div class="detail-item">
                    <div class="detail-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <div class="detail-info">
                        <h4>Eğitim</h4>
                        <p>Web Tasarım ve Donanım Uzmanı</p>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="detail-info">
                        <h4>Konum</h4>
                        <p>Türkiye</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-right">
            <div class="skills-block">
                <h3 class="block-title">YETENEKLER</h3>
                <div class="skills-grid">
                    <div class="skill-card">Adobe Illustrator</div>
                    <div class="skill-card">Photoshop</div>
                    <div class="skill-card">HTML / CSS</div>
                    <div class="skill-card">Figma</div>
                    <div class="skill-card">Microsoft Word</div>
                </div>
            </div>

            <div class="experience-block">
                <h3 class="block-title">DENEYİM VE EĞİTİM</h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <h4>Makro IT Tasarımcı</h4>
                        <span class="timeline-date">2020 - Devam Ediyor</span>
                        <p>Küçük ve orta ölçekli işletmelerin web ortamlarına yönelik tasarımlar yapıyor, projeler
                            geliştiriyorum.</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Grafik & Logo Çalışmaları</h4>
                        <span class="timeline-date">2017 - 2020</span>
                        <p>Freelancer olarak Photoshop, Illustrator üzerinden markalara kurumsal kimlik çalışmaları
                            hazırladım.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="container services-section">
        <div class="section-header text-center">
            <h2 class="section-title">Neler Yapıyorum?</h2>
            <p class="section-subtitle">İhtiyaçlarınıza özel oluşturduğum çözümlerle yarının projelerine adım atıyoruz.
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-pen-nib"></i></div>
                <h3>Kullanıcı Deneyimi</h3>
                <p>Kullanıcı ihtiyaçlarını analiz ederek, basit ve kullanılabilir arayüzler tasarlıyorum. UX/UI
                    prensiplerini göz önüne alıyorum.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                <h3>Logo & Grafik Tasarım</h3>
                <p>Markanıza değer katacak, akılda kalıcı kurumsal kimlik tasarımları, logo ve banner çalışmaları
                    hazırlıyorum.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-laptop-code"></i></div>
                <h3>Web Sitesi Tasarımı</h3>
                <p>Projenize kurumsal web siteleri tasarlıyorum. Mobil uyumlu arayüzler inşa ediyorum.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                <h3>Arama Optimizasyonu</h3>
                <p>Web sitenizin arama motorlarında üst sıralara çıkması için gerekli SEO temel bileşenlerini
                    kurguluyorum.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-crop-simple"></i></div>
                <h3>Adobe Photoshop</h3>
                <p>Gelişmiş fotoğraf manipülasyonu, düzenleme, afiş ve kurumsal dijital varlıkları oluşturuyorum.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                <h3>Mobil Uyumluluk</h3>
                <p>Tüm mobil cihazlar, tablet ve masaüstü sistemlere uyumlu, hızlı çalışan web siteleri hazırlıyorum.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="container portfolio-section">
        <div class="portfolio-header">
            <div>
                <h2 class="section-title">Portfolyo</h2>
                <p class="section-subtitle">Tasarımlarımızı incelemek için portfolyomuzdaki işleri gözden geçirin.</p>
            </div>
            <!-- Linki istersen sitende yarattığın yeni Portfolyo sayfanın URL'sini kopyalayarak değiştirebilirsin -->
            <a href="portfolio.html" class="btn btn-text">Tümünü Gör <i
                    class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>

        <div class="portfolio-grid">
            <div class="portfolio-card large">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/port1.png" alt="Modern Portfolyo Arayüzü">
                </div>
                <div class="portfolio-info">
                    <h3>Modern Portfolyo Arayüzü</h3>
                    <div class="tags"><span class="tag">UI/UX</span><span class="tag">Tasarım</span></div>
                </div>
            </div>
            <div class="portfolio-card">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/port2.png" alt="Kurumsal Kimlik Çalışması">
                </div>
                <div class="portfolio-info">
                    <h3>Kurumsal Kimlik Çalışması</h3>
                    <div class="tags"><span class="tag">Logo</span><span class="tag">Marka Tescil</span></div>
                </div>
            </div>
            <div class="portfolio-card">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/port3.png" alt="E-ticaret Sitesi">
                </div>
                <div class="portfolio-info">
                    <h3>Giyim E-Ticareti & Arayüz</h3>
                    <div class="tags"><span class="tag">E-Ticaret</span><span class="tag">Geliştirme</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="container pricing-section">
        <div class="section-header text-center">
            <h2 class="section-title">Planlar & Ücretlendirme</h2>
            <p class="section-subtitle">İhtiyacınıza uygun tasarımı gerçekleştirmek için seçin.</p>
        </div>

        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Giriş</h3>
                <p class="price-desc">Basit ihtiyaçlar için ideal</p>
                <div class="price">
                    <span class="amount">200 TL</span> <span class="period">/ proje</span>
                </div>
                <ul class="features">
                    <li><i class="fa-solid fa-check"></i> 1 Sayfa Tasarımı</li>
                    <li><i class="fa-solid fa-check"></i> Temel Mobil Uyum</li>
                    <li><i class="fa-solid fa-check"></i> 1 Revizyon Hakkı</li>
                </ul>
                <button class="btn btn-outline-full trigger-modal">Hemen Başla</button>
            </div>

            <div class="pricing-card popular">
                <div class="popular-badge">EN ÇOK TERCİH EDİLEN</div>
                <h3>Orta</h3>
                <p class="price-desc">Küçük işletmeler ve profesyoneller için</p>
                <div class="price">
                    <span class="amount">400 TL</span> <span class="period">/ proje</span>
                </div>
                <ul class="features">
                    <li><i class="fa-solid fa-check"></i> 5 Sayfaya Kadar Tasarım</li>
                    <li><i class="fa-solid fa-check"></i> Logo & İkon Tasarımı</li>
                    <li><i class="fa-solid fa-check"></i> 3 Revizyon Hakkı</li>
                    <li><i class="fa-solid fa-check"></i> Hızlı Teslimat</li>
                </ul>
                <button class="btn btn-primary-full trigger-modal">Seç ve Başla</button>
            </div>

            <div class="pricing-card">
                <h3>Profesyonel</h3>
                <p class="price-desc">Kapsamlı daha büyük projeler için</p>
                <div class="price">
                    <span class="amount">800 TL</span> <span class="period">/ proje</span>
                </div>
                <ul class="features">
                    <li><i class="fa-solid fa-check"></i> Sınırsız Sayfa Tasarımı</li>
                    <li><i class="fa-solid fa-check"></i> Tam Kurumsal Kimlik</li>
                    <li><i class="fa-solid fa-check"></i> Sınırsız Revizyon</li>
                    <li><i class="fa-solid fa-check"></i> E-Ticaret Entegrasyonu</li>
                </ul>
                <button class="btn btn-outline-full trigger-modal">İletişime Geç</button>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="container faq-section">
        <div class="section-header text-center">
            <h2 class="section-title">Sıkça Sorulan Sorular</h2>
            <p class="section-subtitle">Aklınıza takılan soruların yanıtlarını burada bulabilirsiniz.</p>
        </div>

        <div class="accordion">
            <div class="accordion-item active">
                <button class="accordion-header">
                    Tasarım süreci nasıl ilerliyor?
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="accordion-content">
                    <p>Sürecimiz ihtiyaç analizi, fikir konseptini projelendirme, wireframe, prototipleme ve test
                        süreçleriyle devam eder. Size aşamalarla alakalı devamlı geri bildirimler sağlayarak, kusursuz
                        vizyonu oluştururuz.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    Ödemeyi nasıl yapabilirim?
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="accordion-content">
                    <p>Proje başlangıcında tutarın %50'si ön ödeme olarak alınmaktadır. Kalan tutar proje tesliminde
                        banka havalesi veya EFT yoluyla tahsil edilmektedir.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    Hangi araçları kullanıyorsunuz?
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="accordion-content">
                    <p>Tasarım süreçlerinde genellikle Figma ve Adobe XD kullanıyorum. Grafik ve logo düzenlemeleri için
                        Adobe Illustrator ve Photoshop tercih ediyorum. Geliştirme aşamasında ise HTML5, CSS3/SCSS ve
                        modern JavaScript (React/Vue) kullanmaktayım.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Modal Overlay -->
    <div id="pricingModal" class="modal-overlay">
        <div class="modal-content">
            <button class="close-modal"><i class="fa-solid fa-xmark"></i></button>
            <h2 id="modalPlanName">Plan Adı</h2>
            <div id="modalPlanPrice" class="modal-price">0 TL</div>
            <div class="modal-details">
                <p>Bu plana özel fırsatlar ve içerikler:</p>
                <ul id="modalPlanFeatures" class="features modal-features">
                    <!-- JS populate -->
                </ul>
            </div>
            <div class="modal-action">
                <a href="#contact" id="modalContactBtn" class="btn btn-primary-full">Bu Planı Talep Et</a>
            </div>
        </div>
    </div>

    <!-- Contact Info Modal -->
    <div id="contactInfoModal" class="modal-overlay">
        <div class="modal-content" style="text-align: center;">
            <button class="close-modal" aria-label="Kapat"><i class="fa-solid fa-xmark"></i></button>
            <div
                style="margin: 0 auto 1.5rem auto; width: 80px; height: 80px; font-size: 2.5rem; background: rgba(72, 202, 228, 0.1); color: var(--accent-cyan); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 25px rgba(72, 202, 228, 0.2);">
                <i class="fa-solid fa-handshake"></i>
            </div>
            <h2 style="font-size: 1.8rem; margin-bottom: 1rem; color: var(--text-primary);">Yeni bir proje mi
                düşünüyorsunuz?</h2>
            <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.7; margin-bottom: 2rem;">
                Fikriniz varsa birlikte hayata geçirebiliriz.<br>Bana yazın, konuşalım!
            </p>
            <button id="goToContactFormBtn" class="btn btn-primary-full"
                style="display: inline-block; width: auto; padding: 1rem 2.5rem; border-radius: 50px;">Aşağı Kaydır <i
                    class="fa-solid fa-arrow-down"></i></button>
        </div>
    </div>

<?php get_footer(); ?>
