<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(168, 85, 247, 0.4); }
            50% { box-shadow: 0 0 40px rgba(168, 85, 247, 0.8); }
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .float-animation { animation: float 3s ease-in-out infinite; }
        .pulse-glow { animation: pulse-glow 2s ease-in-out infinite; }
        .shake-animation { animation: shake 0.5s ease-in-out; }
        .gradient-bg {
            background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c);
            background-size: 400% 400%;
            animation: gradient-shift 8s ease infinite;
        }
        .fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
        
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4 overflow-hidden">
    
    <!-- Floating shapes background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-20 w-20 h-20 bg-white/10 rounded-full float-animation"></div>
        <div class="absolute top-40 right-32 w-16 h-16 bg-purple-300/20 rounded-full float-animation" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-32 left-1/4 w-12 h-12 bg-pink-300/20 rounded-full float-animation" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 bg-blue-300/10 rounded-full float-animation" style="animation-delay: 0.5s;"></div>
    </div>

    <div class="text-center relative z-10 max-w-2xl mx-auto">
        
        <!-- 404 Number with animation -->
        <div class="mb-8 opacity-0 fade-in-up">
            <h1 class="text-9xl md:text-[12rem] font-black text-white/90 leading-none tracking-tight relative">
                4
                <span class="inline-block float-animation text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400" style="animation-delay: 0.5s;">0</span>
                4
                <div class="absolute inset-0 text-9xl md:text-[12rem] font-black text-white/10 blur-sm -z-10">404</div>
            </h1>
        </div>
        
        <!-- Robot/Error Icon -->
        <div class="mb-8 opacity-0 fade-in-up delay-100">
            <div class="inline-block p-6 glass-effect rounded-full pulse-glow">
                <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1H5C3.89 1 3 1.89 3 3V7H5V3H14L19 8V9H21ZM7 11C5.9 11 5 11.9 5 13S5.9 15 7 15 9 14.1 9 13 8.1 11 7 11ZM17 11C15.9 11 15 11.9 15 13S15.9 15 17 15 19 14.1 19 13 18.1 11 17 11ZM7.5 18C7.5 17.2 8.2 16.5 9 16.5H15C15.8 16.5 16.5 17.2 16.5 18V21C16.5 21.8 15.8 22.5 15 22.5H9C8.2 22.5 7.5 21.8 7.5 21V18Z"/>
                </svg>
            </div>
        </div>
        
        <!-- Error Message -->
        <div class="mb-8 opacity-0 fade-in-up delay-200">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-4 tracking-tight">
                Oops! Page Not Found
            </h2>
            <p class="text-lg md:text-xl text-white/80 leading-relaxed max-w-md mx-auto">
                The page you're looking for seems to have vanished into the digital void. Let's get you back on track!
            </p>
        </div>
        
        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center opacity-0 fade-in-up delay-300">
            <button 
                onclick="goHome()" 
                class="group px-8 py-4 bg-white text-purple-600 rounded-full font-semibold text-lg transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:bg-opacity-90 flex items-center gap-3"
            >
                <svg class="w-5 h-5 transition-transform group-hover:-translate-x-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                </svg>
                Go Home
            </button>
            
            <button 
                onclick="goBack()" 
                class="group px-8 py-4 glass-effect text-white rounded-full font-semibold text-lg transition-all duration-300 hover:scale-105 hover:bg-white/20 flex items-center gap-3"
            >
                <svg class="w-5 h-5 transition-transform group-hover:-translate-x-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                </svg>
                Go Back
            </button>
        </div>
    </div>

    <script>
        function goHome() {
            // Add shake animation before redirect
            document.querySelector('body').style.animation = 'shake 0.5s ease-in-out';
            setTimeout(() => {
                window.location.href = '/';
            }, 500);
        }
        
        function goBack() {
            window.history.back();
        }
        
        // Add some interactive effects
        document.addEventListener('mousemove', (e) => {
            const shapes = document.querySelectorAll('.float-animation');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            shapes.forEach((shape, index) => {
                const speed = (index + 1) * 0.5;
                const x = (mouseX - 0.5) * speed;
                const y = (mouseY - 0.5) * speed;
                shape.style.transform = `translateX(${x}px) translateY(${y}px)`;
            });
        });
        
        // Add click effect to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', (e) => {
                const ripple = document.createElement('span');
                const rect = button.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255, 255, 255, 0.3);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s ease-out;
                    pointer-events: none;
                `;
                
                button.style.position = 'relative';
                button.style.overflow = 'hidden';
                button.appendChild(ripple);
                
                setTimeout(() => ripple.remove(), 600);
            });
        });
        
        // Add ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>