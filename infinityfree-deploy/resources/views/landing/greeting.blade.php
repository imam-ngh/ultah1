@extends('layouts.app')
@section('title', "Kartu Ucapan Istimewa")
@section('content')

<div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; display: flex; align-items: center; justify-content: center; width: 100vw; height: 100vh; background: linear-gradient(135deg, #0f172a 0%, #1a1f4b 25%, #2d1b4e 50%, #1a2847 75%, #0f172a 100%); overflow: hidden; z-index: 0;">
    
    <!-- Animated Glassy Background Effect -->
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-image: radial-gradient(circle at 20% 50%, rgba(236, 72, 153, 0.1) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(168, 85, 247, 0.1) 0%, transparent 50%); z-index: 1; animation: gradientShift 8s ease-in-out infinite;"></div>
    
    <!-- Background decorations with animations -->
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1;">
        <div style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 72, 153, 0.15) 0%, transparent 70%); border-radius: 50%; top: -100px; left: -100px; animation: pulse 4s infinite, float 6s ease-in-out infinite;"></div>
        <div style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle, rgba(168, 85, 247, 0.15) 0%, transparent 70%); border-radius: 50%; bottom: -100px; right: -100px; animation: pulse 4s infinite 2s, float 7s ease-in-out infinite 1s;"></div>
        <div style="position: absolute; width: 100%; height: 100%;" id="particleContainer"></div>
    </div>
    
    <!-- Main content -->
    <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 10; width: 100%; max-width: 700px; padding: 20px; height: 90vh; overflow-y: auto; overflow-x: hidden;" id="mainContent">
        
        <!-- Card Container (Initial State) -->
        <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-radius: 30px; padding: 40px; border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2); min-height: auto; position: relative; overflow: hidden; text-align: center; transition: all 0.6s ease-out; opacity: 1;" id="cardContainer">
            
            <!-- Animated gradient background -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(45deg, rgba(236, 72, 153, 0.05) 0%, rgba(168, 85, 247, 0.05) 100%); animation: gradientFlow 6s ease-in-out infinite; pointer-events: none;"></div>
            
            <!-- Decorative header -->
            <div style="text-align: center; margin-bottom: 32px; position: relative; z-index: 2;">
                <div style="font-size: 3rem; display: inline-block; margin-bottom: 16px; animation: float 3s ease-in-out infinite, glow 2s ease-in-out infinite;">✨</div>
                <h1 style="font-family: 'Playfair Display', serif; font-size: 2.25rem; font-weight: 700; background: linear-gradient(to right, #f472b6, #e879f9); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 8px; text-shadow: 0 0 20px rgba(236, 72, 153, 0.3);">
                    🎂 Selamat Ulang Tahun 🎂
                </h1>
                <h2 style="font-size: 1.5rem; background: linear-gradient(to right, #a78bfa, #c084fc); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600; margin-top: 0; margin-bottom: 24px;">
                    Reny Aprillia Safarty
                </h2>
            </div>
            
            <!-- Animated separator line -->
            <div style="width: 96px; height: 4px; background: linear-gradient(to right, #f472b6, #e879f9); border-radius: 9999px; margin: 0 auto 32px; box-shadow: 0 0 20px rgba(236, 72, 153, 0.5); animation: glow 2s ease-in-out infinite;"></div>
            
            <!-- Message Preview -->
            <p style="color: #d1d5db; font-size: 0.95rem; margin: 24px 0; font-style: italic;">
                💌 Tekan tombol di bawah untuk membuka pesan istimewa...
            </p>
            
            <!-- Open Message Button -->
            <button onclick="openMessage()" id="openButton" style="background: linear-gradient(135deg, rgba(236, 72, 153, 0.3), rgba(168, 85, 247, 0.3)); backdrop-filter: blur(15px); border: 2px solid rgba(236, 72, 153, 0.5); border-radius: 50px; padding: 14px 40px; color: #f472b6; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.4s ease; box-shadow: 0 0 20px rgba(236, 72, 153, 0.3); position: relative; z-index: 3; font-family: 'Playfair Display', serif; margin-top: 20px;">
                💝 Baca Pesan 💝
            </button>
            
        </div>
        
        <!-- Message Content (Initially Hidden) -->
        <div style="opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1); pointer-events: none;" id="messageContent">
            
            <!-- Glossy Message Container -->
            <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-radius: 30px; padding: 32px; border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2); margin-bottom: 24px;">
                <!-- Greeting Text -->
                <div style="color: #d1d5db; line-height: 1.5; font-size: 1rem; position: relative; z-index: 2;" id="greetingContent">
                </div>
            </div>
            
            <!-- Glossy Prayer Container -->
            <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-radius: 30px; padding: 32px; border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2); margin-top: 24px;">
                <!-- Prayer Section -->
                <div style="opacity: 0; position: relative; z-index: 2;" id="prayerSection">
                    <h3 style="text-align: center; font-size: 1.5rem; font-weight: 700; background: linear-gradient(to right, #f472b6, #e879f9); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 24px; font-family: 'Playfair Display', serif; text-shadow: 0 0 15px rgba(236, 72, 153, 0.2);">
                        🙏 Doa-doaku Untukmu 🙏
                    </h3>
                    <div style="display: flex; flex-direction: column; gap: 16px;" id="prayerContainer">
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Action Buttons (shown after message appears) -->
        <div style="display: flex; flex-direction: column; gap: 16px; margin-top: 32px; justify-content: center; opacity: 0; transform: translateY(20px); transition: all 0.6s ease-out; pointer-events: none;" id="actionButtons">
            <a href="/" style="display: inline-block; background: rgba(236, 72, 153, 0.15); backdrop-filter: blur(15px); border-radius: 9999px; padding: 12px 32px; color: #f472b6; font-weight: 600; text-decoration: none; border: 1px solid rgba(236, 72, 153, 0.4); text-align: center; transition: all 0.3s ease; box-shadow: 0 0 15px rgba(236, 72, 153, 0.2);" class="action-btn">
                ← Kembali
            </a>
            <a href="/album" style="display: inline-block; background: rgba(168, 85, 247, 0.15); backdrop-filter: blur(15px); border-radius: 9999px; padding: 12px 32px; color: #c084fc; font-weight: 600; text-decoration: none; border: 1px solid rgba(168, 85, 247, 0.4); text-align: center; transition: all 0.3s ease; box-shadow: 0 0 15px rgba(168, 85, 247, 0.2);" class="action-btn">
                Buka Album Kenangan →
            </a>
        </div>
        
    </div>
    
    <!-- Celebratory Popup Modal -->
    <div id="celebrationPopup" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0); opacity: 0; z-index: 1000; transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1); pointer-events: none;">
        <div style="font-size: 5rem; animation: popBounce 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);">🎉</div>
        <div style="font-size: 4rem; margin-top: -20px; animation: popBounce 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) 0.1s both;">✨</div>
    </div>
    
    <!-- Confetti Animation -->
    <div id="confettiContainer" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 999; pointer-events: none;"></div>
    
</div>

<style>
    @keyframes pulse {
        0%, 100% { opacity: 0.15; }
        50% { opacity: 0.25; }
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
    }
    
    @keyframes glow {
        0%, 100% { text-shadow: 0 0 10px rgba(236, 72, 153, 0.3), 0 0 20px rgba(236, 72, 153, 0.1); }
        50% { text-shadow: 0 0 20px rgba(236, 72, 153, 0.6), 0 0 40px rgba(168, 85, 247, 0.3); }
    }
    
    @keyframes slideInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideInDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes expandWidth {
        from { width: 0; }
        to { width: 96px; }
    }
    
    @keyframes gradientShift {
        0%, 100% { background-image: radial-gradient(circle at 20% 50%, rgba(236, 72, 153, 0.1) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(168, 85, 247, 0.1) 0%, transparent 50%); }
        50% { background-image: radial-gradient(circle at 30% 40%, rgba(236, 72, 153, 0.15) 0%, transparent 50%), radial-gradient(circle at 70% 90%, rgba(168, 85, 247, 0.15) 0%, transparent 50%); }
    }
    
    @keyframes gradientFlow {
        0%, 100% { opacity: 0.05; }
        50% { opacity: 0.1; }
    }
    
    @keyframes bounceIn {
        0% { opacity: 0; transform: scale(0.8) translateY(20px); }
        50% { opacity: 1; }
        100% { opacity: 1; transform: scale(1) translateY(0); }
    }
    
    @keyframes popBounce {
        0% { transform: scale(0) rotate(-180deg); opacity: 0; }
        50% { transform: scale(1.2) rotate(0deg); }
        100% { transform: scale(1) rotate(0deg); opacity: 1; }
    }
    
    @keyframes cardFadeOut {
        0% { opacity: 1; transform: scale(1); }
        100% { opacity: 0; transform: scale(0.8) rotateY(90deg); }
    }
    
    @keyframes confetti {
        0% { transform: translate(0, 0) rotate(0deg); opacity: 1; }
        100% { transform: translate(var(--tx), var(--ty)) rotate(360deg); opacity: 0; }
    }
    
    @keyframes particleFloat {
        0% { transform: translateY(0) translateX(0) scale(1); opacity: 0; }
        10% { opacity: 0.6; }
        50% { transform: translateY(-60px) translateX(0) scale(1.2); opacity: 1; }
        90% { opacity: 0.6; }
        100% { transform: translateY(-120px) translateX(0) scale(0.8); opacity: 0; }
    }
    
    #openButton {
        transition: all 0.4s ease;
    }
    
    #openButton:hover {
        transform: scale(1.08);
        box-shadow: 0 0 40px rgba(236, 72, 153, 0.6) !important;
        background: linear-gradient(135deg, rgba(236, 72, 153, 0.5), rgba(168, 85, 247, 0.5)) !important;
    }
    
    #openButton:active {
        transform: scale(0.95);
    }
    
    .action-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(236, 72, 153, 0.4) !important;
        background: rgba(236, 72, 153, 0.25) !important;
    }
    
    .prayer-item {
        padding: 12px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 12px;
        border-left: 3px solid;
        border-image: linear-gradient(to bottom, #f472b6, #e879f9) 1;
    }
    
    .floating-particle {
        position: fixed;
        font-size: 1.2rem;
        opacity: 0.6;
        pointer-events: none;
        animation: particleFloat 6s ease-in-out forwards;
    }
</style>

@endsection

@section('extra-js')
<script>
    // Create floating particles
    function createFloatingParticles() {
        const container = document.getElementById('particleContainer');
        if (!container) return;
        
        const particles = ['✨', '💫', '⭐', '💕', '🌟'];
        for (let i = 0; i < 12; i++) {
            const particle = document.createElement('div');
            particle.className = 'floating-particle';
            particle.textContent = particles[Math.floor(Math.random() * particles.length)];
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            
            const duration = 4 + Math.random() * 4;
            const delay = Math.random() * 2;
            particle.style.animation = `particleFloat ${duration}s ease-in-out ${delay}s infinite`;
            
            container.appendChild(particle);
        }
    }
    
    // Create confetti
    function createConfetti() {
        const container = document.getElementById('confettiContainer');
        if (!container) return;
        
        const confettiPieces = ['🎉', '✨', '💖', '🎊', '⭐'];
        for (let i = 0; i < 30; i++) {
            const confetti = document.createElement('div');
            confetti.textContent = confettiPieces[Math.floor(Math.random() * confettiPieces.length)];
            confetti.style.position = 'fixed';
            confetti.style.left = Math.random() * 100 + '%';
            confetti.style.top = '-10px';
            confetti.style.fontSize = (20 + Math.random() * 20) + 'px';
            confetti.style.opacity = '1';
            confetti.style.pointerEvents = 'none';
            confetti.style.zIndex = '999';
            
            const tx = (Math.random() * 200 - 100);
            const ty = window.innerHeight + 100;
            const duration = 2 + Math.random() * 1;
            
            confetti.style.setProperty('--tx', tx + 'px');
            confetti.style.setProperty('--ty', ty + 'px');
            confetti.style.animation = `confetti ${duration}s ease-out forwards`;
            
            container.appendChild(confetti);
            setTimeout(() => confetti.remove(), duration * 1000);
        }
    }
    
    class TypingEffect {
        constructor(element, text, speed = 50, delay = 0) {
            this.element = element;
            this.text = text;
            this.speed = speed;
            this.delay = delay;
            this.index = 0;
        }
        
        start() {
            return new Promise((resolve) => {
                setTimeout(() => { this.type(resolve); }, this.delay);
            });
        }
        
        type(callback) {
            if (this.index < this.text.length) {
                this.element.textContent += this.text.charAt(this.index);
                this.index++;
                setTimeout(() => this.type(callback), this.speed);
            } else {
                callback();
            }
        }
    }
    
    let messageOpened = false;
    
    async function openMessage() {
        if (messageOpened) return;
        messageOpened = true;
        
        const popup = document.getElementById('celebrationPopup');
        if (popup) {
            popup.style.opacity = '1';
            popup.style.transform = 'translate(-50%, -50%) scale(1)';
        }
        
        createConfetti();
        
        const cardContainer = document.getElementById('cardContainer');
        if (cardContainer) {
            cardContainer.style.opacity = '0';
            cardContainer.style.transform = 'scale(0.8) rotateY(90deg)';
            cardContainer.style.pointerEvents = 'none';
        }
        
        await new Promise(r => setTimeout(r, 600));
        
        if (popup) {
            popup.style.opacity = '0';
            popup.style.transform = 'translate(-50%, -50%) scale(0)';
        }
        
        const messageContent = document.getElementById('messageContent');
        if (messageContent) {
            messageContent.style.opacity = '1';
            messageContent.style.transform = 'translateY(0)';
            messageContent.style.pointerEvents = 'auto';
        }
        
        await new Promise(r => setTimeout(r, 400));
        
        const greetingText = [
            "Selamat ulang tahun, Sayang! 💕",
            "",
            "Hari istimewa ini adalah momen berharga untuk mengucapkan bahwa kehadiran dirimu telah mengubah seluruh warna hidupku. Setiap tawa mu adalah musik terindah, setiap senyuman mu adalah cahaya yang menerangi hariku.",
            "",
            "Terima kasih telah menerima diri ku apa adanya, terima kasih telah menjadi alasan aku bangun setiap pagi dengan penuh harapan. Cinta dan sayang ku untukmu tumbuh seiring dengan setiap detik yang kita lewati bersama.",
            "",
            "Di hari istimewa ini, aku ingin menjanjikan bahwa aku akan terus berada disisimu, mendampingi setiap langkah, merayakan setiap kemenangan, dan bersama menghadapi setiap tantangan.",
            "",
            "Semoga hari ini membawa kebahagiaan tanpa batas, semoga tahun ini penuh dengan momen indah yang akan kita ingat selamanya. Aku sangat mencintai dirimu, Reny. Selamanya."
        ];
        
        const prayers = [
            "Ya Tuhan yang Maha Agung, berkahi Reny dengan kesehatan yang sempurna, kebahagiaan yang melimpah, dan usia yang panjang penuh berkah.",
            "Semoga setiap langkah mu dibimbing oleh kebijaksanaan, keberanian, dan cinta yang tulus dalam menjalani kehidupan.",
            "Semoga doa-doa indah mu terkabul, impian-impian terindah mu menjadi kenyataan, dan setiap usaha mu berbuah hasil yang gemilang.",
            "Semoga orang-orang terkasih selalu ada di sampingmu, memberikan dukungan, kasih sayang, dan kebahagiaan yang tak terhingga.",
            "Semoga setiap hari mu dipenuhi dengan ketenangan, kedamaian, dan kebaikan yang memancar dari hati mu sendiri.",
            "Semoga kamu selalu tersenyum, bahagia, dan merasakan keajaiban hidup di setiap momen yang berharga.",
            "Semoga cinta, harapan, dan keyakinan mu memberikan kekuatan untuk meraih masa depan yang lebih indah dan bermakna."
        ];
        
        const greetingContent = document.getElementById('greetingContent');
        if (!greetingContent) return;
        
        for (let line of greetingText) {
            if (line === '') {
                const spacer = document.createElement('div');
                spacer.style.height = '8px';
                greetingContent.appendChild(spacer);
            } else {
                const p = document.createElement('p');
                p.style.cssText = 'opacity: 0; text-align: justify; margin: 12px 0; animation: fadeIn 0.4s ease-out forwards;';
                greetingContent.appendChild(p);
                
                await new TypingEffect(p, line, 12, 30).start();
                p.style.opacity = '1';
                await new Promise(r => setTimeout(r, 80));
            }
        }
        
        const prayerSection = document.getElementById('prayerSection');
        if (prayerSection) {
            prayerSection.style.opacity = '1';
            prayerSection.style.animation = 'fadeIn 0.6s ease-out';
            prayerSection.style.transition = 'opacity 0.6s ease-out';
        }
        
        await new Promise(r => setTimeout(r, 200));
        
        const prayerContainer = document.getElementById('prayerContainer');
        if (!prayerContainer) return;
        
        // Combine all prayers into one long text
        const prayerText = prayers.join(' ');
        
        const prayerEl = document.createElement('p');
        prayerEl.style.cssText = 'opacity: 0; color: #d1d5db; text-align: center; font-style: italic; font-size: 0.95rem; margin: 0; line-height: 1.6; animation: fadeIn 0.4s ease-out forwards;';
        prayerContainer.appendChild(prayerEl);
        
        await new TypingEffect(prayerEl, prayerText, 12, 80).start();
        prayerEl.style.opacity = '1';
        
        const actionButtons = document.getElementById('actionButtons');
        if (actionButtons) {
            actionButtons.style.opacity = '1';
            actionButtons.style.transform = 'translateY(0)';
            actionButtons.style.pointerEvents = 'auto';
        }
        
        document.addEventListener('mousemove', (e) => {
            if (Math.random() > 0.93) {
                const hearts = ['💕', '💖', '💗', '💝', '✨'];
                const heart = document.createElement('div');
                heart.innerHTML = hearts[Math.floor(Math.random() * hearts.length)];
                heart.style.position = 'fixed';
                heart.style.left = e.clientX + 'px';
                heart.style.top = e.clientY + 'px';
                heart.style.fontSize = (18 + Math.random() * 8) + 'px';
                heart.style.opacity = '0.8';
                heart.style.pointerEvents = 'none';
                heart.style.zIndex = '999';
                heart.style.fontWeight = 'bold';
                
                document.body.appendChild(heart);
                
                let opacity = 0.8;
                let y = 0;
                const startTime = Date.now();
                const duration = 1800;
                const randomX = (Math.random() * 100 - 50);
                
                function anim() {
                    const elapsed = Date.now() - startTime;
                    const progress = elapsed / duration;
                    
                    if (progress < 1) {
                        y = progress * 100;
                        opacity = 0.8 - (progress * 0.8);
                        heart.style.transform = `translateY(-${y}px) translateX(${randomX * progress}px) rotate(${progress * 360}deg) scale(${1 + progress * 0.3})`;
                        heart.style.opacity = opacity;
                        requestAnimationFrame(anim);
                    } else {
                        heart.remove();
                    }
                }
                
                anim();
            }
        });
    }
    
    document.addEventListener('DOMContentLoaded', () => {
        createFloatingParticles();
    });
</script>
@endsection
