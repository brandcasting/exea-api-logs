<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BrandCasting API</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-950 text-white overflow-x-hidden">

<!-- Background Effects -->
<div class="absolute inset-0 -z-10">
    <div
        class="absolute top-[-200px] left-[-150px] w-[500px] h-[500px] bg-indigo-600/30 blur-[140px] rounded-full animate-pulse"
    ></div>

    <div
        class="absolute bottom-[-200px] right-[-150px] w-[500px] h-[500px] bg-pink-500/20 blur-[140px] rounded-full animate-pulse"
    ></div>
</div>

<!-- Navbar -->
<header class="w-full px-8 py-6 flex justify-between items-center">
    <h2 class="text-xl font-bold tracking-tight">
        BrandCasting<span class="text-indigo-400">API</span>
    </h2>

    <a
        href="https://brandcasting.com.co"
        target="_blank"
        class="text-gray-300 hover:text-white transition"
    >
        Sitio oficial →
    </a>
</header>

<!-- Main -->
<main class="max-w-6xl mx-auto px-6 py-20">

    <!-- Hero Section -->
    <section class="text-center space-y-8">

        <!-- Badge -->
        <div
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm text-gray-300"
        >
            🚀 Plataforma API en producción
            <span class="w-2 h-2 bg-green-400 rounded-full animate-ping"></span>
        </div>

        <!-- Title -->
        <h1
            class="text-5xl md:text-6xl font-extrabold tracking-tight leading-tight"
        >
            Bienvenido a la
            <span
                class="bg-gradient-to-r from-indigo-400 to-pink-400 bg-clip-text text-transparent"
            >
            BrandCasting API
          </span>
        </h1>

        <!-- Subtitle -->
        <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto">
            Este endpoint corresponde a un servicio backend diseñado para integraciones,
            automatización y operaciones internas.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 pt-6">

            <a
                href="https://brandcasting.com.co"
                target="_blank"
                class="px-8 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-500 transition-all shadow-lg shadow-indigo-700/30 font-semibold text-lg"
            >
                Ir al sitio oficial
            </a>

            <a
                href="#"
                class="px-8 py-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all font-semibold text-lg"
            >
                Documentación próximamente
            </a>
        </div>
    </section>

    <!-- Feature Grid -->
    <section
        class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8 text-left"
    >
        <!-- Card -->
        <div
            class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-indigo-500/40 transition-all"
        >
            <h3 class="text-xl font-semibold mb-3">⚡ API Rápida</h3>
            <p class="text-gray-400 leading-relaxed">
                Respuestas optimizadas para integraciones modernas y escalables.
            </p>
        </div>

        <div
            class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-pink-500/40 transition-all"
        >
            <h3 class="text-xl font-semibold mb-3">🔒 Segura</h3>
            <p class="text-gray-400 leading-relaxed">
                Autenticación robusta y prácticas modernas de protección de datos.
            </p>
        </div>

        <div
            class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:border-green-500/40 transition-all"
        >
            <h3 class="text-xl font-semibold mb-3">🌍 Conectada</h3>
            <p class="text-gray-400 leading-relaxed">
                Diseñada para operar con aplicaciones web, móviles y servicios externos.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-24 text-center text-gray-500 text-sm">
        © 2026 BrandCasting API · Todos los derechos reservados
    </footer>
</main>
</body>
</html>
