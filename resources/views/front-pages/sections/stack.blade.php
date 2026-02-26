<section id="stack">
      <div class="section-head">
        <span class="section-eyebrow">Tech Stack</span>
        <h2>Toolset yang saya pakai untuk membangun sistem produksi.</h2>
        <p class="stack-hint">Hover kartu untuk melihat detail, klik untuk pin highlight.</p>
      </div>
      <div class="stack-grid">
        <article class="stack-card active" data-stack="laravel" tabindex="0" role="button" aria-pressed="true">
          <div class="stack-top">
            <span class="stack-icon-shell">
              <img class="stack-icon" src="{{ asset('assets/img/front-pages/tech-stack/laravel.svg') }}" alt="Laravel logo">
            </span>
            <div class="stack-head">
              <h3>Laravel</h3>
              <p>Web App Framework</p>
            </div>
          </div>
          <div class="stack-tags">
            <span>Backend</span>
            <span>ORM</span>
            <span>Queues</span>
          </div>
          <p class="stack-note">Fondasi utama untuk membangun aplikasi modular, API service, dan fitur bisnis yang scalable.</p>
        </article>

        <article class="stack-card" data-stack="esp32" tabindex="0" role="button" aria-pressed="false">
          <div class="stack-top">
            <span class="stack-icon-shell">
              <img class="stack-icon" src="{{ asset('assets/img/front-pages/tech-stack/arduino.svg') }}" alt="ESP32 Arduino logo">
            </span>
            <div class="stack-head">
              <h3>ESP32 / Arduino Devices</h3>
              <p>IoT Edge Devices</p>
            </div>
          </div>
          <div class="stack-tags">
            <span>Sensor Node</span>
            <span>Telemetry</span>
            <span>Firmware</span>
          </div>
          <p class="stack-note">Perangkat lapangan untuk akuisisi data real-time, kontrol aktuator, dan pengiriman data ke backend.</p>
        </article>

        <article class="stack-card" data-stack="mysql" tabindex="0" role="button" aria-pressed="false">
          <div class="stack-top">
            <span class="stack-icon-shell">
              <img class="stack-icon" src="{{ asset('assets/img/front-pages/tech-stack/mysql.svg') }}" alt="MySQL logo">
            </span>
            <div class="stack-head">
              <h3>MySQL</h3>
              <p>Relational Database</p>
            </div>
          </div>
          <div class="stack-tags">
            <span>Schema Design</span>
            <span>Indexing</span>
            <span>Reporting</span>
          </div>
          <p class="stack-note">Penyimpanan data transaksi dan analitik dengan desain tabel yang terstruktur dan query efisien.</p>
        </article>

        <article class="stack-card" data-stack="rest" tabindex="0" role="button" aria-pressed="false">
          <div class="stack-top">
            <span class="stack-icon-shell">
              <img class="stack-icon" src="{{ asset('assets/img/front-pages/tech-stack/rest-api.svg') }}" alt="REST API icon">
            </span>
            <div class="stack-head">
              <h3>REST API</h3>
              <p>System Integration</p>
            </div>
          </div>
          <div class="stack-tags">
            <span>JSON</span>
            <span>Auth</span>
            <span>Versioning</span>
          </div>
          <p class="stack-note">Menyediakan koneksi antar sistem internal maupun pihak ketiga secara konsisten dan aman.</p>
        </article>

        <article class="stack-card" data-stack="docker" tabindex="0" role="button" aria-pressed="false">
          <div class="stack-top">
            <span class="stack-icon-shell">
              <img class="stack-icon" src="{{ asset('assets/img/front-pages/tech-stack/docker.svg') }}" alt="Docker logo">
            </span>
            <div class="stack-head">
              <h3>Docker</h3>
              <p>Container Platform</p>
            </div>
          </div>
          <div class="stack-tags">
            <span>Compose</span>
            <span>Deployment</span>
            <span>Isolation</span>
          </div>
          <p class="stack-note">Membuat environment dev-prod konsisten sehingga release lebih cepat, rapi, dan minim konflik.</p>
        </article>

        <article class="stack-card" data-stack="linux" tabindex="0" role="button" aria-pressed="false">
          <div class="stack-top">
            <span class="stack-icon-shell">
              <img class="stack-icon" src="{{ asset('assets/img/front-pages/tech-stack/linux.svg') }}" alt="Linux logo">
            </span>
            <div class="stack-head">
              <h3>Linux Server</h3>
              <p>Ops & Infrastructure</p>
            </div>
          </div>
          <div class="stack-tags">
            <span>Traefik</span>
            <span>Process Mgmt</span>
            <span>Security</span>
          </div>
          <p class="stack-note">Environment utama untuk hosting aplikasi, tuning performa, logging, dan hardening server.</p>
        </article>

        <article class="stack-card" data-stack="queue" tabindex="0" role="button" aria-pressed="false">
          <div class="stack-top">
            <span class="stack-icon-shell">
              <img class="stack-icon" src="{{ asset('assets/img/front-pages/tech-stack/message-queue.svg') }}" alt="Message queue logo">
            </span>
            <div class="stack-head">
              <h3>Message Queue</h3>
              <p>Async Processing</p>
            </div>
          </div>
          <div class="stack-tags">
            <span>Worker</span>
            <span>Retry</span>
            <span>Decoupling</span>
          </div>
          <p class="stack-note">Menjalankan proses berat secara asynchronous untuk menjaga aplikasi utama tetap responsif.</p>
        </article>

        <article class="stack-card" data-stack="mqtt" tabindex="0" role="button" aria-pressed="false">
          <div class="stack-top">
            <span class="stack-icon-shell">
              <img class="stack-icon" src="{{ asset('assets/img/front-pages/tech-stack/mqtt.svg') }}" alt="MQTT logo">
            </span>
            <div class="stack-head">
              <h3>MQTT Broker</h3>
              <p>IoT Communication</p>
            </div>
          </div>
          <div class="stack-tags">
            <span>Pub/Sub</span>
            <span>Telemetry</span>
            <span>Low Bandwidth</span>
          </div>
          <p class="stack-note">Protokol komunikasi ringan untuk menghubungkan device IoT ke backend secara real-time.</p>
        </article>

        <article class="stack-card" data-stack="iot" tabindex="0" role="button" aria-pressed="false">
          <div class="stack-top">
            <span class="stack-icon-shell">
              <img class="stack-icon" src="{{ asset('assets/img/front-pages/tech-stack/iot-pipeline.svg') }}" alt="IoT data pipeline logo">
            </span>
            <div class="stack-head">
              <h3>IoT Data Pipeline</h3>
              <p>Stream & Processing</p>
            </div>
          </div>
          <div class="stack-tags">
            <span>Event Stream</span>
            <span>Aggregation</span>
            <span>Monitoring</span>
          </div>
          <p class="stack-note">Menyalurkan data sensor menjadi insight operasional untuk dashboard, alert, dan histori.</p>
        </article>
      </div>
    
</section>
