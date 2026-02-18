<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BrandCasting API</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-950 via-gray-900 to-indigo-950 text-white"
>
<!-- Fondo animado -->
<div class="absolute inset-0 overflow-hidden">
    <div
        class="absolute -top-32 -left-32 w-96 h-96 bg-indigo-600 opacity-30 blur-3xl rounded-full animate-pulse"
    ></div>
    <div
        class="absolute bottom-0 right-0 w-96 h-96 bg-pink-600 opacity-20 blur-3xl rounded-full animate-pulse"
    ></div>
</div>

<!-- Card principal -->
<div
    class="relative z-10 max-w-xl w-full mx-6 p-10 rounded-3xl bg-white/5 backdrop-blur-xl border border-white/10 shadow-2xl text-center animate-fadeIn"
>
    <!-- Icono -->
    <div
        class="w-20 h-20 mx-auto flex items-center justify-center rounded-2xl bg-indigo-500/20 border border-indigo-400/30 mb-6"
    >
        🚀
    </div>

    <!-- Título -->
    <h1 class="text-4xl font-extrabold tracking-tight mb-4">
        BrandCasting API
    </h1>

    <!-- Texto -->
    <p class="text-gray-300 text-lg leading-relaxed mb-8">
        Este servicio corresponde a una <span class="text-indigo-400 font-semibold">API</span>.
        <br />
        Por favor visita nuestro sitio oficial para más información.
    </p>

    <!-- Botón -->
    <a
        href="https://brandcasting.com.co"
        target="_blank"
        class="inline-flex items-center gap-2 px-8 py-3 rounded-2xl bg-indigo-600 hover:bg-indigo-500 transition-all duration-300 shadow-lg shadow-indigo-700/30 font-semibold text-lg"
    >
        Ir a BrandCasting
        <span class="animate-bounce">→</span>
    </a>

    <!-- Footer -->
    <p class="mt-10 text-sm text-gray-500">
        © 2026 BrandCasting · Todos los derechos reservados
    </p>
</div>

<!-- Animación FadeIn -->
<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(25px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 1s ease-out;
    }
</style>
</body>
</html>
