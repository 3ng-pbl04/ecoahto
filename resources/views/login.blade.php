<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Login - Premium Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        floating: 'floating 3s ease-in-out infinite',
                        floatingDelayed: 'floating 3s ease-in-out infinite -1.5s',
                        pulseRing: 'pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite',
                        bounce: 'bounce 2s infinite',
                        shimmer: 'shimmer 2s infinite',
                        ripple: 'ripple-animation 0.6s linear',
                    },
                    keyframes: {
                        floating: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        'pulse-ring': {
                            '0%': { transform: 'scale(0.8)', opacity: '1' },
                            '80%, 100%': { transform: 'scale(1.2)', opacity: '0' },
                        },
                        bounce: {
                            '0%, 20%, 53%, 80%, 100%': { transform: 'translate3d(0,0,0)' },
                            '40%, 43%': { transform: 'translate3d(0,-8px,0)' },
                            '70%': { transform: 'translate3d(0,-4px,0)' },
                            '90%': { transform: 'translate3d(0,-2px,0)' },
                        },
                        shimmer: {
                            '0%': { 'background-position': '-200% 0' },
                            '100%': { 'background-position': '200% 0' },
                        },
                        'ripple-animation': {
                            'to': { transform: 'scale(2)', opacity: '0' },
                        },
                    },
                    backgroundImage: {
                        'gradient-bg': 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                        'eco-gradient': 'linear-gradient(135deg, #11998e 0%, #38ef7d 100%)',
                        'trash-gradient': 'linear-gradient(135deg, #3b82f6 0%, #1e40af 100%)',
                    },
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform-style: preserve-3d;
        }

        .card-hover:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .card-content {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
        }

        .shimmer {
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.3) 50%, transparent 70%);
            background-size: 200% 100%;
        }

        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: scale(0);
            pointer-events: none;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-bg flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="animate-floating absolute top-1/4 left-1/4 w-32 h-32 bg-white/10 rounded-full blur-xl"></div>
        <div class="animate-floatingDelayed absolute top-3/4 right-1/4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
        <div class="animate-floating absolute top-1/2 left-1/2 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
    </div>

    <!-- Main Container -->
    <div class="relative z-10 w-full max-w-6xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-6 sm:mb-8 md:mb-12">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-3 sm:mb-4 drop-shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                Selamat Datang
            </h1>
            <p class="text-base sm:text-lg md:text-xl text-white/90 font-light">
                Pilih portal admin untuk melanjutkan
            </p>
            <div class="w-16 sm:w-20 md:w-24 h-1 bg-white/30 mx-auto mt-4 sm:mt-5 md:mt-6 rounded-full"></div>
        </div>

        <!-- Cards Container -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8 max-w-4xl mx-auto">
            <!-- Eco Ahto Card -->
            <div class="card-hover group cursor-pointer" onclick="location.href='/admin-ecoahto/login'">
                <div class="relative overflow-hidden rounded-2xl">
                    <!-- Pulse Ring Effect -->
                    <div class="absolute inset-0 animate-pulseRing bg-eco-gradient rounded-2xl opacity-20"></div>

                    <!-- Card Background -->
                    <div class="bg-eco-gradient p-1 rounded-2xl">
                        <div class="card-content rounded-xl p-6 sm:p-8 h-64 sm:h-72 md:h-80 flex flex-col justify-center items-center relative overflow-hidden">
                            <!-- Shimmer Effect -->
                            <div class="absolute inset-0 shimmer opacity-0 group-hover:opacity-100 animate-shimmer transition-opacity duration-500"></div>

                            <!-- Icon -->
                            <div class="mb-4 sm:mb-5 md:mb-6 relative">
                                <div class="w-16 h-16 sm:w-18 sm:h-18 md:w-20 md:h-20 bg-eco-gradient rounded-full flex items-center justify-center animate-bounce group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 sm:w-9 sm:h-9 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3 class="text-xl sm:text-2xl font-bold text-gray-800 mb-2 sm:mb-3 group-hover:text-green-600 transition-colors duration-300">
                                Admin Eco Ahto
                            </h3>
                            <p class="text-sm sm:text-base text-gray-600 text-center mb-4 sm:mb-5 md:mb-6 leading-relaxed">
                                Portal manajemen sistem ramah lingkungan dan sustainability dashboard
                            </p>

                            <!-- Button -->
                            <div class="w-full">
                                <div class="bg-eco-gradient text-white py-2 sm:py-3 px-4 sm:px-6 rounded-xl font-semibold text-center transform group-hover:scale-105 transition-all duration-300 shadow-lg group-hover:shadow-xl">
                                    <span class="inline-flex items-center">
                                        Masuk Sekarang
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 inline-block ml-1 sm:ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trash2Move Card -->
            <div class="card-hover group cursor-pointer" onclick="location.href='/admin-trash/login'">
                <div class="relative overflow-hidden rounded-2xl">
                    <!-- Pulse Ring Effect -->
                    <div class="absolute inset-0 animate-pulseRing bg-trash-gradient rounded-2xl opacity-20"></div>

                    <!-- Card Background -->
                    <div class="bg-trash-gradient p-1 rounded-2xl">
                        <div class="card-content rounded-xl p-6 sm:p-8 h-64 sm:h-72 md:h-80 flex flex-col justify-center items-center relative overflow-hidden">
                            <!-- Shimmer Effect -->
                            <div class="absolute inset-0 shimmer opacity-0 group-hover:opacity-100 animate-shimmer transition-opacity duration-500"></div>

                            <!-- Icon -->
                            <div class="mb-4 sm:mb-5 md:mb-6 relative">
                                <div class="w-16 h-16 sm:w-18 sm:h-18 md:w-20 md:h-20 bg-trash-gradient rounded-full flex items-center justify-center animate-bounce group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 sm:w-9 sm:h-9 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3 class="text-xl sm:text-2xl font-bold text-gray-800 mb-2 sm:mb-3 group-hover:text-blue-600 transition-colors duration-300">
                                Admin Trash2Move
                            </h3>
                            <p class="text-sm sm:text-base text-gray-600 text-center mb-4 sm:mb-5 md:mb-6 leading-relaxed">
                                Kontrol penuh manajemen limbah dan tracking system untuk optimalisasi
                            </p>

                            <!-- Button -->
                            <div class="w-full">
                                <div class="bg-trash-gradient text-white py-2 sm:py-3 px-4 sm:px-6 rounded-xl font-semibold text-center transform group-hover:scale-105 transition-all duration-300 shadow-lg group-hover:shadow-xl">
                                    <span class="inline-flex items-center">
                                        Masuk Sekarang
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 inline-block ml-1 sm:ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 sm:mt-6 w-full sm:w-64 mx-auto text-center">
            <a href="/" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-xl text-center transition-colors duration-200 w-full sm:w-auto">
                Kembali ke Dashboard
            </a>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8 sm:mt-10 md:mt-12">
            <p class="text-white/70 text-xs sm:text-sm">
                © 2025 WasteWork — Bersama Kita Ubah Sampah Jadi Harapan
            </p>
        </div>
    </div>

    <!-- JavaScript for Enhanced Interactions -->
    <script>
        // Add subtle parallax effect on mouse move
        document.addEventListener('mousemove', (e) => {
            const cards = document.querySelectorAll('.card-hover');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;

            cards.forEach((card, index) => {
                const xOffset = (x - 0.5) * 10 * (index % 2 === 0 ? 1 : -1);
                const yOffset = (y - 0.5) * 10;

                card.style.transform = `translate(${xOffset}px, ${yOffset}px)`;
            });
        });

        // Reset transform on mouse leave
        document.addEventListener('mouseleave', () => {
            const cards = document.querySelectorAll('.card-hover');
            cards.forEach(card => {
                card.style.transform = '';
            });
        });

        // Add ripple effect on click
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('click', function(e) {
                let ripple = document.createElement('span');
                let rect = this.getBoundingClientRect();
                let size = Math.max(rect.width, rect.height);
                let x = e.clientX - rect.left - size / 2;
                let y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple', 'animate-ripple');

                this.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    </script>
</body>
</html>
