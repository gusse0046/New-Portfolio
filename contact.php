<?php
require_once 'config.php';
$pageTitle = 'Kontak';
include 'header.php';
?>

<main>
    <!-- Contact Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-badge">Hubungi Saya</div>
                <h1 class="page-title">Mari Berkolaborasi</h1>
                <p class="page-subtitle">Saya terbuka untuk diskusi project, peluang kerja, atau sekadar sharing tentang teknologi</p>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <!-- Contact Info -->
                <div class="contact-info-section">
                    <h2 class="contact-info-title">Informasi Kontak</h2>
                    <p class="contact-info-description">
                        Jangan ragu untuk menghubungi saya melalui salah satu channel di bawah ini. 
                        Saya akan merespon sesegera mungkin.
                    </p>
                    
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div class="method-content">
                                <h3>Email</h3>
                                <a href="mailto:<?php echo $personalData['email']; ?>"><?php echo $personalData['email']; ?></a>
                                <p>Respon dalam 24 jam</p>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="method-icon">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div class="method-content">
                                <h3>Telepon / WhatsApp</h3>
                                <a href="tel:<?php echo $personalData['phone']; ?>"><?php echo $personalData['phone']; ?></a>
                                <p>Senin - Jumat, 09:00 - 17:00</p>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="method-icon">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="method-content">
                                <h3>Alamat</h3>
                                <p><?php echo $personalData['address']; ?></p>
                                <p class="text-muted">Jawa Tengah, Indonesia</p>
                            </div>
                        </div>
                    </div>

                    <div class="availability-card">
                        <div class="availability-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div class="availability-content">
                            <h4>Availability Status</h4>
                            <div class="status-badge">
                                <span class="status-dot"></span>
                                Tersedia untuk Project
                            </div>
                            <p>Saya terbuka untuk peluang kerja full-time, freelance, atau project collaboration</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-section">
                    <div class="form-card">
                        <h2 class="form-title">Kirim Pesan</h2>
                        <p class="form-description">Isi form di bawah ini dan saya akan segera menghubungi Anda kembali</p>
                        
                        <form class="contact-form" id="contactForm">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="nama@email.com" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Nomor Telepon</label>
                                    <input type="tel" id="phone" name="phone" placeholder="08xxxxxxxxxx">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select id="subject" name="subject" required>
                                    <option value="">Pilih subject pesan</option>
                                    <option value="job">Peluang Kerja</option>
                                    <option value="project">Project / Freelance</option>
                                    <option value="collaboration">Collaboration</option>
                                    <option value="consultation">Konsultasi Teknis</option>
                                    <option value="other">Lainnya</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message">Pesan</label>
                                <textarea id="message" name="message" rows="6" placeholder="Ceritakan lebih detail tentang kebutuhan atau pertanyaan Anda..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">
                                <span>Kirim Pesan</span>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                            </button>

                            <p class="form-notice">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg>
                                Form ini untuk demo purposes. Data tidak akan dikirim ke server.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact Section -->
    <section class="quick-contact-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Cara Cepat Menghubungi</h2>
                <p class="section-subtitle">Pilih channel komunikasi yang paling nyaman untuk Anda</p>
            </div>

            <div class="quick-contact-grid">
                <a href="mailto:<?php echo $personalData['email']; ?>" class="quick-contact-card">
                    <div class="quick-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <h3>Email Langsung</h3>
                    <p>Kirim email untuk diskusi detail</p>
                    <span class="quick-link">
                        <?php echo $personalData['email']; ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </span>
                </a>

                <a href="https://wa.me/62<?php echo substr($personalData['phone'], 1); ?>" target="_blank" class="quick-contact-card">
                    <div class="quick-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <h3>WhatsApp</h3>
                    <p>Chat langsung untuk respon cepat</p>
                    <span class="quick-link">
                        Mulai Chat
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </span>
                </a>

                <a href="tel:<?php echo $personalData['phone']; ?>" class="quick-contact-card">
                    <div class="quick-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <h3>Telepon</h3>
                    <p>Hubungi untuk diskusi langsung</p>
                    <span class="quick-link">
                        <?php echo $personalData['phone']; ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>