<?php
require_once 'config.php';
$pageTitle = 'Pengalaman';
include 'header.php';
?>

<main>
    <!-- Experience Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="section-badge">Pengalaman</div>
                <h1 class="page-title">Perjalanan Karir</h1>
                <p class="page-subtitle">Pengalaman profesional dalam pengembangan sistem enterprise dan integrasi SAP</p>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="experience-timeline-section">
        <div class="container">
            <?php foreach($experience as $exp): ?>
            <div class="experience-timeline-item">
                <div class="timeline-marker">
                    <div class="timeline-dot"></div>
                    <div class="timeline-line"></div>
                </div>
                
                <div class="experience-card">
                    <div class="experience-header">
                        <div class="experience-title-section">
                            <h2 class="experience-position"><?php echo $exp['position']; ?></h2>
                            <p class="experience-division"><?php echo $exp['division']; ?></p>
                        </div>
                        <div class="experience-badge"><?php echo $exp['period']; ?></div>
                    </div>
                    
                    <div class="experience-company-info">
                        <div class="company-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                        </div>
                        <div class="company-text">
                            <strong><?php echo $exp['company']; ?></strong>
                            <span><?php echo $exp['location']; ?></span>
                        </div>
                        <div class="experience-duration">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <?php echo $exp['duration']; ?>
                        </div>
                    </div>
                    
                    <p class="experience-description"><?php echo $exp['description']; ?></p>
                    
                    <div class="experience-achievements">
                        <h3 class="achievements-title">Pencapaian & Kontribusi:</h3>
                        <ul class="achievements-list">
                            <?php foreach($exp['achievements'] as $achievement): ?>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span><?php echo $achievement; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Projects Contribution Section -->
    <section class="projects-contribution-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Sistem yang Telah Dikembangkan</h2>
                <p class="section-subtitle">Detail sistem enterprise yang telah saya bangun selama program Management Trainee</p>
            </div>

            <div class="projects-grid">
                <!-- Project 1: Billing System -->
                <div class="project-detail-card">
                    <div class="project-number">01</div>
                    <div class="project-detail-header">
                        <div class="project-icon-large">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h3 class="project-detail-title">Sistem Automatic Billing SAP → Laravel Integration</h3>
                            <a href="https://billing.kayumebel.net" target="_blank" class="project-url">billing.kayumebel.net</a>
                        </div>
                    </div>
                    <p class="project-detail-description">
                        Mengembangkan sistem billing otomatis yang menghubungkan SAP dengan platform Laravel untuk 
                        memproses invoice secara real-time. Sistem ini mampu mengidentifikasi kondisi billing di SAP, 
                        generate dokumen otomatis (Invoice, Packing List, Payment Instruction), dan mengirimkan ke buyer 
                        melalui email dengan attachment lengkap.
                    </p>
                    <div class="project-features-list">
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Middleware SAP RFC untuk sinkronisasi data real-time
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Multi-department dashboard (Admin Finance, Exim, Logistic)
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Email automation dengan retry mechanism
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Meningkatkan efisiensi proses billing hingga 70%
                        </div>
                    </div>
                    <div class="project-tech-stack">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">SAP RFC</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">AJAX</span>
                        <span class="tech-tag">Email API</span>
                    </div>
                </div>

                <!-- Project 2: Buyer Portal -->
                <div class="project-detail-card">
                    <div class="project-number">02</div>
                    <div class="project-detail-header">
                        <div class="project-icon-large">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="project-detail-title">Buyer Portal Marketplace</h3>
                            <a href="https://buyer-portal.kayumebel.net" target="_blank" class="project-url">buyer-portal.kayumebel.net</a>
                        </div>
                    </div>
                    <p class="project-detail-description">
                        Membangun sistem marketplace internal B2B yang memfasilitasi komunikasi dan transaksi antara 
                        perusahaan dengan buyer internasional. Platform ini mendukung multi-login dari berbagai buyer 
                        seperti ETHAN ALLEN, CENTURY FURNITURE, ROWE, ARHAUS, dan buyer lainnya dengan sistem keamanan 
                        yang robust dan fitur lengkap seperti e-commerce modern.
                    </p>
                    <div class="project-features-list">
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Multi-tenant system untuk 10+ buyer internasional
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Product catalog dengan advanced filtering
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Real-time order tracking dan status update
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Invoice dan document management system
                        </div>
                    </div>
                    <div class="project-tech-stack">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">Bootstrap</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">Authentication</span>
                    </div>
                </div>

                <!-- Project 3: Container Booking -->
                <div class="project-detail-card">
                    <div class="project-number">03</div>
                    <div class="project-detail-header">
                        <div class="project-icon-large">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="project-detail-title">Sistem Booking Container</h3>
                            <a href="https://kmi-bcs.kmifilebox.com" target="_blank" class="project-url">kmi-bcs.kmifilebox.com</a>
                        </div>
                    </div>
                    <p class="project-detail-description">
                        Mengembangkan modul pemesanan container untuk kebutuhan export perusahaan dengan approval workflow 
                        multi-level. Sistem ini mengotomasi koordinasi antara tim logistik, warehouse, dan shipping untuk 
                        memastikan proses booking container berjalan efisien dengan tracking real-time dari booking hingga 
                        shipment.
                    </p>
                    <div class="project-features-list">
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Multi-level approval workflow system
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Integrasi dengan sistem logistik eksternal
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Real-time notification untuk setiap stage
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Calendar view untuk scheduling container
                        </div>
                    </div>
                    <div class="project-tech-stack">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">jQuery</span>
                        <span class="tech-tag">Notification System</span>
                    </div>
                </div>

                <!-- Project 4: Monitoring PO -->
                <div class="project-detail-card">
                    <div class="project-number">04</div>
                    <div class="project-detail-header">
                        <div class="project-icon-large">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="project-detail-title">Sistem Monitoring PO (Purchase Order)</h3>
                            <a href="http://monitoring-po.kmifilebox.com" target="_blank" class="project-url">monitoring-po.kmifilebox.com</a>
                        </div>
                    </div>
                    <p class="project-detail-description">
                        Sistem tracking status Purchase Order yang terhubung langsung ke SAP untuk monitoring real-time. 
                        Dashboard ini menampilkan progress PO, outstanding items, delivery history, dan analytics yang 
                        membantu tim procurement dalam pengambilan keputusan dan forecasting material requirement.
                    </p>
                    <div class="project-features-list">
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Real-time PO status sync dari SAP
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Outstanding item tracking dan alerting
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Dashboard visualization dengan Chart.js
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Export data ke Excel/PDF untuk reporting
                        </div>
                    </div>
                    <div class="project-tech-stack">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">SAP Integration</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">Chart.js</span>
                    </div>
                </div>

                <!-- Project 5: Stock Monitoring -->
                <div class="project-detail-card">
                    <div class="project-number">05</div>
                    <div class="project-detail-header">
                        <div class="project-icon-large">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                        </div>
                        <div>
                            <h3 class="project-detail-title">Sistem Monitoring Stock Hotbox (SAP Integrated)</h3>
                            <a href="https://stock-hotbox.kmifilebox.com" target="_blank" class="project-url">stock-hotbox.kmifilebox.com</a>
                        </div>
                    </div>
                    <p class="project-detail-description">
                        Menghubungkan data SAP Stock ke dashboard real-time untuk memudahkan tim produksi dan warehouse 
                        melihat ketersediaan barang. Sistem ini dilengkapi dengan stock movement tracking, low stock alert, 
                        forecasting analytics, dan barcode integration untuk input data yang lebih akurat dan cepat.
                    </p>
                    <div class="project-features-list">
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Real-time stock data synchronization dari SAP
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Stock movement tracking & history
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Low stock alert system dengan notification
                        </div>
                        <div class="feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Multi-warehouse support dengan forecasting
                        </div>
                    </div>
                    <div class="project-tech-stack">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">SAP RFC</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">AJAX</span>
                        <span class="tech-tag">DataTables</span>
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
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </div>
                <h2>Tertarik dengan Sistem yang Saya Kembangkan?</h2>
                <p>Lihat detail lengkap semua project di halaman portfolio atau hubungi saya untuk diskusi lebih lanjut</p>
                <div class="cta-buttons">
                    <a href="portfolio.php" class="btn btn-light">
                        <span>Lihat Portfolio Detail</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="contact.php" class="btn btn-outline-light">
                        <span>Hubungi Saya</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>