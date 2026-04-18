<?php
require_once 'config.php';
$pageTitle = 'Tentang Saya';
include 'header.php';
?>

<main>
    <!-- About Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-badge">Tentang Saya</div>
                <h1 class="page-title">Mengenal Lebih Dekat</h1>
                <p class="page-subtitle">Perjalanan karir saya dalam dunia pemrograman dan pengembangan sistem enterprise</p>
            </div>
        </div>
    </section>

    <!-- About Content Section -->
    <section class="about-content">
        <div class="container">
            <div class="about-grid">
                <div class="about-image-section">
                    <div class="about-image-wrapper">
                        <div class="about-image-decoration"></div>
                        <img src="foto1.jpeg" alt="<?php echo $personalData['name']; ?>">
                        <div class="about-floating-card">
                            <div class="floating-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </div>
                            <div class="floating-text">
                                <div class="floating-value">6 Bulan</div>
                                <div class="floating-label">Management Trainee</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-text-section">
                    <h2 class="about-title">Programmer dengan Fokus pada Solusi Enterprise</h2>
                    <p class="about-description"><?php echo $personalData['summary']; ?></p>
                    
                    <div class="about-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                            </div>
                            <div class="highlight-content">
                                <h3>Pendidikan</h3>
                                <p><?php echo $personalData['education']; ?></p>
                                <span class="highlight-badge">IPK: <?php echo $personalData['gpa']; ?></span>
                            </div>
                        </div>

                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                            </div>
                            <div class="highlight-content">
                                <h3>Posisi Saat Ini</h3>
                                <p><?php echo $personalData['title']; ?></p>
                                <span class="highlight-badge">PT. Kayu Mebel Indonesia</span>
                            </div>
                        </div>

                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="highlight-content">
                                <h3>Lokasi</h3>
                                <p><?php echo $personalData['address']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section class="expertise-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Area Keahlian</h2>
                <p class="section-subtitle">Fokus utama dalam pengembangan sistem dan teknologi</p>
            </div>

            <div class="expertise-grid">
                <div class="expertise-card">
                    <div class="expertise-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3>Sistem Enterprise</h3>
                    <p>Pengembangan aplikasi enterprise dengan arsitektur yang scalable dan maintainable untuk mendukung operasional bisnis berskala besar.</p>
                    <div class="expertise-tags">
                        <span>ERP System</span>
                        <span>Dashboard</span>
                        <span>Automation</span>
                    </div>
                </div>

                <div class="expertise-card">
                    <div class="expertise-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M12 1v6m0 6v6m5.2-13.2l-4.2 4.2m0 6l4.2 4.2M23 12h-6m-6 0H5m13.2 5.2l-4.2-4.2m0-6l4.2-4.2"></path>
                        </svg>
                    </div>
                    <h3>SAP Integration</h3>
                    <p>Integrasi sistem dengan SAP menggunakan RFC untuk sinkronisasi data real-time dan otomasi proses bisnis.</p>
                    <div class="expertise-tags">
                        <span>SAP RFC</span>
                        <span>Data Sync</span>
                        <span>Middleware</span>
                    </div>
                </div>

                <div class="expertise-card">
                    <div class="expertise-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <h3>Full-Stack Development</h3>
                    <p>Pengembangan aplikasi web dari frontend hingga backend dengan framework modern dan best practices.</p>
                    <div class="expertise-tags">
                        <span>Laravel</span>
                        <span>PHP Native</span>
                        <span>JavaScript</span>
                    </div>
                </div>

                <div class="expertise-card">
                    <div class="expertise-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </div>
                    <h3>Database Management</h3>
                    <p>Perancangan dan optimasi database untuk performa tinggi dengan struktur data yang efisien dan aman.</p>
                    <div class="expertise-tags">
                        <span>MySQL</span>
                        <span>Query Optimization</span>
                        <span>Data Modeling</span>
                    </div>
                </div>

                <div class="expertise-card">
                    <div class="expertise-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Perancangan antarmuka yang user-friendly dengan fokus pada pengalaman pengguna yang optimal dan intuitif.</p>
                    <div class="expertise-tags">
                        <span>Wireframing</span>
                        <span>Prototyping</span>
                        <span>Responsive Design</span>
                    </div>
                </div>

                <div class="expertise-card">
                    <div class="expertise-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                        </svg>
                    </div>
                    <h3>System Integration</h3>
                    <p>Menghubungkan berbagai sistem dan platform untuk menciptakan ekosistem aplikasi yang terintegrasi.</p>
                    <div class="expertise-tags">
                        <span>API Development</span>
                        <span>Third-party Integration</span>
                        <span>Automation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Personal Info Section -->
    <section class="personal-info-section">
        <div class="container">
            <div class="personal-info-grid">
                <div class="personal-info-content">
                    <h2 class="section-title">Informasi Kontak</h2>
                    <p class="section-subtitle">Jangan ragu untuk menghubungi saya jika Anda memiliki pertanyaan atau ingin berdiskusi tentang project</p>
                    
                    <div class="contact-info-list">
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div class="contact-text">
                                <div class="contact-label">Email</div>
                                <a href="mailto:<?php echo $personalData['email']; ?>" class="contact-value"><?php echo $personalData['email']; ?></a>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div class="contact-text">
                                <div class="contact-label">Telepon</div>
                                <a href="tel:<?php echo $personalData['phone']; ?>" class="contact-value"><?php echo $personalData['phone']; ?></a>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="contact-text">
                                <div class="contact-label">Alamat</div>
                                <div class="contact-value"><?php echo $personalData['address']; ?></div>
                            </div>
                        </div>
                    </div>

                    <a href="contact.php" class="btn btn-primary">
                        <span>Hubungi Saya</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>

                <div class="personal-info-image">
                    <img src="foto2.jpeg" alt="<?php echo $personalData['name']; ?>">
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>