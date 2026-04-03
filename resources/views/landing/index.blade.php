@extends('layouts.app')
@section('title', "Reny's Birthday Countdown")
@section('content')

<div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; display: flex; align-items: center; justify-content: center; width: 100vw; height: 100vh; background: linear-gradient(135deg, #0f172a 0%, #1a1f4b 25%, #2d1b4e 50%, #1a2847 75%, #0f172a 100%); overflow: hidden; z-index: 0;">
    
    <!-- Glassy Background Effect -->
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-image: radial-gradient(circle at 20% 50%, rgba(236, 72, 153, 0.1) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(168, 85, 247, 0.1) 0%, transparent 50%); z-index: 1;"></div>
    
    <!-- Animated Rain Background -->
    <canvas id="rainCanvas" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 2;"></canvas>
    
    <!-- Animated Background Circles -->
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1;">
        <div style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 72, 153, 0.15) 0%, transparent 70%); border-radius: 50%; top: -100px; left: -100px; animation: pulse 4s infinite;"></div>
        <div style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle, rgba(168, 85, 247, 0.15) 0%, transparent 70%); border-radius: 50%; bottom: -100px; right: -100px; animation: pulse 4s infinite 2s;"></div>
    </div>
    
    <!-- Main Content -->
    <div style="position: relative; z-index: 10; width: 100%; max-width: 450px; padding: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        
        <!-- Welcome Section -->
        <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-radius: 30px; padding: 40px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2);" id="welcomeCard">
            
            <!-- Decorative Icon -->
            <div style="font-size: 3rem; margin-bottom: 24px; display: inline-block; animation: bounce 2s infinite;">✨</div>
            
            <!-- Title -->
            <h1 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 700; margin-bottom: 12px; background: linear-gradient(to right, #f472b6, #e879f9, #a78bfa); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                Reny
            </h1>
            
            <p style="font-size: 1.5rem; background: linear-gradient(to right, #f472b6, #e879f9); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600; margin-bottom: 8px; margin-top: 0;">
                Aprillia Safarty
            </p>
            
            <p style="font-size: 0.95rem; color: #d1d5db; margin-bottom: 32px; line-height: 1.6; margin-top: 0;">
                Waktu menghitung mundur untuk merayakan hari istimewamu...
            </p>
            
            <!-- Countdown Timer -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; margin-bottom: 32px;">
                <!-- Days -->
                <div style="background: rgba(236, 72, 153, 0.08); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); border-radius: 15px; padding: 16px; text-align: center; border: 1px solid rgba(236, 72, 153, 0.3);">
                    <div style="font-size: 1.875rem; font-weight: 700; background: linear-gradient(to right, #f472b6, #fb7185);" id="days">00</div>
                    <p style="margin: 0; padding-top: 8px; font-size: 0.875rem; color: #d1d5db;">Hari</p>
                </div>
                
                <!-- Hours -->
                <div style="background: rgba(168, 85, 247, 0.08); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); border-radius: 15px; padding: 16px; text-align: center; border: 1px solid rgba(168, 85, 247, 0.3);">
                    <div style="font-size: 1.875rem; font-weight: 700; background: linear-gradient(to right, #a78bfa, #c084fc);" id="hours">00</div>
                    <p style="margin: 0; padding-top: 8px; font-size: 0.875rem; color: #d1d5db;">Jam</p>
                </div>
                
                <!-- Minutes -->
                <div style="background: rgba(236, 72, 153, 0.08); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); border-radius: 15px; padding: 16px; text-align: center; border: 1px solid rgba(236, 72, 153, 0.3);">
                    <div style="font-size: 1.875rem; font-weight: 700; background: linear-gradient(to right, #f472b6, #fb7185);" id="minutes">00</div>
                    <p style="margin: 0; padding-top: 8px; font-size: 0.875rem; color: #d1d5db;">Menit</p>
                </div>
                
                <!-- Seconds -->
                <div style="background: rgba(168, 85, 247, 0.08); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); border-radius: 15px; padding: 16px; text-align: center; border: 1px solid rgba(168, 85, 247, 0.3);">
                    <div style="font-size: 1.875rem; font-weight: 700; background: linear-gradient(to right, #a78bfa, #c084fc);" id="seconds">00</div>
                    <p style="margin: 0; padding-top: 8px; font-size: 0.875rem; color: #d1d5db;">Detik</p>
                </div>
            </div>
            
            <!-- Decorative separator -->
            <div style="width: 64px; height: 4px; background: linear-gradient(to right, #f472b6, #e879f9); border-radius: 9999px; margin: 0 auto 32px;"></div>
            
            <!-- Message -->
            <p style="font-size: 0.95rem; color: #d1d5db; margin-bottom: 32px; line-height: 1.6; margin-top: 0;">
                Setiap detik yang berlalu adalah berkah untuk mempersiapkan kejutan istimewa untukmu 💕
            </p>
            
            <!-- Next Button -->
            <a href="/greeting" style="display: inline-block; background: rgba(236, 72, 153, 0.2); backdrop-filter: blur(15px); border-radius: 9999px; padding: 12px 40px; color: #f472b6; font-weight: 600; text-decoration: none; border: 1px solid rgba(236, 72, 153, 0.4); transition: all 0.3s ease; box-shadow: 0 8px 30px rgba(236, 72, 153, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.2); cursor: pointer;">
                Selanjutnya ✨ →
            </a>
            
        </div>
        
        <!-- Floating Hearts Animation Container -->
        <div id="heartsContainer" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 999;"></div>
        
        <!-- Hidden success state (shown after countdown) -->
        <div id="successMessage" style="display: none; background: rgba(236, 72, 153, 0.1); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); border-radius: 30px; padding: 40px; text-align: center; border: 1px solid rgba(236, 72, 153, 0.2); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); position: relative; z-index: 10; width: 100%; max-width: 450px; animation: pulse 2s infinite;">
            <div style="font-size: 4rem; margin-bottom: 24px;">🎉</div>
            <h2 style="font-family: 'Playfair Display', serif; font-size: 2rem; font-weight: 700; color: #be185d; margin-bottom: 16px;">
                Saatnya Tiba!
            </h2>
            <p style="color: #374151; margin-bottom: 24px; margin-top: 0;">Buka kejutan istimewaku untuk dirimu...</p>
            
            <a href="/greeting" style="display: inline-block; background: rgba(255, 255, 255, 0.25); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border-radius: 9999px; padding: 12px 32px; color: #ec4899; font-weight: 600; text-decoration: none; border: 1px solid rgba(255, 255, 255, 0.18); transition: all 0.3s ease;">
                ✨ Buka Kartu Ucapan ✨
            </a>
        </div>
        
    </div>
    
</div>

<style>
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 0.2; }
        50% { opacity: 0.3; }
    }
</style>

@endsection

@section('extra-js')
<script>
    // Rain animation
    const canvas = document.getElementById('rainCanvas');
    const ctx = canvas.getContext('2d');
    
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    
    const raindrops = [];
    
    class Raindrop {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height - canvas.height;
            this.size = Math.random() * 2 + 1;
            this.speedX = Math.random() * 0.5 - 0.25;
            this.speedY = Math.random() * 4 + 4;
            this.opacity = Math.random() * 0.5 + 0.2;
        }
        
        draw() {
            ctx.fillStyle = `rgba(236, 72, 153, ${this.opacity})`;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
        
        update() {
            this.x += this.speedX;
            this.y += this.speedY;
            
            if (this.y > canvas.height) {
                this.y = -10;
                this.x = Math.random() * canvas.width;
            }
        }
    }
    
    for (let i = 0; i < 100; i++) {
        raindrops.push(new Raindrop());
    }
    
    function animateRain() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        raindrops.forEach(drop => {
            drop.update();
            drop.draw();
        });
        requestAnimationFrame(animateRain);
    }
    
    animateRain();
    
    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    });
    
    // Countdown Timer Logic
    function updateCountdown() {
        const birthdayDate = new Date('2026-04-27T00:00:00').getTime();
        
        const countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const distance = birthdayDate - now;
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById('days').textContent = String(days).padStart(2, '0');
            document.getElementById('hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
            document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
            
            if (distance < 0) {
                clearInterval(countdownInterval);
                document.getElementById('welcomeCard').style.display = 'none';
                document.getElementById('successMessage').style.display = 'block';
                triggerCelebration();
            }
        }, 1000);
    }
    
    function triggerCelebration() {
        for (let i = 0; i < 30; i++) {
            setTimeout(() => {
                createFloatingHeart();
            }, i * 100);
        }
    }
    
    function createFloatingHeart() {
        const heart = document.createElement('div');
        heart.innerHTML = '❤️';
        heart.style.position = 'fixed';
        heart.style.left = Math.random() * window.innerWidth + 'px';
        heart.style.top = window.innerHeight + 'px';
        heart.style.fontSize = (Math.random() * 20 + 20) + 'px';
        heart.style.opacity = '1';
        heart.style.pointerEvents = 'none';
        heart.style.zIndex = '1000';
        
        document.getElementById('heartsContainer').appendChild(heart);
        
        const randomX = Math.random() * 200 - 100;
        const randomRotation = Math.random() * 360;
        
        let opacity = 1;
        let y = 0;
        const startTime = Date.now();
        const duration = 3000;
        
        function animHeart() {
            const elapsed = Date.now() - startTime;
            const progress = elapsed / duration;
            
            if (progress < 1) {
                y = progress * (window.innerHeight + 100);
                opacity = 1 - progress;
                heart.style.transform = `translateX(${randomX * progress}px) translateY(-${y}px) rotate(${randomRotation * progress}deg)`;
                heart.style.opacity = opacity;
                requestAnimationFrame(animHeart);
            } else {
                heart.remove();
            }
        }
        
        animHeart();
    }
    
    document.addEventListener('mousemove', (e) => {
        if (Math.random() > 0.98) {
            const heart = document.createElement('div');
            heart.innerHTML = '💕';
            heart.style.position = 'fixed';
            heart.style.left = e.clientX + 'px';
            heart.style.top = e.clientY + 'px';
            heart.style.fontSize = '16px';
            heart.style.opacity = '0.5';
            heart.style.pointerEvents = 'none';
            heart.style.zIndex = '999';
            
            document.getElementById('heartsContainer').appendChild(heart);
            
            let opacity = 0.5;
            let y = 0;
            const startTime = Date.now();
            const duration = 1500;
            
            function animHeart() {
                const elapsed = Date.now() - startTime;
                const progress = elapsed / duration;
                
                if (progress < 1) {
                    y = progress * 50;
                    opacity = 0.5 - (progress * 0.5);
                    heart.style.transform = `translateY(-${y}px)`;
                    heart.style.opacity = opacity;
                    requestAnimationFrame(animHeart);
                } else {
                    heart.remove();
                }
            }
            
            animHeart();
        }
    });
    
    document.addEventListener('DOMContentLoaded', () => {
        updateCountdown();
    });
    
    updateCountdown();
</script>
@endsection
