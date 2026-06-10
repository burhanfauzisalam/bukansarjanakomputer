<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $article->title }} | Blog BSK</title>
  <meta name="description" content="{{ $article->excerpt }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/css/front-pages/landing.css') }}" />
  <style>
    :root { color-scheme: dark; --bg:#07111f; --panel:#0d1728; --text:#eff6ff; --muted:#bfd3eb; --accent:#6ee7ff; }
    * { box-sizing: border-box; }
    body { margin:0; font-family:'Sora',sans-serif; background:linear-gradient(180deg,#07111f 0%, #09141f 55%, #040a12 100%); color:var(--text); }
    a { color:inherit; text-decoration:none; }
    .container { width:min(980px, calc(100% - 2rem)); margin:0 auto; }
    main { padding:2rem 0 4rem; }
    .detail-grid { display:grid; grid-template-columns:1fr 320px; gap:1.25rem; align-items:start; }
    .hero-card { background:linear-gradient(180deg, rgba(15,23,42,.94), rgba(15,23,42,.86)); border:1px solid rgba(148,163,184,.18); border-radius:26px; overflow:hidden; box-shadow:0 18px 40px rgba(8,15,30,.35); }
    .hero-card img { width:100%; max-height:360px; object-fit:cover; display:block; }
    .content { padding:1.1rem; }
    .eyebrow { text-transform:uppercase; letter-spacing:.28em; font-size:.75rem; color:var(--accent); }
    h1 { font-size:clamp(1.9rem, 5vw, 2.8rem); line-height:1.15; margin:.35rem 0 .6rem; }
    .meta { color:#bfdbfe; font-size:.92rem; }
    .lead { color:var(--muted); line-height:1.7; margin-top:.8rem; }
    .article-html { color:var(--muted); line-height:1.8; }
    .article-html p { color:var(--muted); line-height:1.8; margin: 0 0 1rem; }
    .article-html h2, .article-html h3, .article-html h4 { color:var(--text); margin:1rem 0 .5rem; }
    .article-html ul, .article-html ol { padding-left:1.2rem; margin:0 0 1rem; }
    .article-html img { max-width:100%; border-radius:14px; margin:.5rem 0; }
    .article-html a { color:var(--accent); text-decoration:underline; }
    .back-link { display:inline-flex; align-items:center; gap:.4rem; margin-top:1rem; color:var(--accent); font-weight:600; }
    .sidebar { position:sticky; top:88px; display:grid; gap:1rem; }
    .sidebar-card { background:linear-gradient(180deg, rgba(15,23,42,.94), rgba(15,23,42,.86)); border:1px solid rgba(148,163,184,.18); border-radius:24px; padding:1rem; box-shadow:0 18px 40px rgba(8,15,30,.35); }
    .sidebar-card h2 { font-size:1rem; margin:0 0 .65rem; }
    .related-list { display:grid; gap:.75rem; }
    .related-item { display:grid; grid-template-columns:72px 1fr; gap:.75rem; align-items:start; padding-bottom:.75rem; border-bottom:1px solid rgba(148,163,184,.12); }
    .related-item:last-child { border-bottom:none; padding-bottom:0; }
    .related-thumb { width:72px; height:48px; object-fit:cover; border-radius:12px; border:1px solid rgba(148,163,184,.18); }
    .related-copy { display:grid; gap:.25rem; }
    .related-item a { color:#eff6ff; font-weight:600; }
    .related-item span { color:var(--muted); font-size:.87rem; line-height:1.5; }
    footer { color:var(--muted); font-size:.92rem; padding-bottom:2rem; }
    @media (max-width: 980px) { .detail-grid { grid-template-columns:1fr; } .sidebar { position:static; } }
  </style>
</head>
<body>
  @include('front-pages.sections.header')

  <main class="container">
    <div class="detail-grid">
      <article class="hero-card">
        <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" />
        <div class="content">
          <p class="eyebrow">Artikel</p>
          <h2>{{ $article->title }}</h2>
          <p class="meta">Dipublikasikan {{ $article->published_at?->translatedFormat('d M Y') }}</p>
          <p class="lead">{{ $article->excerpt }}</p>
          <div class="article-html">{!! $article->content !!}</div>
          <a class="back-link" href="{{ route('blog.index') }}">← Lihat semua artikel</a>
        </div>
      </article>

      <aside class="sidebar">
        <section class="sidebar-card">
          <h2>Artikel terkait</h2>
          <div class="related-list">
            @foreach ($relatedArticles as $related)
              <article class="related-item">
                <img class="related-thumb" src="{{ asset($related->image) }}" alt="{{ $related->title }}" />
                <div class="related-copy">
                  <a href="{{ route('blog.show', $related) }}">{{ $related->title }}</a>
                  <span>{{ Str::limit($related->excerpt, 90) }}</span>
                </div>
              </article>
            @endforeach
          </div>
        </section>
      </aside>
    </div>
  </main>

  <footer class="container">© {{ date('Y') }} Bukan Sarjana Komputer</footer>
  <script src="{{ asset('assets/js/front-pages/landing.js') }}" defer></script>
</body>
</html>
