<?php
require_once 'config.php';
$pageTitle = 'Keahlian';
include 'header.php';
?>

<main>
    <!-- Skills Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-badge">Keahlian</div>
                <h1 class="page-title">Teknologi & Keahlian</h1>
                <p class="page-subtitle">Tech stack dan tools yang saya kuasai untuk pengembangan sistem enterprise</p>
            </div>
        </div>
    </section>

    <!-- Programming Skills -->
    <section class="skills-section">
        <div class="container">
            <div class="skills-category-header">
                <div class="category-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="16 18 22 12 16 6"></polyline>
                        <polyline points="8 6 2 12 8 18"></polyline>
                    </svg>
                </div>
                <div class="category-text">
                    <h2 class="category-title">Bahasa Pemrograman</h2>
                    <p class="category-description">Bahasa pemrograman yang saya gunakan dalam pengembangan aplikasi web dan sistem enterprise</p>
                </div>
            </div>

            <div class="skills-list">
                <?php foreach($skills['programming'] as $skill): ?>
                <div class="skill-item">
                    <div class="skill-info">
                        <h3 class="skill-name"><?php echo $skill['name']; ?></h3>
                        <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: <?php echo $skill['level']; ?>%"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Database Skills -->
    <section class="skills-section">
        <div class="container">
            <div class="skills-category-header">
                <div class="category-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                    </svg>
                </div>
                <div class="category-text">
                    <h2 class="category-title">Database & Integration</h2>
                    <p class="category-description">Keahlian dalam manajemen database dan integrasi sistem enterprise</p>
                </div>
            </div>

            <div class="skills-list">
                <?php foreach($skills['database'] as $skill): ?>
                <div class="skill-item">
                    <div class="skill-info">
                        <h3 class="skill-name"><?php echo $skill['name']; ?></h3>
                        <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: <?php echo $skill['level']; ?>%"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Tools Skills -->
    <section class="skills-section">
        <div class="container">
            <div class="skills-category-header">
                <div class="category-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                    </svg>
                </div>
                <div class="category-text">
                    <h2 class="category-title">Development Tools</h2>
                    <p class="category-description">Tools dan software yang saya gunakan untuk produktivitas development</p>
                </div>
            </div>

            <div class="skills-list">
                <?php foreach($skills['tools'] as $skill): ?>
                <div class="skill-item">
                    <div class="skill-info">
                        <h3 class="skill-name"><?php echo $skill['name']; ?></h3>
                        <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: <?php echo $skill['level']; ?>%"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Design Skills -->
    <section class="skills-section">
        <div class="container">
            <div class="skills-category-header">
                <div class="category-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                </div>
                <div class="category-text">
                    <h2 class="category-title">Desain Grafis & UI/UX</h2>
                    <p class="category-description">Tools desain untuk membuat antarmuka yang menarik dan user-friendly</p>
                </div>
            </div>

            <div class="skills-list">
                <?php foreach($skills['design'] as $skill): ?>
                <div class="skill-item">
                    <div class="skill-info">
                        <h3 class="skill-name"><?php echo $skill['name']; ?></h3>
                        <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: <?php echo $skill['level']; ?>%"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Additional Skills Section -->
    <section class="additional-skills-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Kompetensi Tambahan</h2>
                <p class="section-subtitle">Keahlian pendukung yang melengkapi kemampuan teknis saya</p>
            </div>

            <div class="additional-skills-grid">
                <div class="additional-skill-card">
                    <div class="additional-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Teamwork & Collaboration</h3>
                    <p>Kemampuan bekerja dalam tim lintas divisi dan berkolaborasi dengan berbagai stakeholder</p>
                </div>

                <div class="additional-skill-card">
                    <div class="additional-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </div>
                    <h3>Problem Solving</h3>
                    <p>Analisis masalah dan memberikan solusi teknis yang efektif untuk kebutuhan bisnis</p>
                </div>

                <div class="additional-skill-card">
                    <div class="additional-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3>Time Management</h3>
                    <p>Mengelola waktu dan prioritas project dengan deadline yang ketat</p>
                </div>

                <div class="additional-skill-card">
                    <div class="additional-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </div>
                    <h3>Fast Learner</h3>
                    <p>Cepat beradaptasi dengan teknologi baru dan requirement bisnis yang dinamis</p>
                </div>

                <div class="additional-skill-card">
                    <div class="additional-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <h3>System Architecture</h3>
                    <p>Merancang arsitektur sistem yang scalable, maintainable, dan secure</p>
                </div>

                <div class="additional-skill-card">
                    <div class="additional-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <h3>Documentation</h3>
                    <p>Membuat dokumentasi teknis yang jelas untuk maintainability sistem</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="cta-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                    </svg>
                </div>
                <h2>Lihat Penerapan Keahlian Saya</h2>
                <p>Jelajahi portfolio untuk melihat bagaimana saya menerapkan keahlian ini dalam project nyata</p>
                <div class="cta-buttons">
                    <a href="portfolio.php" class="btn btn-light">
                        <span>Lihat Portfolio</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="experience.php" class="btn btn-outline-light">
                        <span>Lihat Pengalaman</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>