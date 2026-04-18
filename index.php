<?php
require_once 'config.php';
$pageTitle = 'Beranda';
include 'header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                        <span>Tersedia untuk Project</span>
                    </div>
                    <h1 class="hero-title">
                        Halo, Saya <br><span class="highlight"><?php echo $personalData['name']; ?></span>
                    </h1>
                    <p class="hero-subtitle"><?php echo $personalData['title']; ?></p>
                    <p class="hero-description">
                       Berpengalaman membangun sistem web berbasis Laravel dan integrasi SAP untuk 
mendukung efisiensi operasional bisnis. Siap bergabung dengan tim yang 
berdedikasi untuk menciptakan solusi teknologi yang berdampak nyata.
                    </p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-value">5+</div>
                            <div class="stat-label">Sistem Enterprise</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">6</div>
                            <div class="stat-label">Bulan MT</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">SAP</div>
                            <div class="stat-label">Integration</div>
                        </div>
                    </div>
                    <div class="hero-buttons">
                        <a href="portfolio.php" class="btn btn-primary">
                            <span>Lihat Portfolio</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                        <a href="contact.php" class="btn btn-secondary">
                            <span>Hubungi Saya</span>
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="profile-wrapper">
                        <div class="profile-decoration"></div>
                        <img src="foto1.jpeg" alt="<?php echo $personalData['name']; ?>" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="featured-section">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Portfolio</div>
                <h2 class="section-title">Project Unggulan</h2>
                <p class="section-subtitle">Beberapa sistem enterprise yang telah saya kembangkan untuk mendukung operasional bisnis</p>
            </div>
            <div class="featured-grid">
                <?php 
                $featuredProjects = array_slice($portfolios, 0, 3);
                foreach($featuredProjects as $index => $project): 
                ?>
                <div class="project-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="project-card-header">
                        <div class="project-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                        </div>
                        <span class="project-badge">Featured</span>
                    </div>
                    <h3 class="project-title"><?php echo $project['title']; ?></h3>
                    <p class="project-subtitle"><?php echo $project['subtitle']; ?></p>
                    <p class="project-description"><?php echo substr($project['description'], 0, 150); ?>...</p>
                    <div class="project-tech">
                        <?php foreach(array_slice($project['technologies'], 0, 4) as $tech): ?>
                        <span class="tech-badge"><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?php echo $project['url']; ?>" target="_blank" class="project-link">
                        <span>Lihat Project</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="section-cta">
                <a href="portfolio.php" class="btn btn-outline">
                    <span>Lihat Semua Portfolio</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Skills Preview Section -->
    <section class="skills-preview">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Keahlian</div>
                <h2 class="section-title">Teknologi & Tools</h2>
                <p class="section-subtitle">Tech stack yang saya gunakan dalam pengembangan sistem</p>
            </div>
            <div class="skills-grid">
                <div class="skill-category">
                    <div class="skill-category-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                    <h3>Programming</h3>
                    <div class="skill-tags">
                        <?php foreach(array_slice($skills['programming'], 0, 5) as $skill): ?>
                        <span class="skill-tag"><?php echo $skill['name']; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="skill-category">
                    <div class="skill-category-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </div>
                    <h3>Database & Integration</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">SAP RFC</span>
                        <span class="skill-tag">Business Central</span>
                    </div>
                </div>
                <div class="skill-category">
                    <div class="skill-category-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                    </div>
                    <h3>Design & UI/UX</h3>
                    <div class="skill-tags">
                        <?php foreach($skills['design'] as $skill): ?>
                        <span class="skill-tag"><?php echo $skill['name']; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="section-cta">
                <a href="skills.php" class="btn btn-secondary">Lihat Semua Keahlian</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="cta-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <h2>Tertarik Berkolaborasi?</h2>
                <p>Saya terbuka untuk peluang kerja, project freelance, atau diskusi teknis seputar pengembangan sistem enterprise dan integrasi SAP.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-light">
                        <span>Hubungi Saya</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="mailto:agussafii102@gmail.com" class="btn btn-outline-light">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>Email Langsung</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>