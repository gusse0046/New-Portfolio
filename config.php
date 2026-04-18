<?php
// Personal Data
$personalData = [
    'name' => 'Moh. Agus Safii',
    'title' => 'Full-Stack Developer & SAP Integration Specialist',
    'email' => 'agussafii102@gmail.com',
    'phone' => '085742654157',
    'address' => 'Jatimudo, Sulang, Rembang',
    'education' => 'S1 Teknik Informatika – Universitas Semarang',
    'summary' => 'Lulusan S1 Teknik Informatika dari Universitas Semarang dengan pengalaman di bidang pemrograman web, basis data, networking, dan desain grafis. Berorientasi pada detail, komunikatif, dan cepat beradaptasi. Memiliki pengalaman dalam UI/UX, pengembangan sistem, serta integrasi API dan SAP.'
];

// Skills
$skills = [
    'programming' => [
        ['name' => 'Python', 'level' => 90],
        ['name' => 'Laravel', 'level' => 90],
        ['name' => 'PHP', 'level' => 90],
        ['name' => 'SAP (ABAP)', 'level' => 75],
        ['name' => 'JavaScript', 'level' => 75],
    ],
    'database' => [
        ['name' => 'MySQL', 'level' => 85],
        ['name' => 'SAP Integration', 'level' => 80],
    ],
    'tools' => [
        ['name' => 'VSCode', 'level' => 90],
        ['name' => 'Cisco Networking', 'level' => 70],
        ['name' => 'Android Studio', 'level' => 65],
    ],
    'design' => [
        ['name' => 'Photoshop', 'level' => 80],
        ['name' => 'CorelDRAW', 'level' => 75],
        ['name' => 'Canva', 'level' => 85],
        ['name' => 'UI/UX Design', 'level' => 80],
        ['name' => 'Balsamiq Mockup', 'level' => 75],
    ]
];

// Experience
$experience = [
    [
        'position' => 'Management Trainee (MT) – Programmer',
        'division' => 'ERP & IT Division',
        'company' => 'PT. Kayu Mebel Indonesia',
        'location' => 'Krian – Sidoarjo, Jawa Timur',
        'duration' => '6 Bulan',
        'period' => '2025 - Sekarang',
        'description' => 'Selama program Management Trainee, saya berkontribusi secara signifikan dalam pengembangan beberapa sistem enterprise yang mendukung operasional bisnis perusahaan manufaktur furniture berskala internasional.',
        'achievements' => [
            'Membangun 5 sistem enterprise critical yang terintegrasi dengan SAP',
            'Membangun middleware untuk koneksi SAP RFC dengan Laravel',
            'Meningkatkan efisiensi proses billing hingga 70% melalui otomasi',
            'Membuat sistem marketplace internal untuk lebih dari 15 buyer internasional',
            'Implementasi real-time monitoring untuk stock dan purchase order'
        ]
    ]
];

// Portfolio
$portfolios = [
    [
        'title' => 'Automatic Billing SAP Integration',
        'subtitle' => 'Sistem Billing Otomatis Terintegrasi SAP',
        'description' => 'Sistem billing otomatis yang menghubungkan SAP dengan Laravel untuk memproses invoice secara real-time. Sistem ini mampu mengidentifikasi kondisi billing di SAP, generate dokumen otomatis, dan mengirimkan ke buyer melalui email dengan attachment lengkap (Invoice, Packing List, Payment Instruction).',
        'technologies' => ['PHP', 'Python', 'Laravel', 'SAP RFC', 'MySQL', 'AJAX'],
        'url' => 'https://billing.kayumebel.net',
        'features' => [
            'Integrasi SAP RFC untuk real-time data sync',
            'Auto-generate billing documents dari SAP Smartform',
            'Multi-department dashboard (Admin Finance, Exim, Logistic, Marketing, Purchasing)',
            'Email automation dengan attachment PDF',
            'Retry mechanism untuk handling SAP connection issues'
        ]
    ],
    [
        'title' => 'Buyer Portal Marketplace',
        'subtitle' => 'Platform E-Commerce Internal B2B',
        'description' => 'Marketplace internal yang memfasilitasi komunikasi dan transaksi antara perusahaan dengan buyer internasional. Platform ini mirip dengan Shopee namun dirancang khusus untuk kebutuhan B2B furniture manufacturing, mendukung multi-login dari berbagai buyer seperti Ethan Allen, Century Furniture, Rowe, Arhaus, dan lainnya.',
        'technologies' => ['PHP', 'Python', 'Laravel', 'MySQL', 'SAP RFC', 'JavaScript'],
        'url' => 'https://buyer-portal.kayumebel.net',
        'features' => [
            'Multi-tenant system untuk berbagai buyer internasional',
            'Product catalog dengan filter advanced',
            'Invoice dan dokumen management',
            'Real-time order status tracking',
            'Responsive design untuk akses mobile',
            'Secure authentication system'
        ]
    ],
    [
        'title' => 'Container Booking System',
        'subtitle' => 'Sistem Pemesanan Kontainer Export',
        'description' => 'Sistem manajemen booking container untuk kebutuhan export perusahaan. Aplikasi ini mengotomasi proses pemesanan, approval workflow, koordinasi dengan tim logistik, dan tracking status container secara real-time dari booking hingga shipment.',
        'technologies' => ['PHP', 'Python', 'SAP RFC', 'Laravel', 'MySQL', 'jQuery'],
        'url' => 'https://kmi-bcs.kmifilebox.com',
        'features' => [
            'Multi-level approval workflow',
            'Integrasi dengan sistem logistik',
            'Real-time container status tracking',
            'Notification system untuk setiap stage',
            'Report generation untuk analisis booking',
            'Calendar view untuk jadwal container'
        ]
    ],
    [
        'title' => 'Monitoring PO System',
        'subtitle' => 'Purchase Order Monitoring Dashboard',
        'description' => 'Dashboard monitoring Purchase Order yang terhubung langsung dengan SAP untuk tracking status PO secara real-time. Sistem ini menampilkan progress PO, outstanding items, delivery history, dan analytics yang membantu tim procurement dalam pengambilan keputusan.',
        'technologies' => ['PHP', 'Python', 'SAP RFC', 'MySQL', 'Chart.js'],
        'url' => 'http://monitoring-po.kmifilebox.com',
        'features' => [
            'Real-time PO status dari SAP',
            'Outstanding item tracking',
            'Delivery history dan analytics',
            'Export data ke Excel/PDF',
            'Dashboard visualization dengan charts',
            'Filter dan search advanced'
        ]
    ],
    [
        'title' => 'Stock Hotbox Monitoring',
        'subtitle' => 'Real-time Stock Management System',
        'description' => 'Sistem monitoring stock yang terintegrasi dengan SAP untuk menampilkan ketersediaan barang secara real-time. Dashboard ini memudahkan tim produksi dan warehouse dalam melihat stock level, pergerakan barang, dan melakukan forecasting kebutuhan material.',
        'technologies' => ['PHP', 'Python', 'SAP RFC', 'MySQL', 'AJAX', 'Laravel'],
        'url' => 'https://stock-hotbox.kmifilebox.com',
        'features' => [
            'Real-time stock data dari SAP',
            'Stock movement tracking',
            'Low stock alert system',
            'Multi-warehouse support',
            'Stock forecasting analytics',
            'Barcode integration untuk input data'
        ]
    ]
];
?>