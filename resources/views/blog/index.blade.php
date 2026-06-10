<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog | Bukan Sarjana Komputer</title>
  <meta name="description" content="Kumpulan artikel dan insight seputar web development, automation, docker, dan IoT." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/css/front-pages/landing.css') }}" />
  <style>
    :root { color-scheme: dark; --bg: #07111f; --panel: #0d1728; --panel-2:#13253a; --text:#eff6ff; --muted:#bfd3eb; --accent:#6ee7ff; --accent-2:#8b5cf6; }
    * { box-sizing: border-box; }
    body { margin:0; font-family:'Sora',sans-serif; background:linear-gradient(180deg,#07111f 0%, #09141f 55%, #040a12 100%); color:var(--text); }
    a { color:inherit; text-decoration:none; }
    .page { min-height:100vh; }
    .container { width:min(1160px, calc(100% - 2rem)); margin:0 auto; }
    main { padding:1rem 0 4rem; }
    .hero { display:block; padding:2rem 0 1rem; text-align:left; }
    .hero-copy { display:block; max-width:760px; width:100%; margin-bottom:1rem; }
    .hero-copy p { margin:0; }
    .hero-copy .eyebrow { margin-bottom:.35rem; }
    .eyebrow { text-transform:uppercase; letter-spacing:.28em; font-size:.75rem; color:var(--accent); }
    h1 { font-size:clamp(2rem, 5vw, 3.6rem); line-height:1.08; margin:0; max-width:760px; }
    .lead { color:var(--muted); max-width:680px; font-size:1.02rem; margin:0; }
    .grid { display:grid; grid-template-columns:repeat(3, minmax(0, 1fr)); gap:1.2rem; margin-top:0; align-items:stretch; width:100%; max-width:1160px; justify-content:center; }
    .card { display:flex; flex-direction:column; height:100%; background:linear-gradient(180deg, rgba(15,23,42,.95), rgba(15,23,42,.88)); border:1px solid rgba(148,163,184,.18); border-radius:24px; overflow:hidden; box-shadow:0 18px 40px rgba(8,15,30,.35); transition:transform .18s ease, border-color .18s ease; }
    .card:hover { transform:translateY(-2px); border-color:rgba(110,231,255,.35); }
    .card img { width:100%; aspect-ratio:16/10; object-fit:cover; display:block; border-bottom:1px solid rgba(148,163,184,.18); }
    .card-body { padding:1rem; display:flex; flex-direction:column; gap:.6rem; flex:1; }
    .meta { color:var(--accent); font-size:.82rem; text-transform:uppercase; letter-spacing:.18em; }
    .card h2 { font-size:1.05rem; margin:0; line-height:1.35; }
    .card p { color:var(--muted); margin:0; line-height:1.6; font-size:.95rem; }
    .card-footer { display:flex; justify-content:space-between; align-items:center; gap:.75rem; margin-top:auto; padding-top:.25rem; }
    .ghost-link { color:var(--accent); font-weight:600; }
    .pagination-wrap { display:flex; justify-content:center; margin-top:1.75rem; width:100%; }
    .pagination-nav { display:flex; flex-wrap:wrap; gap:.5rem; align-items:center; justify-content:center; }
    .pagination-link, .pagination-current { display:inline-flex; align-items:center; justify-content:center; min-width:2.25rem; padding:.55rem .72rem; border-radius:999px; border:1px solid rgba(148,163,184,.18); background:rgba(15,23,42,.88); color:var(--text); text-decoration:none; font-size:.95rem; box-shadow:0 10px 25px rgba(8,15,30,.25); }
    .pagination-link:hover { border-color:rgba(110,231,255,.45); color:var(--accent); }
    .pagination-current { background:linear-gradient(135deg,var(--accent),#4f46e5); color:#061019; font-weight:700; border-color:transparent; }
    .pagination-disabled { opacity:.45; pointer-events:none; }
    footer { padding:1rem 0 2rem; color:var(--muted); font-size:.92rem; }
    @media (max-width: 1100px) { .grid { grid-template-columns:repeat(2, minmax(0, 1fr)); } }
    @media (max-width: 760px) { .grid { grid-template-columns:1fr; } .nav-links { display:none; } .pill { display:none; } }
  </style>
</head>
<body>
  <div class="page">
    @include('front-pages.sections.header')

    <main>
      <section class="container hero">
        <div class="hero-copy">
          <p class="eyebrow">Artikel & insight</p>
          <h1>Blog untuk ide dan solusi digital.</h1>
          <p class="lead">Kumpulan artikel yang disusun rapi untuk membantu Anda membaca, belajar, dan menemukan inspirasi tanpa bingung.</p>
        </div>

        <div class="grid">
          @forelse ($articles as $article)
            <article class="card">
              <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" />
              <div class="card-body">
                <span class="meta">{{ $article->published_at?->translatedFormat('d M Y') }}</span>
                @if(!empty($article->category))
                  <span class="meta">Kategori: {{ $article->category }}</span>
                @endif
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->excerpt }}</p>
                <div class="card-footer">
                  <a class="ghost-link" href="{{ route('blog.show', $article) }}">Baca artikel →</a>
                  <span class="meta">#{{ $loop->iteration }}</span>
                </div>
              </div>
            </article>
          @empty
            <p>Belum ada artikel.</p>
          @endforelse
        </div>

        <div class="pagination-wrap">
          {{ $articles->onEachSide(1)->links('vendor.pagination.custom') }}
        </div>
      </section>
    </main>

    <footer class="container">© {{ date('Y') }} Bukan Sarjana Komputer</footer>
  </div>
  <script src="{{ asset('assets/js/front-pages/landing.js') }}" defer></script>
</body>
</html>
