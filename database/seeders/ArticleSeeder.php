<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $categoryMap = [
            'Web Development' => '/assets/img/blog/article-1.svg',
            'Automation' => '/assets/img/blog/article-2.svg',
            'DevOps' => '/assets/img/blog/article-3.svg',
            'IoT' => '/assets/img/blog/article-4.svg',
            'SEO' => '/assets/img/blog/seo.svg',
        ];

        $articles = [
            [
                'title' => 'Membangun Aplikasi Web Modern dengan Laravel',
                'slug' => 'membangun-aplikasi-web-modern-dengan-laravel',
                'category' => 'Web Development',
                'excerpt' => 'Pelajari cara menyusun arsitektur aplikasi web yang rapi, cepat, dan mudah dijaga dengan Laravel.',
                'content' => "Laravel memberi fondasi yang kuat untuk membangun aplikasi web modern. Mulai dari routing, blade, hingga sistem autentikasi, semuanya terorganisir dengan baik. Dengan struktur folder yang jelas, tim dapat berkembang lebih cepat tanpa kehilangan kualitas.\n\nDalam praktiknya, fokus pada pengalaman pengguna, performa, dan keamanan akan menghasilkan produk yang siap digunakan oleh pelanggan.",
                'image' => $categoryMap['Web Development'],
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Automasi Proses Bisnis dengan Script PHP',
                'slug' => 'automasi-proses-bisnis-dengan-script-php',
                'category' => 'Automation',
                'excerpt' => 'Automasi membantu tim mengurangi pekerjaan manual dan meningkatkan konsistensi operasional.',
                'content' => "Banyak proses bisnis yang masih dikerjakan secara manual, padahal bisa diotomasi dengan script sederhana. PHP tetap relevan untuk tugas seperti pengiriman notifikasi, sinkronisasi data, dan pembuatan laporan otomatis.\n\nDengan satu workflow yang baik, tim bisa menambah akurasi sekaligus menghemat waktu untuk pekerjaan yang lebih strategis.",
                'image' => $categoryMap['Automation'],
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Mengoptimalkan Kecepatan Website untuk Pengalaman Lebih Baik',
                'slug' => 'mengoptimalkan-kecepatan-website-untuk-pengalaman-lebih-baik',
                'category' => 'DevOps',
                'excerpt' => 'Performa yang baik tidak hanya membuat situs lebih cepat, tetapi juga meningkatkan kepercayaan pengguna.',
                'content' => "Waktu muat halaman adalah salah satu indikator kualitas aplikasi web yang paling terlihat. Dari pengurangan asset yang tidak perlu hingga caching yang tepat, ada banyak cara untuk mempercepat pengalaman pengguna.\n\nSaat halaman lebih ringan, bounce rate menurun, interaksi meningkat, dan pelanggan lebih nyaman menjelajah konten Anda.",
                'image' => $categoryMap['DevOps'],
                'published_at' => now()->subDays(8),
            ],
            [
                'title' => 'Docker untuk Deployment yang Konsisten di Berbagai Mesin',
                'slug' => 'docker-untuk-deployment-yang-konsisten-di-berbagai-mesin',
                'category' => 'DevOps',
                'excerpt' => 'Container membantu lingkungan development dan production tetap serupa, sehingga risiko error turun.',
                'content' => "Docker memudahkan tim untuk membuat lingkungan aplikasi yang stabil di laptop, server staging, maupun production. Ketika konfigurasi berjalan di container, perbedaan mesin menjadi jauh lebih kecil.\n\nIni sangat membantu untuk deployment yang lebih aman, cepat, dan mudah diulang setiap kali ada perubahan pada sistem.",
                'image' => $categoryMap['DevOps'],
                'published_at' => now()->subDays(11),
            ],
            [
                'title' => 'Menghubungkan IoT dan Web App untuk Solusi Nyata',
                'slug' => 'menghubungkan-iot-dan-web-app-untuk-solusi-nyata',
                'category' => 'IoT',
                'excerpt' => 'Integrasi sensor, dashboard, dan aplikasi web membuka peluang solusi yang lebih modern untuk bisnis.',
                'content' => "Project IoT tidak lagi sebatas prototipe. Saat data dari perangkat dapat muncul di dashboard web, tim operasional bisa memantau kondisi secara real time dan mengambil keputusan lebih cepat.\n\nDengan arsitektur yang rapi, hasil dari perangkat pintar bisa terus terhubung ke aplikasi yang digunakan tiap hari.",
                'image' => $categoryMap['IoT'],
                'published_at' => now()->subDays(14),
            ],
            [
                'title' => 'Strategi Menulis API yang Mudah Dipelihara',
                'slug' => 'strategi-menulis-api-yang-mudah-dipelihara',
                'category' => 'Web Development',
                'excerpt' => 'API yang bagus tidak hanya cepat, tetapi juga jelas, aman, dan mudah ditingkatkan.',
                'content' => 'Desain API yang baik dimulai dari kontrak yang jelas, dokumentasi yang rapi, dan versi yang konsisten. Saat tim memahami skema yang digunakan, integrasi menjadi lebih ringan dan risiko bug menurun.',
                'image' => $categoryMap['Web Development'],
                'published_at' => now()->subDays(16),
            ],
            [
                'title' => 'Menerapkan Caching untuk Website yang Lebih Responsif',
                'slug' => 'menerapkan-caching-untuk-website-yang-lebih-responsif',
                'category' => 'Automation',
                'excerpt' => 'Caching membantu menurunkan beban server dan mempercepat response pengguna.',
                'content' => 'Dengan cache yang tepat, halaman yang sering diakses tidak perlu diproses ulang setiap request. Ini cocok untuk dashboard, katalog produk, dan halaman statis yang banyak dilihat pengguna.',
                'image' => $categoryMap['Automation'],
                'published_at' => now()->subDays(18),
            ],
            [
                'title' => 'Membangun Workflow Kolaborasi Tim yang Efisien',
                'slug' => 'membangun-workflow-kolaborasi-tim-yang-efisien',
                'category' => 'SEO',
                'excerpt' => 'Workflow yang baik membuat tim lebih fokus pada kualitas dan penyampaian hasil.',
                'content' => 'Banyak tim gagal bukan karena kemampuan teknis, tetapi karena proses kerja yang terlalu rumit. Dengan dokumentasi sederhana, review yang jelas, dan tool yang tepat, kolaborasi menjadi lebih mulus.',
                'image' => $categoryMap['SEO'],
                'published_at' => now()->subDays(20),
            ],
            [
                'title' => 'Keamanan Web App yang Perlu Diperhatikan Setiap Hari',
                'slug' => 'keamanan-web-app-yang-perlu-diperhatikan-setiap-hari',
                'category' => 'Web Development',
                'excerpt' => 'Keamanan perlu menjadi bagian dari proses pengembangan, bukan hanya setelah masalah muncul.',
                'content' => 'Validasi input, proteksi CSRF, dan manajemen session adalah dasar yang tidak boleh diabaikan. Saat keamanan dijadikan kebiasaan, produk akan lebih tahan terhadap masalah yang tidak terduga.',
                'image' => $categoryMap['Web Development'],
                'published_at' => now()->subDays(22),
            ],
            [
                'title' => 'Menganalisis Data dengan Tools Sederhana dan Cepat',
                'slug' => 'menganalisis-data-dengan-tools-sederhana-dan-cepat',
                'category' => 'SEO',
                'excerpt' => 'Analisis data tidak harus rumit untuk memberikan insight yang berguna.',
                'content' => 'Dengan tools yang tepat, data mentah dapat diubah menjadi keputusan yang lebih baik. Visualisasi sederhana, filter yang jelas, dan laporan rutin membantu tim memahami kondisi bisnis lebih cepat.',
                'image' => $categoryMap['SEO'],
                'published_at' => now()->subDays(24),
            ],
            [
                'title' => 'Mengelola Deployment dengan GitHub Actions',
                'slug' => 'mengelola-deployment-dengan-github-actions',
                'category' => 'DevOps',
                'excerpt' => 'CI/CD membantu pengiriman perubahan menjadi lebih stabil dan otomatis.',
                'content' => 'Kombinasi GitHub Actions dan deployment yang terstruktur membuat proses release lebih aman. Tim dapat fokus pada pemecahan masalah bisnis, bukan pada prosedur manual yang berulang.',
                'image' => $categoryMap['DevOps'],
                'published_at' => now()->subDays(26),
            ],
            [
                'title' => 'Membuat Dashboard Admin yang Mudah Dipahami',
                'slug' => 'membuat-dashboard-admin-yang-mudah-dipahami',
                'category' => 'Web Development',
                'excerpt' => 'Dashboard yang baik membantu admin mengambil keputusan dengan cepat.',
                'content' => 'Tampilan yang bersih, informasi yang penting di depan, dan navigasi yang sederhana membuat admin lebih produktif. Ini penting untuk sistem yang terus digunakan setiap hari.',
                'image' => $categoryMap['Web Development'],
                'published_at' => now()->subDays(28),
            ],
            [
                'title' => 'Menggunakan Queue untuk Proses Berat di Latar Belakang',
                'slug' => 'menggunakan-queue-untuk-proses-berat-di-latar-belakang',
                'category' => 'Automation',
                'excerpt' => 'Queue membantu website tetap responsif saat ada pekerjaan berat.',
                'content' => 'Proses email, export file, dan notifikasi sering kali tidak perlu dilakukan langsung di request. Dengan queue, pengguna tetap mendapat respons cepat dan pekerjaan tetap berjalan.',
                'image' => $categoryMap['Automation'],
                'published_at' => now()->subDays(30),
            ],
            [
                'title' => 'Merancang UI yang Konsisten untuk Brand Anda',
                'slug' => 'merancang-ui-yang-konsisten-untuk-brand-anda',
                'category' => 'Web Development',
                'excerpt' => 'Konsistensi visual membantu pengguna merasa nyaman dan percaya pada produk.',
                'content' => 'Elemen desain yang konsisten membuat navigasi lebih intuitif dan pengalaman pengguna lebih baik. Hal ini penting untuk membangun identitas digital yang profesional.',
                'image' => $categoryMap['Web Development'],
                'published_at' => now()->subDays(32),
            ],
            [
                'title' => 'Mempersiapkan Aplikasi untuk Pertumbuhan di Masa Depan',
                'slug' => 'mempersiapkan-aplikasi-untuk-pertumbuhan-di-masa-depan',
                'category' => 'Web Development',
                'excerpt' => 'Aplikasi yang baik dirancang agar mudah berkembang seiring pertumbuhan bisnis.',
                'content' => 'Arsitektur yang modular, test yang cukup, dan dokumentasi yang jelas akan memudahkan aplikasi berkembang tanpa harus membangun ulang dari awal.',
                'image' => $categoryMap['Web Development'],
                'published_at' => now()->subDays(34),
            ],
            [
                'title' => 'Mengenal Container Orchestration untuk Skala Lebih Besar',
                'slug' => 'mengenal-container-orchestration-untuk-skala-lebih-besar',
                'category' => 'DevOps',
                'excerpt' => 'Orchestration membantu mengelola banyak container dengan lebih teratur.',
                'content' => 'Saat aplikasi tumbuh, menjalankan container satu per satu tidak lagi cukup. Dengan orchestrator, deployment, scaling, dan recovery dapat diatur secara lebih baik.',
                'image' => $categoryMap['DevOps'],
                'published_at' => now()->subDays(36),
            ],
            [
                'title' => 'Membuat Konten Blog yang Tetap Relevan dan Menarik',
                'slug' => 'membuat-konten-blog-yang-tetap-relevan-dan-menarik',
                'category' => 'SEO',
                'excerpt' => 'Konten blog yang baik membantu audiens memahami nilai dan keahlian Anda.',
                'content' => 'Konten yang konsisten, terarah, dan mudah dipahami akan membantu membangun kepercayaan pembaca. Ini penting untuk personal brand dan bisnis digital.',
                'image' => $categoryMap['SEO'],
                'published_at' => now()->subDays(38),
            ],
            [
                'title' => 'Optimasi SEO untuk Blog dan Landing Page',
                'slug' => 'optimasi-seo-untuk-blog-dan-landing-page',
                'category' => 'SEO',
                'excerpt' => 'SEO membantu konten lebih mudah ditemukan dan memberi nilai jangka panjang.',
                'content' => 'Struktur heading yang baik, metadata yang jelas, dan konten yang relevan membantu mesin pencari memahami maksud halaman Anda. Ini meningkatkan kesempatan konten ditemukan oleh audiens yang tepat.',
                'image' => $categoryMap['SEO'],
                'published_at' => now()->subDays(40),
            ],
            [
                'title' => 'Menyusun Strategi Konten untuk Brand Digital',
                'slug' => 'menyusun-strategi-konten-untuk-brand-digital',
                'category' => 'SEO',
                'excerpt' => 'Strategi konten membantu setiap tulisan punya tujuan dan alur yang jelas.',
                'content' => 'Saat konten dibuat dengan tujuan yang jelas, audiens akan lebih mudah memahami pesan yang ingin disampaikan. Ini menjadi pondasi yang kuat untuk personal brand dan penjualan digital.',
                'image' => $categoryMap['SEO'],
                'published_at' => now()->subDays(42),
            ],
            [
                'title' => 'Memantau Kinerja Aplikasi dengan Log yang Rapi',
                'slug' => 'memantau-kinerja-aplikasi-dengan-log-yang-rapi',
                'category' => 'DevOps',
                'excerpt' => 'Log yang rapi membuat troubleshooting lebih cepat dan terukur.',
                'content' => 'Monitoring dan log yang terstruktur memudahkan tim menemukan akar masalah tanpa melakukan guesswork. Ini sangat penting saat aplikasi sudah dipakai banyak pengguna.',
                'image' => $categoryMap['DevOps'],
                'published_at' => now()->subDays(44),
            ],
        ];

        foreach ($articles as $article) {
            Article::updateOrCreate(
                ['slug' => $article['slug']],
                $article
            );
        }
    }
}
