<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Login - Premium Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform-style: preserve-3d;
        }
        
        .card-hover:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .eco-gradient {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }
        
        .trash-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        .floating-delayed {
            animation: floating 3s ease-in-out infinite;
            animation-delay: -1.5s;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .pulse-ring {
            animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }
        
        @keyframes pulse-ring {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            80%, 100% {
                transform: scale(1.2);
                opacity: 0;
            }
        }
        
        .glow {
            filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.3));
        }
        
        .card-content {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        .icon-bounce {
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 53%, 80%, 100% {
                transform: translate3d(0,0,0);
            }
            40%, 43% {
                transform: translate3d(0,-8px,0);
            }
            70% {
                transform: translate3d(0,-4px,0);
            }
            90% {
                transform: translate3d(0,-2px,0);
            }
        }
        
        .shimmer {
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.3) 50%, transparent 70%);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
    </style>
</head>
<body class="min-h-screen gradient-bg flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="floating absolute top-1/4 left-1/4 w-32 h-32 bg-white bg-opacity-10 rounded-full blur-xl"></div>
        <div class="floating-delayed absolute top-3/4 right-1/4 w-24 h-24 bg-white bg-opacity-10 rounded-full blur-xl"></div>
        <div class="floating absolute top-1/2 left-1/2 w-40 h-40 bg-white bg-opacity-5 rounded-full blur-2xl"></div>
    </div>
    
    <!-- Main Container -->
    <div class="relative z-10 w-full max-w-6xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-white mb-4 glow">
                Selamat Datang
            </h1>
            <p class="text-xl text-white text-opacity-90 font-light">
                Pilih portal admin untuk melanjutkan
            </p>
            <div class="w-24 h-1 bg-white bg-opacity-30 mx-auto mt-6 rounded-full"></div>
        </div>
        
        <!-- Cards Container -->
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Eco Ahto Card -->
            <div class="card-hover group cursor-pointer" onclick="location.href='/admin-ecoahto/login'">
                <div class="relative overflow-hidden rounded-2xl">
                    <!-- Pulse Ring Effect -->
                    <div class="absolute inset-0 pulse-ring eco-gradient rounded-2xl opacity-20"></div>
                    
                    <!-- Card Background -->
                    <div class="eco-gradient p-1 rounded-2xl">
                        <div class="card-content rounded-xl p-8 h-80 flex flex-col justify-center items-center relative overflow-hidden">
                            <!-- Shimmer Effect -->
                            <div class="absolute inset-0 shimmer opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Icon -->
                            <div class="mb-6 relative">
                                <div class="w-20 h-20 eco-gradient rounded-full flex items-center justify-center icon-bounce group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Content -->
                            <h3 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-green-600 transition-colors duration-300">
                                Admin Eco Ahto
                            </h3>
                            <p class="text-gray-600 text-center mb-6 leading-relaxed">
                                Portal manajemen sistem ramah lingkungan dan sustainability dashboard
                            </p>
                            
                            <!-- Button -->
                            <div class="w-full">
                                <div class="eco-gradient text-white py-3 px-6 rounded-xl font-semibold text-center transform group-hover:scale-105 transition-all duration-300 shadow-lg group-hover:shadow-xl">
                                    Masuk Sekarang
                                    <svg class="w-5 h-5 inline-block ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
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
                    <div class="absolute inset-0 pulse-ring trash-gradient rounded-2xl opacity-20"></div>
                    
                    <!-- Card Background -->
                    <div class="trash-gradient p-1 rounded-2xl">
                        <div class="card-content rounded-xl p-8 h-80 flex flex-col justify-center items-center relative overflow-hidden">
                            <!-- Shimmer Effect -->
                            <div class="absolute inset-0 shimmer opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Icon -->
                            <div class="mb-6 relative">
                                <div class="w-20 h-20 trash-gradient rounded-full flex items-center justify-center icon-bounce group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Content -->
                            <h3 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                                Admin Trash2Move
                            </h3>
                            <p class="text-gray-600 text-center mb-6 leading-relaxed">
                                Kontrol penuh manajemen limbah dan tracking system untuk optimalisasi
                            </p>
                            
                            <!-- Button -->
                            <div class="w-full">
                                <div class="trash-gradient text-white py-3 px-6 rounded-xl font-semibold text-center transform group-hover:scale-105 transition-all duration-300 shadow-lg group-hover:shadow-xl">
                                    Masuk Sekarang
                                    <svg class="w-5 h-5 inline-block ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="text-center mt-12">
            <p class="text-white text-opacity-70 text-sm">
                © 2024 Premium Dashboard System. Secure & Reliable.
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
                ripple.classList.add('ripple');
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    </script>
    
    <style>
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
        }
        
        @keyframes ripple-animation {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
    </style>
</body>
</html>