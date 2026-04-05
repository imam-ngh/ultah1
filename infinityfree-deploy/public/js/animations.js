/**
 * Romantic Birthday App - Main Animations
 * Uses GSAP for smooth, premium animations
 */

// ==========================================
// GSAP Configuration
// ==========================================

gsap.config({
    nullTargetAction: "ignore",
    autoSleep: 60,
    force3D: "auto"
});

// Register ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// ==========================================
// UTILITY FUNCTIONS
// ==========================================

/**
 * Get random number between min and max
 */
function getRandomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

/**
 * Create a floating heart with animation
 */
function createFloatingHeart(x, y, emoji = '❤️', duration = 3) {
    const heart = document.createElement('div');
    heart.innerHTML = emoji;
    heart.style.position = 'fixed';
    heart.style.left = x + 'px';
    heart.style.top = y + 'px';
    heart.style.fontSize = getRandomNumber(20, 32) + 'px';
    heart.style.opacity = '1';
    heart.style.pointerEvents = 'none';
    heart.style.zIndex = '999';
    
    document.body.appendChild(heart);
    
    // Animate with GSAP
    gsap.to(heart, {
        duration: duration,
        y: -getRandomNumber(150, 300),
        opacity: 0,
        x: getRandomNumber(-100, 100),
        rotation: getRandomNumber(-360, 360),
        ease: 'power1.inOut',
        onComplete: () => {
            heart.remove();
        }
    });
}

/**
 * Create a rain drop particle
 */
function createRaindrop() {
    const drop = document.createElement('div');
    drop.className = 'particle';
    drop.style.left = Math.random() * 100 + '%';
    drop.style.top = '-10px';
    drop.style.width = '2px';
    drop.style.height = '10px';
    drop.style.background = '#ec4899';
    drop.style.opacity = Math.random() * 0.5 + 0.2;
    
    document.body.appendChild(drop);
    
    gsap.to(drop, {
        duration: getRandomNumber(2, 4),
        y: window.innerHeight + 50,
        opacity: 0,
        ease: 'linear',
        onComplete: () => {
            drop.remove();
        }
    });
}

/**
 * Trigger celebration with multiple hearts
 */
function triggerCelebration(count = 30, duration = 0.1) {
    for (let i = 0; i < count; i++) {
        setTimeout(() => {
            createFloatingHeart(
                Math.random() * window.innerWidth,
                window.innerHeight / 2,
                '❤️',
                3
            );
        }, i * duration * 1000);
    }
}

/**
 * Create a pulse animation
 */
function createPulseAnimation(element, duration = 2) {
    gsap.to(element, {
        duration: duration / 2,
        scale: 1.1,
        yoyo: true,
        repeat: -1,
        ease: 'sine.inOut'
    });
}

/**
 * Create a glow effect
 */
function createGlowEffect(element) {
    const originalShadow = element.style.boxShadow || 'none';
    
    gsap.to(element, {
        duration: 1.5,
        boxShadow: '0 0 30px rgba(236, 72, 153, 0.8)',
        yoyo: true,
        repeat: -1,
        ease: 'sine.inOut'
    });
}

// ==========================================
// SCROLL ANIMATIONS
// ==========================================

/**
 * Animate elements on scroll
 */
function setupScrollAnimations() {
    // Fade in elements with animation on scroll
    gsap.utils.toArray('[data-scroll-animate]').forEach((element) => {
        gsap.to(element, {
            scrollTrigger: {
                trigger: element,
                start: 'top 80%',
                end: 'top 20%',
                toggleActions: 'play none none reverse',
                markers: false
            },
            duration: 0.8,
            opacity: 1,
            y: 0,
            ease: 'power2.out'
        });
    });
}

// ==========================================
// TEXT ANIMATIONS
// ==========================================

/**
 * Animate text character by character
 */
function typeText(element, text, speed = 50, callback) {
    element.innerHTML = '';
    let index = 0;
    
    function type() {
        if (index < text.length) {
            if (text[index] === '\n') {
                element.innerHTML += '<br>';
            } else {
                element.innerHTML += text[index];
            }
            index++;
            setTimeout(type, speed);
        } else {
            if (callback) callback();
        }
    }
    
    type();
}

/**
 * Animate text fade in by lines
 */
function fadeInByLines(containerSelector, lineDelay = 0.8, lineDuration = 0.6) {
    const container = document.querySelector(containerSelector);
    if (!container) return;
    
    const lines = container.querySelectorAll('[class*="line"]');
    
    lines.forEach((line, index) => {
        gsap.from(line, {
            duration: lineDuration,
            opacity: 0,
            delay: index * lineDelay,
            ease: 'power2.out'
        });
    });
}

// ==========================================
// PAGE TRANSITION ANIMATIONS
// ==========================================

/**
 * Animate page entrance
 */
function animatePageEntrance() {
    // Find main content container
    const mainContent = document.querySelector('main') || document.querySelector('[role="main"]');
    
    if (mainContent) {
        gsap.from(mainContent, {
            duration: 0.6,
            opacity: 0,
            y: 20,
            ease: 'power2.out'
        });
    }
}

/**
 * Animate page exit
 */
function animatePageExit(callback) {
    const mainContent = document.querySelector('main') || document.querySelector('[role="main"]');
    
    if (mainContent) {
        gsap.to(mainContent, {
            duration: 0.4,
            opacity: 0,
            y: -20,
            ease: 'power2.in',
            onComplete: callback
        });
    }
}

// ==========================================
// CARD ANIMATIONS
// ==========================================

/**
 * Animate card flip
 */
function flipCard(cardElement, duration = 0.8) {
    gsap.to(cardElement, {
        duration: duration / 2,
        rotateY: 90,
        ease: 'power2.inOut'
    });
    
    setTimeout(() => {
        gsap.to(cardElement, {
            duration: duration / 2,
            rotateY: 0,
            ease: 'power2.inOut'
        });
    }, duration / 2 * 1000);
}

/**
 * Animate card entrance
 */
function animateCardEntrance(cardElement, duration = 0.8) {
    gsap.from(cardElement, {
        duration: duration,
        opacity: 0,
        y: 50,
        scale: 0.95,
        ease: 'back.out'
    });
}

/**
 * Animate card exit
 */
function animateCardExit(cardElement, duration = 0.6) {
    return gsap.to(cardElement, {
        duration: duration,
        opacity: 0,
        y: -50,
        scale: 0.95,
        ease: 'back.in'
    });
}

// ==========================================
// BUTTON ANIMATIONS
// ==========================================

/**
 * Add ripple effect to button
 */
function addRippleEffect(button) {
    button.addEventListener('click', function(e) {
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple');
        
        this.appendChild(ripple);
        
        gsap.to(ripple, {
            duration: 0.6,
            scale: 2,
            opacity: 0,
            ease: 'power2.out',
            onComplete: () => ripple.remove()
        });
    });
}

// ==========================================
// COUNTDOWN TIMER
// ==========================================

/**
 * Create a countdown timer
 */
function startCountdown(targetDate, onUpdate, onComplete) {
    const interval = setInterval(() => {
        const now = new Date().getTime();
        const distance = new Date(targetDate).getTime() - now;
        
        if (distance < 0) {
            clearInterval(interval);
            if (onComplete) onComplete();
            return;
        }
        
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        if (onUpdate) {
            onUpdate({ days, hours, minutes, seconds });
        }
    }, 1000);
    
    return interval;
}

// ==========================================
// PARTICLE EFFECTS
// ==========================================

/**
 * Create particle burst effect
 */
function createParticleBurst(x, y, particleCount = 20, emoji = '✨') {
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.innerHTML = emoji;
        particle.style.position = 'fixed';
        particle.style.left = x + 'px';
        particle.style.top = y + 'px';
        particle.style.fontSize = getRandomNumber(16, 24) + 'px';
        particle.style.pointerEvents = 'none';
        particle.style.zIndex = '1000';
        
        document.body.appendChild(particle);
        
        const angle = (i / particleCount) * Math.PI * 2;
        const velocity = getRandomNumber(100, 300);
        const duration = getRandomNumber(0.5, 1.5);
        
        gsap.to(particle, {
            duration: duration,
            x: Math.cos(angle) * velocity,
            y: Math.sin(angle) * velocity,
            opacity: 0,
            rotation: getRandomNumber(-360, 360),
            ease: 'power2.out',
            onComplete: () => particle.remove()
        });
    }
}

// ==========================================
// GRADIENT ANIMATIONS
// ==========================================

/**
 * Animate gradient background
 */
function animateGradient(element) {
    const gradients = [
        'linear-gradient(135deg, #fce7f3 0%, #e9d5ff 100%)',
        'linear-gradient(135deg, #e9d5ff 0%, #dbeafe 100%)',
        'linear-gradient(135deg, #dbeafe 0%, #fce7f3 100%)'
    ];
    
    let index = 0;
    setInterval(() => {
        gsap.to(element, {
            duration: 5,
            backgroundColor: 'transparent',
            ease: 'linear'
        });
        
        element.style.backgroundImage = gradients[index];
        index = (index + 1) % gradients.length;
    }, 5000);
}

// ==========================================
// INITIALIZATION
// ==========================================

document.addEventListener('DOMContentLoaded', () => {
    // Setup scroll animations
    setupScrollAnimations();
    
    // Animate page entrance
    animatePageEntrance();
    
    // Add ripple effects to all buttons
    document.querySelectorAll('button, [role="button"]').forEach(btn => {
        // Optional: add ripple effect
    });
    
    // Mouse move heart trail effect
    document.addEventListener('mousemove', (e) => {
        if (Math.random() > 0.97) {
            createFloatingHeart(e.clientX, e.clientY, '💕', 2);
        }
    });
});

// ==========================================
// EXPORT FOR USE IN OTHER FILES
// ==========================================

// Make functions globally available
window.gsapAnimations = {
    createFloatingHeart,
    createRaindrop,
    triggerCelebration,
    createPulseAnimation,
    createGlowEffect,
    typeText,
    fadeInByLines,
    animatePageEntrance,
    animatePageExit,
    flipCard,
    animateCardEntrance,
    animateCardExit,
    startCountdown,
    createParticleBurst,
    addRippleEffect
};
