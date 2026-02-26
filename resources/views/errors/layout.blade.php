<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Custom error page BUKAN SARJANA KOMPUTER">
  <title>@yield('title', 'Terjadi Kesalahan') | BUKAN SARJANA KOMPUTER</title>
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <style>
    :root {
      --bg-1: #07111e;
      --bg-2: #0b1a2d;
      --line: rgba(160, 183, 209, 0.24);
      --text: #e9f2ff;
      --muted: #9eb0c8;
      --accent: #ff6f3d;
      --accent-2: #09b8a5;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      min-height: 100vh;
      font-family: "Sora", "Segoe UI", sans-serif;
      color: var(--text);
      background:
        radial-gradient(750px 500px at 85% -10%, rgba(9, 184, 165, 0.22), transparent 60%),
        radial-gradient(700px 460px at -10% 5%, rgba(255, 111, 61, 0.2), transparent 62%),
        linear-gradient(160deg, var(--bg-1), var(--bg-2));
      display: grid;
      place-items: center;
      padding: 20px;
    }

    .error-card {
      width: min(980px, 100%);
      border: 1px solid var(--line);
      border-radius: 20px;
      background: rgba(10, 23, 39, 0.84);
      overflow: hidden;
      box-shadow: 0 18px 52px rgba(2, 9, 18, 0.45);
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
    }

    .error-content {
      padding: 36px;
    }

    .error-code {
      font-size: clamp(3rem, 12vw, 6.5rem);
      line-height: 0.9;
      margin: 0;
      color: var(--accent);
      font-weight: 800;
      letter-spacing: -0.03em;
    }

    .error-heading {
      font-size: clamp(1.4rem, 3.5vw, 2rem);
      margin: 14px 0 8px;
      line-height: 1.2;
    }

    .error-message {
      color: var(--muted);
      margin: 0;
      max-width: 52ch;
      line-height: 1.7;
    }

    .actions {
      margin-top: 24px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 12px;
      border: 1px solid transparent;
      padding: 11px 16px;
      text-decoration: none;
      font-weight: 600;
      font-size: 0.9rem;
    }

    .btn-primary {
      color: #fff;
      background: linear-gradient(135deg, var(--accent), #ff8d41);
      box-shadow: 0 10px 24px rgba(255, 111, 61, 0.25);
    }

    .btn-ghost {
      color: var(--text);
      border-color: var(--line);
      background: rgba(15, 32, 52, 0.7);
    }

    .error-illustration {
      border-left: 1px solid var(--line);
      background: rgba(8, 18, 31, 0.88);
      display: grid;
      place-items: center;
      padding: 24px;
    }

    .error-illustration img {
      width: min(100%, 360px);
      height: auto;
      display: block;
    }

    .brand {
      margin-bottom: 16px;
      color: var(--muted);
      font-size: 0.78rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      font-weight: 700;
    }

    @media (max-width: 860px) {
      .error-card {
        grid-template-columns: 1fr;
      }

      .error-illustration {
        border-left: 0;
        border-top: 1px solid var(--line);
      }

      .error-content {
        padding: 28px 22px;
      }
    }
  </style>
</head>
<body>
  <main class="error-card">
    <section class="error-content">
      <p class="brand">Bukan Sarjana Komputer</p>
      <h1 class="error-code">@yield('code', '500')</h1>
      <h2 class="error-heading">@yield('heading', 'Terjadi Kesalahan')</h2>
      <p class="error-message">@yield('message', 'Terjadi kesalahan pada sistem. Silakan coba beberapa saat lagi.')</p>
      <div class="actions">
        <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
        <a href="javascript:history.back()" class="btn btn-ghost">Kembali</a>
      </div>
    </section>
    <section class="error-illustration">
      <img src="{{ asset('assets/img/errors/error-illustration.svg') }}" alt="Error illustration">
    </section>
  </main>
</body>
</html>
