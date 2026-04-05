@extends('layouts.app')
@section('title', "Album Kenangan - Reny's Memories")
@section('content')

<!-- Album Container -->
<div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, #0f172a 0%, #1a1f4b 25%, #2d1b4e 50%, #1a2847 75%, #0f172a 100%); width: 100vw; height: 100vh; overflow: hidden; z-index: 1;">
    
    <!-- Glassy Background Effect -->
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-image: radial-gradient(circle at 20% 50%, rgba(236, 72, 153, 0.1) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(168, 85, 247, 0.1) 0%, transparent 50%); z-index: 1;"></div>
    
    <!-- Decorative Blobs -->
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1; overflow: hidden;">
        <div style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 72, 153, 0.15) 0%, transparent 70%); border-radius: 50%; top: -100px; left: -100px; animation: pulse 4s infinite, float 6s ease-in-out infinite;"></div>
        <div style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle, rgba(168, 85, 247, 0.15) 0%, transparent 70%); border-radius: 50%; bottom: -100px; right: -100px; animation: pulse 4s infinite 2s, float 7s ease-in-out infinite 1s;"></div>
        <div style="position: absolute; width: 100%; height: 100%;" id="particleContainer"></div>
    </div>
    
    <!-- Main Content -->
    <div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; z-index: 10; width: 100%; height: 100%; overflow-y: auto; overflow-x: hidden; display: flex; flex-direction: column;">
        
        <!-- Header -->
        <div style="text-align: center; padding: 40px 20px 30px; flex-shrink: 0;">
            <h1 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 700; background: linear-gradient(to right, #f472b6, #e879f9); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin: 0 0 8px 0; animation: slideInDown 0.6s ease-out;">
                📖 Album Kenangan 📖
            </h1>
            <p style="color: #d1d5db; font-size: 1rem; margin: 0; animation: slideInDown 0.6s ease-out 0.1s both;">
                Enam momen terindah dalam perjalanan cinta kita...
            </p>
        </div>
        
        <!-- Gallery Grid -->
        <div style="flex: 1; padding: 0 20px 40px; display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; align-items: flex-start; overflow-y: auto;">
            
            <div onclick="openMemory(1)" style="cursor: pointer; width: 100%; max-width: 240px; height: 280px; animation: slideInUp 0.6s ease-out 0.15s both;" class="memory-card">
                <div style="position: relative; width: 100%; height: 100%; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);" onmouseover="cardGlow(this)" onmouseout="cardGlowOff(this)">
                    <div style="width: 100%; height: 140px; background: linear-gradient(135deg, #f472b6 0%, #ec4899 100%); display: flex; align-items: center; justify-content: center; font-size: 3rem;">💕</div>
                    <div style="padding: 16px 12px; text-align: center;">
                        <h3 style="font-size: 1rem; font-weight: 700; color: #be185d; margin: 0 0 6px 0;">Kenangan Pertama</h3>
                        <p style="font-size: 0.8rem; color: #a855f7; margin: 0; font-weight: 600;">2024 - Awal Cerita</p>
                    </div>
                </div>
            </div>
            
            <div onclick="openMemory(2)" style="cursor: pointer; width: 100%; max-width: 240px; height: 280px; animation: slideInUp 0.6s ease-out 0.25s both;" class="memory-card">
                <div style="position: relative; width: 100%; height: 100%; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);" onmouseover="cardGlow(this)" onmouseout="cardGlowOff(this)">
                    <div style="width: 100%; height: 140px; background: linear-gradient(135deg, #fb7185 0%, #f43f5e 100%); display: flex; align-items: center; justify-content: center; font-size: 3rem;">😊</div>
                    <div style="padding: 16px 12px; text-align: center;">
                        <h3 style="font-size: 1rem; font-weight: 700; color: #be123c; margin: 0 0 6px 0;">Senyuman Terindah</h3>
                        <p style="font-size: 0.8rem; color: #e11d48; margin: 0; font-weight: 600;">2024 - Kebersamaan</p>
                    </div>
                </div>
            </div>
            
            <div onclick="openMemory(3)" style="cursor: pointer; width: 100%; max-width: 240px; height: 280px; animation: slideInUp 0.6s ease-out 0.35s both;" class="memory-card">
                <div style="position: relative; width: 100%; height: 100%; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);" onmouseover="cardGlow(this)" onmouseout="cardGlowOff(this)">
                    <div style="width: 100%; height: 140px; background: linear-gradient(135deg, #a855f7 0%, #9333ea 100%); display: flex; align-items: center; justify-content: center; font-size: 3rem;">🌍</div>
                    <div style="padding: 16px 12px; text-align: center;">
                        <h3 style="font-size: 1rem; font-weight: 700; color: #7e22ce; margin: 0 0 6px 0;">Petualangan Bersama</h3>
                        <p style="font-size: 0.8rem; color: #a21caf; margin: 0; font-weight: 600;">2024 - Eksplorasi</p>
                    </div>
                </div>
            </div>
            
            <div onclick="openMemory(4)" style="cursor: pointer; width: 100%; max-width: 240px; height: 280px; animation: slideInUp 0.6s ease-out 0.45s both;" class="memory-card">
                <div style="position: relative; width: 100%; height: 100%; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);" onmouseover="cardGlow(this)" onmouseout="cardGlowOff(this)">
                    <div style="width: 100%; height: 140px; background: linear-gradient(135deg, #a78bfa 0%, #8b5cf6 100%); display: flex; align-items: center; justify-content: center; font-size: 3rem;">⭐</div>
                    <div style="padding: 16px 12px; text-align: center;">
                        <h3 style="font-size: 1rem; font-weight: 700; color: #6d28d9; margin: 0 0 6px 0;">Malam Berbintang</h3>
                        <p style="font-size: 0.8rem; color: #7c3aed; margin: 0; font-weight: 600;">2024 - Ketenangan</p>
                    </div>
                </div>
            </div>
            
            <div onclick="openMemory(5)" style="cursor: pointer; width: 100%; max-width: 240px; height: 280px; animation: slideInUp 0.6s ease-out 0.55s both;" class="memory-card">
                <div style="position: relative; width: 100%; height: 100%; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);" onmouseover="cardGlow(this)" onmouseout="cardGlowOff(this)">
                    <div style="width: 100%; height: 140px; background: linear-gradient(135deg, #e879f9 0%, #d946ef 100%); display: flex; align-items: center; justify-content: center; font-size: 3rem;">🤝</div>
                    <div style="padding: 16px 12px; text-align: center;">
                        <h3 style="font-size: 1rem; font-weight: 700; color: #be185d; margin: 0 0 6px 0;">Kehangatan Dekatmu</h3>
                        <p style="font-size: 0.8rem; color: #c2185b; margin: 0; font-weight: 600;">2024 - Kenyamanan</p>
                    </div>
                </div>
            </div>
            
            <div onclick="openMemory(6)" style="cursor: pointer; width: 100%; max-width: 240px; height: 280px; animation: slideInUp 0.6s ease-out 0.65s both;" class="memory-card">
                <div style="position: relative; width: 100%; height: 100%; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);" onmouseover="cardGlow(this)" onmouseout="cardGlowOff(this)">
                    <div style="width: 100%; height: 140px; background: linear-gradient(135deg, #c084fc 0%, #c026d3 100%); display: flex; align-items: center; justify-content: center; font-size: 3rem;">👫</div>
                    <div style="padding: 16px 12px; text-align: center;">
                        <h3 style="font-size: 1rem; font-weight: 700; color: #a71930; margin: 0 0 6px 0;">Masa Depan Kita</h3>
                        <p style="font-size: 0.8rem; color: #b91e63; margin: 0; font-weight: 600;">2026 - Seterusnya</p>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Footer Navigation -->
        <div style="flex-shrink: 0; padding: 20px; text-align: center; border-top: 1px solid rgba(255, 255, 255, 0.1);">
            <a href="/greeting" style="display: inline-block; background: rgba(236, 72, 153, 0.15); backdrop-filter: blur(15px); border: 1px solid rgba(236, 72, 153, 0.4); border-radius: 9999px; padding: 12px 32px; color: #f472b6; font-weight: 600; text-decoration: none; transition: all 0.3s ease; font-size: 0.95rem;">
                ← Kembali ke Kartu Ucapan
            </a>
        </div>
        
    </div>
    
</div>

<!-- Modal for Memory Details -->
<div id="memoryModal" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); display: none; align-items: center; justify-content: center; z-index: 1000; backdrop-filter: blur(4px); overflow-y: auto; padding: 20px;">
    
    <div onclick="closeMemory()" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; animation: fadeIn 0.3s ease-out;"></div>
    
    <div id="modalContent" style="position: relative; z-index: 1001; background: rgba(236, 72, 153, 0.1); backdrop-filter: blur(20px); border-radius: 25px; border: 1px solid rgba(236, 72, 153, 0.3); overflow: hidden; max-width: 600px; width: 100%; box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3); animation: popBounce 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);" onclick="event.stopPropagation()">
        <div id="modalImage" style="height: 280px; background: linear-gradient(135deg, #ec4899 0%, #a855f7 100%); display: flex; align-items: center; justify-content: center; font-size: 5rem; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 16px; right: 16px;">
                <button onclick="closeMemory()" style="background: rgba(255, 255, 255, 0.9); border: none; border-radius: 9999px; width: 44px; height: 44px; font-size: 1.5rem; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; z-index: 1002; font-weight: 600;">
                    ✕
                </button>
            </div>
        </div>
        
        <!-- Modal Content -->
        <div style="padding: 32px;">
            
            <h2 id="modalTitle" style="font-family: 'Playfair Display', serif; font-size: 1.8rem; font-weight: 700; background: linear-gradient(to right, #f472b6, #e879f9); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin: 0 0 16px 0;">
                Judul
            </h2>
            
            <p id="modalCaption" style="color: #d1d5db; line-height: 1.7; margin: 0 0 24px 0; font-size: 1rem;">
                Caption...
            </p>
            
            <!-- Separator -->
            <div style="width: 50px; height: 2px; background: linear-gradient(to right, #f472b6, #e879f9); border-radius: 9999px; margin-bottom: 24px;"></div>
            
            <!-- Full Description -->
            <p id="modalDescription" style="color: #b1b5b9; line-height: 1.8; margin: 0 0 28px 0; font-size: 0.95rem;">
                Description...
            </p>
            
        </div>
        
        <!-- Navigation -->
        <div style="border-top: 1px solid rgba(255, 255, 255, 0.15); padding: 16px 20px; display: flex; gap: 12px; justify-content: center;">
            <button onclick="previousMemory()" style="background: rgba(236, 72, 153, 0.2); backdrop-filter: blur(10px); border: 1px solid rgba(236, 72, 153, 0.3); border-radius: 9999px; padding: 10px 24px; color: #f472b6; font-weight: 600; cursor: pointer; transition: all 0.3s ease; font-size: 0.9rem;">
                ← Sebelumnya
            </button>
            <button onclick="closeMemory()" style="background: rgba(168, 85, 247, 0.2); backdrop-filter: blur(10px); border: 1px solid rgba(168, 85, 247, 0.3); border-radius: 9999px; padding: 10px 32px; color: #c084fc; font-weight: 600; cursor: pointer; transition: all 0.3s ease; font-size: 0.9rem;">
                Tutup
            </button>
            <button onclick="nextMemory()" style="background: rgba(236, 72, 153, 0.2); backdrop-filter: blur(10px); border: 1px solid rgba(236, 72, 153, 0.3); border-radius: 9999px; padding: 10px 24px; color: #f472b6; font-weight: 600; cursor: pointer; transition: all 0.3s ease; font-size: 0.9rem;">
                Selanjutnya →
            </button>
        </div>
        
    </div>
    
</div>

<style>
    @keyframes pulse {
        0%, 100% { opacity: 0.15; }
        50% { opacity: 0.25; }
    }
    
    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
    }
    
    @keyframes popBounce {
        0% {
            opacity: 0;
            transform: scale(0.8);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    @keyframes particleFloat {
        0% {
            transform: translateY(0) translateX(0) scale(1);
            opacity: 0;
        }
        10% {
            opacity: 0.6;
        }
        50% {
            transform: translateY(-60px) translateX(0) scale(1.2);
            opacity: 1;
        }
        90% {
            opacity: 0.6;
        }
        100% {
            transform: translateY(-120px) translateX(0) scale(0.8);
            opacity: 0;
        }
    }
    
    .floating-particle {
        position: fixed;
        font-size: 1.2rem;
        opacity: 0.6;
        pointer-events: none;
        animation: particleFloat 6s ease-in-out forwards;
    }
    
    .memory-card:hover > div {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4) !important;
    }
    
    #memoryModal[style*="display: flex"] {
        display: flex !important;
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
    
    // Add glow effect to cards
    function cardGlow(element) {
        element.style.boxShadow = '0 20px 50px rgba(236, 72, 153, 0.5), 0 0 30px rgba(236, 72, 153, 0.3)';
    }
    
    function cardGlowOff(element) {
        element.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.3)';
    }
    
    // Modal open animation
    const originalOpenMemory = typeof openMemory !== 'undefined' ? openMemory : null;
    
    const memories = [
        {
            'id': 1,
            'title': '💕 Kenangan Pertama',
            'caption': 'Saat pertama kali mata kami bertemu, hatiku rasakan getaran yang berbeda.',
            'description': 'Aku masih ingat dengan jelas momen ketika pertama kali melihat senyum indah mu. Dalam sekejap, duniaku berubah warna. Ada sesuatu yang istimewa dalam cara mata mu bersinar, dan sejak saat itu, jadilah dirimu menjadi alasan aku tersenyum setiap hari.',
            'emoji': '💕'
        },
        {
            'id': 2,
            'title': '😊 Senyuman Terindah',
            'caption': 'Senyuman mu adalah cahaya dalam gelap.',
            'description': 'Setiap kali melihat senyuman mu, aku merasa beruntung luar biasa. Ada ketulusan dalam senyum mu yang membuat semua masalah terasa ringan. Terima kasih telah selalu tersenyum untukku, setiap hari.',
            'emoji': '😊'
        },
        {
            'id': 3,
            'title': '🌍 Petualangan Bersama',
            'caption': 'Menjelajahi tempat baru bersama dirimu membuat setiap lokasi istimewa.',
            'description': 'Setiap petualangan bersama mu adalah halaman baru dalam buku cinta kita. Dari tempat ramai hingga ketenangan, semuanya terasa sempurna selama dirimu di sampingku. Aku ingin terus berpetualang dan menciptakan kenangan indah bersama dirimu.',
            'emoji': '🌍'
        },
        {
            'id': 4,
            'title': '⭐ Malam Berbintang',
            'caption': 'Berbaring di bawah langit berbintang, terasa seperti meraba surga.',
            'description': 'Malam itu terasa tak terlupakan. Di bawah bintang-bintang yang bersinar, aku merasakan kedamaian yang sempurna. Dalam diam, aku berterima kasih kepada seluruh alam semesta atas hadiah terindah yaitu dirimu.',
            'emoji': '⭐'
        },
        {
            'id': 5,
            'title': '🤝 Kehangatan Dekatmu',
            'caption': 'Kehangatan dalam setiap pelukan mu adalah rumah yang aku cari.',
            'description': 'Tidak perlu kata-kata indah, karena sentuhan lembut dan kehangatan mu sudah berbicara. Dalam pelukan mu, aku menemukan tempat teraman di dunia ini. Terima kasih telah menjadi pelabuhan hatiku ketika badai datang.',
            'emoji': '🤝'
        },
        {
            'id': 6,
            'title': '👫 Masa Depan Kita',
            'caption': 'Menatap masa depan bersama dirimu adalah impian paling indah.',
            'description': 'Aku tidak tahu seperti apa masa depan, tapi aku tahu satu hal: aku ingin menghabiskan setiap momen masa depan itu dengan dirimu. Mari kita tulis kisah cinta kita yang paling indah, langkah demi langkah, setiap hari.',
            'emoji': '👫'
        }
    ];
    
    let currentMemoryIndex = 0;
    
    function openMemory(id) {
        currentMemoryIndex = id - 1;
        updateModal(id);
        showModal();
    }
    
    function updateModal(id) {
        const memory = memories[id - 1];
        if (!memory) return;
        
        document.getElementById('modalImage').textContent = memory.emoji;
        document.getElementById('modalTitle').textContent = memory.title;
        document.getElementById('modalCaption').textContent = memory.caption;
        document.getElementById('modalDescription').textContent = memory.description;
    }
    
    function showModal() {
        const modal = document.getElementById('memoryModal');
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        const modalContent = document.getElementById('modalContent');
        modalContent.style.animation = 'popBounce 0.5s cubic-bezier(0.34, 1.56, 0.64, 1)';
    }
    
    function closeMemory() {
        const modal = document.getElementById('memoryModal');
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    
    function nextMemory() {
        if (currentMemoryIndex < memories.length - 1) {
            currentMemoryIndex++;
            updateModal(currentMemoryIndex + 1);
        }
    }
    
    function previousMemory() {
        if (currentMemoryIndex > 0) {
            currentMemoryIndex--;
            updateModal(currentMemoryIndex + 1);
        }
    }
    
    // Initialize particles on page load
    document.addEventListener('DOMContentLoaded', () => {
        createFloatingParticles();
    });
</script>
@endsection
