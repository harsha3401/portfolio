<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harsha Sandun | Creative Developer</title>
    <link rel="icon" href="p2.png">
    
    <!-- GSAP & ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Lenis Smooth Scroll -->
    <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>
    
    <!-- Three.js for particles -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;600&display=swap');
        
        /* 3D MARQUEE SECTION */
        .marquee-section {
            height: 50vh;
            background: var(--gray);
            display: flex;
            align-items: center;
            overflow: hidden;
            transform: perspective(1000px) rotateX(5deg);
            transform-origin: center;
        }

        .marquee-track {
            display: flex;
            animation: marquee 20s linear infinite;
            white-space: nowrap;
        }

        .marquee-text {
            font-family: 'Syncopate', sans-serif;
            font-size: 8rem;
            font-weight: 700;
            color: transparent;
            -webkit-text-stroke: 2px rgba(255, 255, 255, 0.3);
            padding: 0 2rem;
            text-transform: uppercase;
        }

        /* 3D MARQUEE SECTION 1
        .marquee-section1 {
            height: 50vh;
            background: var(--gray);
            display: flex;
            align-items: center;
            overflow: hidden;
            transform: perspective(1000px) rotateX(5deg);
            transform-origin: center;
        }

        .marquee-track1 {
            display: flex;
            animation: marquee 20s linear infinite;
            white-space: nowrap;
        }

        .marquee-text1 {
            font-family: 'Syncopate', sans-serif;
            font-size: 5rem;
            font-weight: 200;
            color: transparent;
            -webkit-text-stroke: 2px rgba(255, 255, 255, 0.3);
            padding: 0 2rem;
            text-transform: uppercase;
        } */

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }


        :root {
            --neon-cyan: #00f5ff;
            --neon-pink: #ff00ff;
            --neon-purple: #8b5cf6;
            --dark-bg: #0a0a0a;
            --darker-bg: #050505;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html.lenis, html.lenis body {
            height: auto;
        }
        
        .lenis.lenis-smooth {
            scroll-behavior: auto !important;
        }
        
        .lenis.lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark-bg);
            color: #ffffff;
            overflow-x: hidden;
            cursor: none;
        }
        
        /* Custom Cursor */
        .cursor {
            width: 20px;
            height: 20px;
            border: 2px solid var(--neon-cyan);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.1s ease;
            mix-blend-mode: difference;
        }
        
        .cursor-follower {
            width: 40px;
            height: 40px;
            background: radial-gradient(circle, rgba(0,245,255,0.3) 0%, transparent 70%);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9998;
            transition: transform 0.3s ease;
        }
        
        .cursor.hovering {
            transform: scale(2);
            border-color: var(--neon-pink);
        }
        
        /* Loading Screen */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--darker-bg);
            z-index: 10000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: opacity 0.8s ease, visibility 0.8s ease;
        }
        
        .loading-screen.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }
        
        .logo-container {
            position: relative;
            margin-bottom: 40px;
        }
        
        .logo-text {
            font-family: 'Orbitron', sans-serif;
            font-size: 4rem;
            font-weight: 900;
            letter-spacing: 0.2em;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }
        
        .glitch-text {
            position: relative;
            display: inline-block;
        }
        
        .glitch-text::before,
        .glitch-text::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .glitch-text::before {
            animation: glitch-1 0.3s infinite linear alternate-reverse;
            color: var(--neon-cyan);
            z-index: -1;
        }
        
        .glitch-text::after {
            animation: glitch-2 0.3s infinite linear alternate-reverse;
            color: var(--neon-pink);
            z-index: -2;
        }
        
        @keyframes glitch-1 {
            0%, 100% { clip-path: inset(0 0 0 0); transform: translate(0); }
            20% { clip-path: inset(20% 0 30% 0); transform: translate(-2px, 2px); }
            40% { clip-path: inset(50% 0 20% 0); transform: translate(2px, -2px); }
            60% { clip-path: inset(10% 0 60% 0); transform: translate(-2px, 0); }
            80% { clip-path: inset(80% 0 5% 0); transform: translate(2px, 2px); }
        }
        
        @keyframes glitch-2 {
            0%, 100% { clip-path: inset(0 0 0 0); transform: translate(0); }
            20% { clip-path: inset(60% 0 10% 0); transform: translate(2px, -2px); }
            40% { clip-path: inset(30% 0 40% 0); transform: translate(-2px, 2px); }
            60% { clip-path: inset(10% 0 70% 0); transform: translate(2px, 0); }
            80% { clip-path: inset(40% 0 30% 0); transform: translate(-2px, -2px); }
        }
        
        .loading-text {
            font-family: 'Orbitron', sans-serif;
            font-size: 0.9rem;
            letter-spacing: 0.3em;
            color: rgba(255,255,255,0.6);
            margin-bottom: 20px;
            animation: pulse 1.5s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 0.6; }
            50% { opacity: 1; }
        }
        
        .progress-container {
            width: 300px;
            height: 2px;
            background: rgba(255,255,255,0.1);
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 40px;
        }
        
        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--neon-cyan), var(--neon-pink));
            width: 0%;
            transition: width 0.1s ease;
            box-shadow: 0 0 10px var(--neon-cyan);
        }
        
        .enter-btn {
            font-family: 'Orbitron', sans-serif;
            font-size: 1rem;
            letter-spacing: 0.2em;
            padding: 20px 50px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.3);
            color: #fff;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
        }
        
        .enter-btn.visible {
            opacity: 1;
            transform: translateY(0);
            pointer-events: all;
        }
        
        .enter-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0,245,255,0.3), transparent);
            transition: left 0.5s ease;
        }
        
        .enter-btn:hover::before {
            left: 100%;
        }
        
        .enter-btn:hover {
            border-color: var(--neon-cyan);
            box-shadow: 0 0 30px rgba(0,245,255,0.3);
            transform: scale(1.05);
        }
        
        /* Particle Canvas */
        #particles-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }
        
        /* Hero Section */
        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        
        .hero-container {
            position: sticky;
            top: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .hero-image-wrapper {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1);
            filter: blur(0px);
            transition: filter 0.3s ease;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, 
                rgba(10,10,10,0.3) 0%, 
                rgba(10,10,10,0.6) 50%, 
                rgba(10,10,10,0.9) 100%);
            z-index: 2;
        }
        
        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            padding: 0 20px;
        }
        
        .hero-title {
            font-family: 'Orbitron', sans-serif;
            font-size: clamp(3rem, 10vw, 8rem);
            font-weight: 900;
            line-height: 1;
            margin-bottom: 20px;
            position: relative;
        }
        
        .hero-title .glitch-wrapper {
            display: inline-block;
            position: relative;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            letter-spacing: 0.5em;
            color: rgba(255,255,255,0.7);
            text-transform: uppercase;
        }
        
        /* Sections */
        .section {
            position: relative;
            padding: 100px 0;
            z-index: 1;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .glass-card{
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        /* Glassmorphism Cards */
        /* .glass-card {
            background: rgba(255,255,255,0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(116, 110, 110, 0.1);
            border-radius: 20px;
            padding: 40px;
            transition: all 0.4s ease;
            overflow: hidden;
        }
        
        .glass-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0,245,255,0.1) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .glass-card:hover::before {
            opacity: 1;
        }
        
        .glass-card:hover {
            border-color: rgba(0,245,255,0.3);
            transform: translateY(-10px);
            color: rgba(255,255,255,0.7);
        } */
        
        /* Magnetic Buttons */
        .magnetic-wrap {
            display: inline-block;
            padding: 30px;
            position: relative;
        }
        
        .magnetic-btn {
            font-family: 'Orbitron', sans-serif;
            font-size: 1rem;
            letter-spacing: 0.1em;
            padding: 20px 40px;
            background: linear-gradient(135deg, rgba(0,245,255,0.1), rgba(139,92,246,0.1));
            border: 1px solid rgba(0,245,255,0.3);
            color: #fff;
            border-radius: 50px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s cubic-bezier(0.23, 1, 0.32, 1);
            will-change: transform;
        }
        
        .magnetic-btn:hover {
            background: linear-gradient(135deg, rgba(0,245,255,0.2), rgba(139,92,246,0.2));
            box-shadow: 0 0 40px rgba(0,245,255,0.3);
        }
        
        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }
        
        .project-card {
            position: relative;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
        }
        
        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .project-card:hover .project-image {
            transform: scale(1.1);
        }
        
        .project-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 30px;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
            transform: translateY(100%);
            transition: transform 0.4s ease;
        }
        
        .project-card:hover .project-info {
            transform: translateY(0);
        }
        
        /* AI Chat Widget */
        .ai-widget {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
        }
        
        .ai-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--neon-cyan), var(--neon-purple));
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0,245,255,0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .ai-button::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
            animation: pulse-ring 2s ease-out infinite;
        }
        
        @keyframes pulse-ring {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(1.5); opacity: 0; }
        }
        
        .ai-button:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(0,245,255,0.5);
        }
        
        .ai-chat-panel {
            position: absolute;
            bottom: 80px;
            right: 0;
            width: 350px;
            height: 500px;
            background: rgba(10,10,10,0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0,245,255,0.3);
            border-radius: 20px;
            overflow: hidden;
            opacity: 0;
            transform: translateY(20px) scale(0.9);
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
        }
        
        .ai-chat-panel.open {
            opacity: 1;
            transform: translateY(0) scale(1);
            visibility: visible;
        }
        
        .ai-header {
            padding: 20px;
            background: linear-gradient(135deg, rgba(0,245,255,0.1), rgba(139,92,246,0.1));
            border-bottom: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .ai-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--neon-cyan), var(--neon-purple));
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .ai-messages {
            height: 350px;
            overflow-y: auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .ai-message {
            max-width: 80%;
            padding: 12px 16px;
            border-radius: 15px;
            font-size: 0.9rem;
            line-height: 1.5;
            animation: messageSlide 0.3s ease;
        }
        
        @keyframes messageSlide {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .ai-message.user {
            align-self: flex-end;
            background: linear-gradient(135deg, var(--neon-cyan), var(--neon-purple));
            color: #000;
            font-weight: 500;
        }
        
        .ai-message.bot {
            align-self: flex-start;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.1);
        }
        
        .ai-typing {
            display: flex;
            gap: 5px;
            padding: 15px;
        }
        
        .ai-typing span {
            width: 8px;
            height: 8px;
            background: var(--neon-cyan);
            border-radius: 50%;
            animation: typing 1.4s ease-in-out infinite;
        }
        
        .ai-typing span:nth-child(2) { animation-delay: 0.2s; }
        .ai-typing span:nth-child(3) { animation-delay: 0.4s; }
        
        @keyframes typing {
            0%, 60%, 100% { transform: translateY(0); }
            30% { transform: translateY(-10px); }
        }
        
        .ai-quick-actions {
            display: flex;
            gap: 10px;
            padding: 15px 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            flex-wrap: wrap;
        }
        
        .ai-action-btn {
            padding: 8px 16px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 20px;
            color: #fff;
            font-size: 0.8rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .ai-action-btn:hover {
            background: rgba(0,245,255,0.2);
            border-color: var(--neon-cyan);
        }
        
        /* Light Rays */
        .light-rays {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            opacity: 0.3;
        }
        
        .ray {
            position: absolute;
            width: 200%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--neon-cyan), transparent);
            animation: ray-move 8s linear infinite;
            filter: blur(2px);
        }
        
        @keyframes ray-move {
            0% { transform: translateX(-50%) rotate(45deg); opacity: 0; }
            50% { opacity: 0.5; }
            100% { transform: translateX(50%) rotate(45deg); opacity: 0; }
        }
        
        /* Section Titles */
        .section-title {
            font-family: 'Orbitron', sans-serif;
            font-size: clamp(2rem, 5vw, 4rem);
            margin-bottom: 20px;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        .section-title::after {
            content: '';
            bottom: -10px;
            left: 0;
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--neon-cyan), var(--neon-pink));
        }
        
        /* Skills */
        .skills-container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 40px;
        }
        
        .skill-tag {
            padding: 15px 30px;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 30px;
            font-family: 'Orbitron', sans-serif;
            font-size: 0.9rem;
            letter-spacing: 0.1em;
            transition: transform 0.3s ease, background 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .skill-tag::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0,245,255,0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .skill-tag:hover::before {
            left: 100%;
        }
        
        .skill-tag:hover {
            border-color: var(--neon-cyan);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,245,255,0.2);
        }
        
        /* Contact Section */
        .contact-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        .contact-links {
            display: flex;
            gap: 30px;
            justify-content: center;
            margin-top: 40px;
            flex-wrap: wrap;
        }
        
        .contact-link {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-decoration: none;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .contact-link::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--neon-cyan), var(--neon-purple));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }
        
        .contact-link:hover::before {
            opacity: 1;
        }
        
        .contact-link:hover {
            transform: translateY(-10px) scale(1.1);
            border-color: var(--neon-cyan);
            box-shadow: 0 20px 40px rgba(0,245,255,0.3);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .logo-text { font-size: 2.5rem; }
            .hero-title { font-size: 3rem; }
            .projects-grid { grid-template-columns: 1fr; }
            .ai-chat-panel { width: calc(100vw - 40px); right: -10px; }
            .cursor, .cursor-follower { display: none; }
            body { cursor: auto; }
        }
        
        /* RGB Split Filter */
        .rgb-split {
            position: relative;
        }
        
        .rgb-split::before,
        .rgb-split::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }
        
        .rgb-split.active::before {
            color: #ff0000;
            animation: rgb-split-red 0.3s ease;
            opacity: 0.8;
        }
        
        .rgb-split.active::after {
            color: #00ffff;
            animation: rgb-split-cyan 0.3s ease;
            opacity: 0.8;
        }
        
        @keyframes rgb-split-red {
            0%, 100% { transform: translate(0); opacity: 0; }
            50% { transform: translate(-3px, 0); opacity: 0.8; }
        }
        
        @keyframes rgb-split-cyan {
            0%, 100% { transform: translate(0); opacity: 0; }
            50% { transform: translate(3px, 0); opacity: 0.8; }
        }
    </style>
</head>
<body>

    <!-- Custom Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="logo-container">
            <div class="logo-text glitch-text" data-text="HARSHA SANDUN">HARSHA SANDUN</div>
        </div>
        <div class="loading-text">INITIALIZING EXPERIENCE...</div>
        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
        <button class="enter-btn magnetic-wrap" id="enterBtn">
            <span class="magnetic-btn">ENTER WEBSITE</span>
        </button>
    </div>

    <!-- Light Rays Background -->
    <div class="light-rays" id="lightRays"></div>

    <!-- Particle Canvas -->
    <canvas id="particles-canvas"></canvas>

    <!-- Hero Section with Camera Zoom -->
    <section class="hero-section" id="hero">
        <div class="hero-container">
            <div class="hero-image-wrapper" id="heroImageWrapper">
                <img src="p1.jpg" 
                     alt="Developer Portrait" 
                     class="hero-image" 
                     id="heroImage">
            </div>
            <div class="hero-overlay" id="heroOverlay"></div>
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="glitch-wrapper rgb-split" data-text="CREATIVE">CREATIVE</span><br>
                    <span class="glitch-wrapper rgb-split" data-text="DEVELOPER">DEVELOPER</span>
                </h1>
                <p class="hero-subtitle">Crafting Digital Experiences</p>
                <!-- 3D MARQUEE -->
        <!-- <section class="marquee-section1">
            <div class="marquee-track1">
                <span class="marquee-text1">Creative Developer</span>
                <span class="marquee-text1">•</span>
                <span class="marquee-text1">UI/UX Designer</span>
                <span class="marquee-text1">•</span>
                <span class="marquee-text1">3D Artist</span>
                <span class="marquee-text1">•</span>
                <span class="marquee-text1">Creative Developer</span>
                <span class="marquee-text1">•</span>
                <span class="marquee-text1">UI/UX Designer</span>
                <span class="marquee-text1">•</span>
                <span class="marquee-text1">3D Artist</span>
                <span class="marquee-text1">•</span>
            </div>
        </section> -->
            </div>
        </div>
        </section>

        <!-- 3D MARQUEE -->
        <section class="marquee-section">
            <div class="marquee-track">
                <span class="marquee-text">Creative Developer</span>
                <span class="marquee-text">•</span>
                <span class="marquee-text">UI/UX Designer</span>
                <span class="marquee-text">•</span>
                <span class="marquee-text">3D Artist</span>
                <span class="marquee-text">•</span>
                <span class="marquee-text">Creative Developer</span>
                <span class="marquee-text">•</span>
                <span class="marquee-text">UI/UX Designer</span>
                <span class="marquee-text">•</span>
                <span class="marquee-text">3D Artist</span>
                <span class="marquee-text">•</span>
            </div>
        </section>

   

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <h2 class="section-title rgb-split" data-text="ABOUT ME">ABOUT ME</h2>
            <div class="glass-card" style="margin-top: 40px;">
                <p style="font-size: 1.2rem; line-height: 1.8; color: rgba(255,255,255,0.8);">
                    I'm a creative developer specializing in immersive web experiences. 
                    With expertise in Three.js, WebGL, and modern frontend technologies, 
                    I transform ideas into cinematic digital realities. My work bridges 
                    the gap between design and technology, creating memorable interactions 
                    that captivate and engage.
                </p>
                <div class="skills-container">
                    <span class="skill-tag">Three.js</span>
                    <span class="skill-tag">WebGL</span>
                    <span class="skill-tag">GSAP</span>
                    <span class="skill-tag">React</span>
                    <span class="skill-tag">Node.js</span>
                    <span class="skill-tag">GLSL</span>
                    <span class="skill-tag">Blender</span>
                    <span class="skill-tag">Unity</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section" id="projects">
        <div class="container">
            <h2 class="section-title rgb-split" data-text="PROJECTS">PROJECTS</h2>
            <div class="projects-grid">
                <div class="project-card magnetic-wrap">
                    <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=800&q=80" 
                         alt="Project 1" class="project-image">
                    <div class="project-info">
                        <h3 style="font-family: 'Orbitron', sans-serif; font-size: 1.5rem; margin-bottom: 10px;">
                            Neon Horizon
                        </h3>
                        <p style="color: rgba(255,255,255,0.7);">Interactive 3D WebGL Experience</p>
                    </div>
                </div>
                <div class="project-card magnetic-wrap">
                    <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=800&q=80" 
                         alt="Project 2" class="project-image">
                    <div class="project-info">
                        <h3 style="font-family: 'Orbitron', sans-serif; font-size: 1.5rem; margin-bottom: 10px;">
                            Quantum Interface
                        </h3>
                        <p style="color: rgba(255,255,255,0.7);">AI-Powered Dashboard</p>
                    </div>
                </div>
                <div class="project-card magnetic-wrap">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=800&q=80" 
                         alt="Project 3" class="project-image">
                    <div class="project-info">
                        <h3 style="font-family: 'Orbitron', sans-serif; font-size: 1.5rem; margin-bottom: 10px;">
                            Cyber Punk
                        </h3>
                        <p style="color: rgba(255,255,255,0.7);">Immersive Game Website</p>
                    </div>
                </div>
                <div class="project-card magnetic-wrap">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=800&q=80" 
                         alt="Project 3" class="project-image">
                    <div class="project-info">
                        <h3 style="font-family: 'Orbitron', sans-serif; font-size: 1.5rem; margin-bottom: 10px;">
                            Cyber Punk
                        </h3>
                        <p style="color: rgba(255,255,255,0.7);">Immersive Game Website</p>
                    </div>
                </div>
                <div class="project-card magnetic-wrap">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=800&q=80" 
                         alt="Project 3" class="project-image">
                    <div class="project-info">
                        <h3 style="font-family: 'Orbitron', sans-serif; font-size: 1.5rem; margin-bottom: 10px;">
                            Cyber Punk
                        </h3>
                        <p style="color: rgba(255,255,255,0.7);">Immersive Game Website</p>
                    </div>
                </div>
                <div class="project-card magnetic-wrap">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=800&q=80" 
                         alt="Project 3" class="project-image">
                    <div class="project-info">
                        <h3 style="font-family: 'Orbitron', sans-serif; font-size: 1.5rem; margin-bottom: 10px;">
                            Cyber Punk
                        </h3>
                        <p style="color: rgba(255,255,255,0.7);">Immersive Game Website</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact-section" id="contact">
        <div class="container">
            <h2 class="section-title rgb-split" data-text="LET'S CONNECT">LET'S CONNECT</h2>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); margin-top: 20px;">
                Ready to create something extraordinary?
            </p>
            <div class="contact-links">
                <a href="#" class="contact-link magnetic-wrap" data-magnetic>
                    <i data-lucide="" style="width: 30px; height: 30px;"></i>
                </a>
                <a href="#" class="contact-link magnetic-wrap" data-magnetic>
                    <i data-lucide="linkedin" style="width: 30px; height: 30px;"></i>
                </a>
                <a href="#" class="contact-link magnetic-wrap" data-magnetic>
                    <i data-lucide="twitter" style="width: 30px; height: 30px;"></i>
                </a>
                <a href="#" class="contact-link magnetic-wrap" data-magnetic>
                    <i data-lucide="mail" style="width: 30px; height: 30px;"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- AI Assistant Widget -->
    <div class="ai-widget">
        <div class="ai-chat-panel" id="aiChatPanel">
            <div class="ai-header">
                <div class="ai-avatar">
                    <i data-lucide="bot" style="color: #000;"></i>
                </div>
                <div>
                    <div style="font-weight: 600;">AI Assistant</div>
                    <div style="font-size: 0.8rem; color: rgba(255,255,255,0.6);">Online</div>
                </div>
            </div>
            <div class="ai-messages" id="aiMessages">
                <div class="ai-message bot">
                    Hello! I'm Harsha's AI assistant. How can I help you explore this portfolio today?
                </div>
            </div>
            <div class="ai-quick-actions">
                <button class="ai-action-btn" onclick="sendQuickMessage('About me')">About me</button>
                <button class="ai-action-btn" onclick="sendQuickMessage('My projects')">My projects</button>
                <button class="ai-action-btn" onclick="sendQuickMessage('Contact info')">Contact info</button>
            </div>
        </div>
        <button class="ai-button magnetic-wrap" id="aiButton" data-magnetic>
            <i data-lucide="message-circle" style="width: 28px; height: 28px; color: #000;"></i>
        </button>
    </div>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // ===== LENIS SMOOTH SCROLL =====
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            smoothWheel: true,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Sync Lenis with GSAP ScrollTrigger
        lenis.on('scroll', ScrollTrigger.update);
        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });
        gsap.ticker.lagSmoothing(0);

        // ===== CUSTOM CURSOR =====
        const cursor = document.querySelector('.cursor');
        const cursorFollower = document.querySelector('.cursor-follower');
        let mouseX = 0, mouseY = 0;
        let cursorX = 0, cursorY = 0;
        let followerX = 0, followerY = 0;

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        function animateCursor() {
            cursorX += (mouseX - cursorX) * 0.2;
            cursorY += (mouseY - cursorY) * 0.2;
            followerX += (mouseX - followerX) * 0.1;
            followerY += (mouseY - followerY) * 0.1;

            cursor.style.left = cursorX - 10 + 'px';
            cursor.style.top = cursorY - 10 + 'px';
            cursorFollower.style.left = followerX - 20 + 'px';
            cursorFollower.style.top = followerY - 20 + 'px';

            requestAnimationFrame(animateCursor);
        }
        animateCursor();

        // Cursor hover effects
        const interactiveElements = document.querySelectorAll('button, a, .magnetic-wrap, .project-card');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => cursor.classList.add('hovering'));
            el.addEventListener('mouseleave', () => cursor.classList.remove('hovering'));
        });

        // ===== LOADING SCREEN =====
        const loadingScreen = document.getElementById('loadingScreen');
        const progressBar = document.getElementById('progressBar');
        const enterBtn = document.getElementById('enterBtn');
        let progress = 0;

        // Simulate loading progress
        const loadingInterval = setInterval(() => {
            progress += Math.random() * 15;
            if (progress >= 100) {
                progress = 100;
                clearInterval(loadingInterval);
                setTimeout(() => {
                    enterBtn.classList.add('visible');
                }, 500);
            }
            progressBar.style.width = progress + '%';
        }, 200);

        // Enter button click - cinematic transition
        enterBtn.addEventListener('click', () => {
            // Sound effect (using Web Audio API for subtle click)
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            oscillator.frequency.value = 800;
            oscillator.type = 'sine';
            gainNode.gain.setValueAtTime(0.1, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.5);
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.5);

            // Visual transition
            gsap.to(loadingScreen, {
                opacity: 0,
                duration: 0.8,
                ease: 'power2.inOut',
                onComplete: () => {
                    loadingScreen.classList.add('hidden');
                    initAnimations();
                }
            });

            // Camera zoom into hero
            gsap.fromTo('#heroImage', 
                { scale: 1.2, filter: 'blur(10px)' },
                { scale: 1, filter: 'blur(0px)', duration: 1.5, ease: 'power2.out' }
            );
        });

        // ===== CAMERA ZOOM SCROLL EFFECT =====
        function initAnimations() {
            // Hero image zoom on scroll
            gsap.to('#heroImage', {
                scale: 1.8,
                filter: 'blur(0px)',
                scrollTrigger: {
                    trigger: '.hero-section',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: 1,
                }
            });

            // Hero overlay fade
            gsap.to('#heroOverlay', {
                opacity: 0.95,
                scrollTrigger: {
                    trigger: '.hero-section',
                    start: 'top top',
                    end: '50% top',
                    scrub: 1,
                }
            });

            // Hero content parallax
            gsap.to('.hero-content', {
                y: -200,
                opacity: 0,
                scrollTrigger: {
                    trigger: '.hero-section',
                    start: 'top top',
                    end: '50% top',
                    scrub: 1,
                }
            });

            // Section reveals
            gsap.utils.toArray('.section').forEach(section => {
                gsap.from(section.querySelectorAll('.glass-card, .project-card, .skill-tag'), {
                    y: 60,
                    opacity: 0,
                    duration: 0.8,
                    stagger: 0.1,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 80%',
                        toggleActions: 'play none none reverse'
                    }
                });
            });
        }

        // ===== GLITCH EFFECTS =====
        function triggerGlitch(element) {
            element.classList.add('active');
            setTimeout(() => element.classList.remove('active'), 300);
        }

        // Random glitch on RGB split elements
        setInterval(() => {
            const elements = document.querySelectorAll('.rgb-split');
            const randomEl = elements[Math.floor(Math.random() * elements.length)];
            if (randomEl && !loadingScreen.classList.contains('hidden')) {
                triggerGlitch(randomEl);
            }
        }, 3000);

        // Hover glitch
        document.querySelectorAll('.rgb-split').forEach(el => {
            el.addEventListener('mouseenter', () => triggerGlitch(el));
        });

        // ===== MAGNETIC BUTTONS =====
        const magneticElements = document.querySelectorAll('[data-magnetic], .magnetic-wrap');

        magneticElements.forEach(wrap => {
            const btn = wrap.querySelector('button, a, .magnetic-btn') || wrap;
            
            wrap.addEventListener('mousemove', (e) => {
                const rect = wrap.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                gsap.to(btn, {
                    x: x * 0.3,
                    y: y * 0.3,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            wrap.addEventListener('mouseleave', () => {
                gsap.to(btn, {
                    x: 0,
                    y: 0,
                    duration: 0.5,
                    ease: 'elastic.out(1, 0.3)'
                });
            });
        });

        // ===== PARTICLE SYSTEM (Three.js) =====
        const canvas = document.getElementById('particles-canvas');
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        camera.position.z = 50;

        // Create particles
        const particlesGeometry = new THREE.BufferGeometry();
        const particlesCount = 1500;
        const posArray = new Float32Array(particlesCount * 3);
        const scaleArray = new Float32Array(particlesCount);

        for (let i = 0; i < particlesCount * 3; i += 3) {
            posArray[i] = (Math.random() - 0.5) * 100;
            posArray[i + 1] = (Math.random() - 0.5) * 100;
            posArray[i + 2] = (Math.random() - 0.5) * 50;
            scaleArray[i / 3] = Math.random();
        }

        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
        particlesGeometry.setAttribute('aScale', new THREE.BufferAttribute(scaleArray, 1));

        const particlesMaterial = new THREE.PointsMaterial({
            size: 0.2,
            color: 0x00f5ff,
            transparent: true,
            opacity: 0.6,
            blending: THREE.AdditiveBlending
        });

        const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
        scene.add(particlesMesh);

        // Mouse interaction for particles
        let mouseXThree = 0;
        let mouseYThree = 0;

        document.addEventListener('mousemove', (e) => {
            mouseXThree = (e.clientX / window.innerWidth) * 2 - 1;
            mouseYThree = -(e.clientY / window.innerHeight) * 2 + 1;
        });

        function animateParticles() {
            requestAnimationFrame(animateParticles);

            particlesMesh.rotation.x += 0.0005;
            particlesMesh.rotation.y += 0.0005;

            // Subtle mouse follow
            particlesMesh.rotation.x += mouseYThree * 0.0005;
            particlesMesh.rotation.y += mouseXThree * 0.0005;

            renderer.render(scene, camera);
        }
        animateParticles();

        // Resize handler
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

        // ===== LIGHT RAYS =====
        const lightRaysContainer = document.getElementById('lightRays');
        for (let i = 0; i < 5; i++) {
            const ray = document.createElement('div');
            ray.className = 'ray';
            ray.style.top = Math.random() * 100 + '%';
            ray.style.animationDelay = i * 2 + 's';
            ray.style.animationDuration = (6 + Math.random() * 4) + 's';
            lightRaysContainer.appendChild(ray);
        }

        // ===== AI CHAT WIDGET =====
        const aiButton = document.getElementById('aiButton');
        const aiChatPanel = document.getElementById('aiChatPanel');
        const aiMessages = document.getElementById('aiMessages');

        aiButton.addEventListener('click', () => {
            aiChatPanel.classList.toggle('open');
        });

        // Close chat when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.ai-widget')) {
                aiChatPanel.classList.remove('open');
            }
        });

        const responses = {
            'About me': "I'm Harsha Sandun, a creative developer with 8+ years of experience building immersive digital experiences. I specialize in WebGL, Three.js, and cutting-edge frontend technologies.",
            'My projects': "I've worked with brands like Nike, Google, and Spotify. Check out my featured projects above - from interactive 3D experiences to AI-powered interfaces.",
            'Contact info': "You can reach me at harshasandun2005@gmail.com or connect on LinkedIn and Twitter. I'm always open to discussing new projects and creative ideas!"
        };

        function sendQuickMessage(text) {
            addMessage(text, 'user');
            
            // Show typing indicator
            const typingDiv = document.createElement('div');
            typingDiv.className = 'ai-typing';
            typingDiv.innerHTML = '<span></span><span></span><span></span>';
            aiMessages.appendChild(typingDiv);
            aiMessages.scrollTop = aiMessages.scrollHeight;

            // Simulate thinking delay
            setTimeout(() => {
                typingDiv.remove();
                addMessage(responses[text] || "I'm not sure about that, but I'd love to tell you more about my work!", 'bot');
            }, 1500 + Math.random() * 1000);
        }

        function addMessage(text, sender) {
            const msgDiv = document.createElement('div');
            msgDiv.className = `ai-message ${sender}`;
            msgDiv.textContent = text;
            aiMessages.appendChild(msgDiv);
            aiMessages.scrollTop = aiMessages.scrollHeight;
        }

        // Make sendQuickMessage globally accessible
        window.sendQuickMessage = sendQuickMessage;

        // ===== SCROLL VELOCITY BLUR =====
       

        // ===== PAGE TRANSITIONS =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    lenis.scrollTo(target, {
                        offset: 0,
                        duration: 1.5,
                        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
                    });
                }
            });
        });
    </script>
</body>
</html>