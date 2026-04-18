<?php
require_once 'config.php';
$pageTitle = 'Portfolio';
include 'header.php';

// Mapping project images
$projectImages = [
    'Automatic Billing SAP Integration' => 'billing1.png',
    'Buyer Portal Marketplace' => 'buyer.png',
    'Container Booking System' => 'booking.png',
    'Monitoring PO System' => 'monitoringpo.png',
    'Stock Hotbox Monitoring' => 'stockhotbox.png'
];
?>

<main>
    <!-- Portfolio Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-badge">Portfolio</div>
                <h1 class="page-title">Project & Sistem Enterprise</h1>
                <p class="page-subtitle">Koleksi sistem yang telah saya kembangkan untuk mendukung operasional bisnis perusahaan</p>
            </div>
        </div>
    </section>

    <!-- Portfolio Stats -->
    <section class="portfolio-stats-section">
        <div class="container">
            <div class="stats-grid-portfolio">
                <div class="stat-card-portfolio">
                    <div class="stat-icon-portfolio">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3 class="stat-number-portfolio">5</h3>
                    <p class="stat-label-portfolio">Sistem Enterprise</p>
                </div>
                <div class="stat-card-portfolio">
                    <div class="stat-icon-portfolio">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M12 1v6m0 6v6m5.2-13.2l-4.2 4.2m0 6l4.2 4.2M23 12h-6m-6 0H5m13.2 5.2l-4.2-4.2m0-6l4.2-4.2"></path>
                        </svg>
                    </div>
                    <h3 class="stat-number-portfolio">5</h3>
                    <p class="stat-label-portfolio">SAP Integration</p>
                </div>
                <div class="stat-card-portfolio">
                    <div class="stat-icon-portfolio">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="stat-number-portfolio">15+</h3>
                    <p class="stat-label-portfolio">Buyer Internasional</p>
                </div>
                <div class="stat-card-portfolio">
                    <div class="stat-icon-portfolio">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>
                    <h3 class="stat-number-portfolio">70%</h3>
                    <p class="stat-label-portfolio">Peningkatan Efisiensi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="portfolio-grid-section">
        <div class="container">
            <?php foreach($portfolios as $index => $project): ?>
            <div class="portfolio-item" id="<?php echo strtolower(str_replace(' ', '-', explode(' ', $project['title'])[0])); ?>">
                <div class="portfolio-content">
                    <div class="portfolio-header">
                        <div class="portfolio-number"><?php echo sprintf('%02d', $index + 1); ?></div>
                        <span class="portfolio-badge">Production</span>
                    </div>
                    <h2 class="portfolio-title"><?php echo $project['title']; ?></h2>
                    <p class="portfolio-subtitle"><?php echo $project['subtitle']; ?></p>
                    <p class="portfolio-description"><?php echo $project['description']; ?></p>
                    
                    <div class="portfolio-features">
                        <h4 class="features-title">Key Features:</h4>
                        <ul class="features-list">
                            <?php foreach($project['features'] as $feature): ?>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <?php echo $feature; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="portfolio-tech">
                        <h4 class="tech-title">Technology Stack:</h4>
                        <div class="tech-badges">
                            <?php foreach($project['technologies'] as $tech): ?>
                            <span class="tech-badge"><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <div class="portfolio-actions">
                        <a href="<?php echo $project['url']; ?>" target="_blank" class="btn btn-primary">
                            <span>Visit Live Site</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                <polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="portfolio-visual">
                    <div class="portfolio-image-wrapper">
                        <div class="portfolio-decoration"></div>
                        <div class="browser-mockup">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="browser-url"><?php echo str_replace(['https://', 'http://'], '', $project['url']); ?></div>
                            </div>
                            <div class="browser-content">
                                <?php if(isset($projectImages[$project['title']])): ?>
                                    <img src="<?php echo $projectImages[$project['title']]; ?>" 
                                         alt="<?php echo $project['title']; ?>" 
                                         class="project-screenshot"
                                         loading="lazy">
                                <?php else: ?>
                                    <div class="placeholder-image">
                                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                            <polyline points="21 15 16 10 5 21"></polyline>
                                        </svg>
                                        <p><?php echo $project['title']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Technologies Overview -->
    <section class="tech-overview-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Technologies Used Across Projects</h2>
                <p class="section-subtitle">Tech stack yang konsisten digunakan dalam pengembangan sistem</p>
            </div>
            
            <div class="tech-categories">
                <div class="tech-category-card">
                    <h3>Backend Framework</h3>
                    <div class="tech-items">
                        <div class="tech-item">Laravel</div>
                        <div class="tech-item">PHP Native</div>
                        <div class="tech-item">Python</div>
                    </div>
                </div>
                
                <div class="tech-category-card">
                    <h3>Database & Integration</h3>
                    <div class="tech-items">
                        <div class="tech-item">MySQL</div>
                        <div class="tech-item">SAP RFC</div>
                        <div class="tech-item">API Integration</div>
                    </div>
                </div>
                
                <div class="tech-category-card">
                    <h3>Frontend Technologies</h3>
                    <div class="tech-items">
                        <div class="tech-item">JavaScript</div>
                        <div class="tech-item">jQuery</div>
                        <div class="tech-item">AJAX</div>
                        <div class="tech-item">Bootstrap</div>
                    </div>
                </div>
                
                <div class="tech-category-card">
                    <h3>Tools & Libraries</h3>
                    <div class="tech-items">
                        <div class="tech-item">Chart.js</div>
                        <div class="tech-item">DataTables</div>
                        <div class="tech-item">Email API</div>
                        <div class="tech-item">Notification System</div>
                    </div>
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
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <h2>Ingin Membangun Sistem Serupa?</h2>
                <p>Mari diskusikan kebutuhan sistem enterprise Anda. Saya siap membantu mengembangkan solusi yang tepat untuk bisnis Anda.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-light">
                        <span>Diskusi Project</span>
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