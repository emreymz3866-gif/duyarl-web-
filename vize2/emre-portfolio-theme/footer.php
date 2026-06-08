    <!-- Footer / Contact Section -->
    <footer id="contact" class="footer-section">
        <div class="container footer-content">
            <div class="footer-left">
                <h2 class="section-title">Hayalinizdeki Projeyi<br><span class="highlight">Birlikte İnşa Edelim.</span>
                </h2>
                <p class="footer-desc">Yeni bir proje fikriniz mi var? Potansiyelinizle markanızı dijital dünyada
                    canlandıralım! Fikirlerinizi duymak için sabırsızlanıyorum.</p>

                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <span class="contact-label">E-POSTA</span>
                            <a href="mailto:emreyilmaz@gmail.com" class="contact-value">emreyilmaz@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <span class="contact-label">TELEFON</span>
                            <a href="tel:+905355555555" class="contact-value">+90 535 555 55 55</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-right">
                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">ADINIZ SOYADINIZ</label>
                            <input type="text" id="name" placeholder="Adınızı giriniz" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-POSTA</label>
                            <input type="email" id="email" placeholder="E-posta adresiniz" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">KONU</label>
                        <input type="text" id="subject" placeholder="Mesajınızın konusu">
                    </div>
                    <div class="form-group">
                        <label for="message">MESAJINIZ</label>
                        <textarea id="message" rows="4" placeholder="Projenizden veya fikrinizden bahsedin..."
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary-full submit-btn">Gönder <i
                            class="fa-solid fa-paper-plane"></i></button>
                </form>
            </div>
        </div>

        <div class="container bottom-footer">
            <div class="copyright">
                <a href="<?php echo home_url(); ?>" class="logo">&lt;EMRE YILMAZ /&gt;</a>
                <p>© <?php echo date('Y'); ?> Emre Yılmaz. Tüm Hakları Saklıdır.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTopBtn" class="back-to-top" aria-label="Yukarı Çık">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <?php wp_footer(); ?>
</body>

</html>
