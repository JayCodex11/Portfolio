
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jay-R Banguanga | Portfolio</title>

    <link rel="stylesheet" href="{{ asset('portfolio.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar">
        <a href="#home" class="logo">JB<span>.</span></a>

        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact" class="nav-contact">Contact Me ↗</a>
        </div>
    </nav>

    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <p class="eyebrow">
                    <span class="status-dot"></span>
                    AVAILABLE FOR OPPORTUNITIES
                </p>

                <h1>
                    Hi, I'm <span class="gradient-text">Jay-R</span><br>
                    Banguanga.
                </h1>

                <h2>BSIT Student <span class="divider">/</span> Aspiring Developer</h2>

                <p class="hero-description">
                    I am a 3rd-year Information Technology student passionate
                    about building websites, developing applications, and
                    turning ideas into practical digital solutions.
                </p>

                <div class="hero-buttons">
                    <a href="#projects" class="btn-primary">Explore My Work ↗</a>
                    <a href="#contact" class="btn-secondary">Get In Touch</a>
                </div>

                <div class="hero-details">
                    <div>
                        <strong>3rd</strong>
                        <span>Year BSIT</span>
                    </div>

                    <div>
                        <strong>4+</strong>
                        <span>Technologies Learning</span>
                    </div>

                    <div>
                        <strong>1</strong>
                        <span>Goal: Keep Growing</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <div class="visual-glow"></div>

                <div class="profile-card">
                    <div class="card-top">
                        <span class="window-dot"></span>
                        <span class="window-dot"></span>
                        <span class="window-dot"></span>
                        <span class="card-label">developer.profile</span>
                    </div>

                    <div class="profile-picture">
                        <img
                            src="{{ asset('images/profile.jpg') }}"
                            alt="Jay-R Banguanga"
                        >
                    </div>

                    <h3>Jay-R Banguanga</h3>
                    <p class="profile-role">Aspiring Web Developer</p>

                    <div class="profile-line"></div>

                    <div class="code-snippet">
                        <p><span class="code-purple">print</span>(</p>
                        <p class="indent">name: <span class="code-green">'Jay-R'</span>,</p>
                        <p class="indent">course: <span class="code-green">'BSIT'</span>,</p>
                        <p class="indent">passion: <span class="code-green">'Coding'</span>,</p>
                        <p class="indent">learning: <span class="code-green">true</span></p>
                        <p>)</p>
                    </div>

                    <div class="profile-footer">
                        <span class="status-dot"></span>
                        Always learning something new
                    </div>
                </div>

                
        </section>

        <section id="about" class="section">
            <div class="section-heading">
                <p class="section-label">01 / ABOUT ME</p>
                <h2>A little about <span class="gradient-text">myself.</span></h2>
            </div>

            <div class="about-grid">
                <div class="about-main">
                    <h3>Learning today.<br>Building for tomorrow.</h3>

                    <p>
                        I'm Jay-R Banguanga, a 3rd-year Bachelor of Science
                        in Information Technology student. I enjoy exploring
                        programming concepts and learning how technology can
                        solve real-world problems.
                    </p>

                    <p>
                        My current focus is improving my programming skills,
                        building web applications, and gaining hands-on
                        experience through personal and academic projects.
                    </p>
                </div>

                <div class="about-info">
                    <div class="info-card">
                        <span class="info-icon">⌘</span>
                        <div>
                            <h4>Programming</h4>
                            <p>Writing code and solving problems</p>
                        </div>
                    </div>

                    <div class="info-card">
                        <span class="info-icon">⌘</span>
                        <div>
                            <h4>Web Development</h4>
                            <p>Learning to build modern websites</p>
                        </div>
                    </div>

                    <div class="info-card">
                        <span class="info-icon">↗</span>
                        <div>
                            <h4>Continuous Learning</h4>
                            <p>Growing through practice and projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="section">
            <div class="section-heading">
                <p class="section-label">02 / TECHNICAL SKILLS</p>
                <h2>Tools I work <span class="gradient-text">with.</span></h2>

                <p class="section-description">
                    Technologies I am learning and using in my development journey.
                </p>
            </div>

            <div class="skills-grid">
                <div class="skill-card">
                    <span class="skill-number">01</span>
                    <div class="skill-icon java-icon">Java</div>
                    <h3>Java</h3>
                    <p>Object-oriented programming and application logic.</p>
                    <span class="skill-status">Learning &amp; Practicing</span>
                </div>

                <div class="skill-card">
                    <span class="skill-number">02</span>
                    <div class="skill-icon python-icon">Py</div>
                    <h3>Python</h3>
                    <p>Programming fundamentals and problem-solving.</p>
                    <span class="skill-status">Learning &amp; Practicing</span>
                </div>

                <div class="skill-card">
                    <span class="skill-number">03</span>
                    <div class="skill-icon html-icon">Html</div>
                    <h3>HTML &amp; CSS</h3>
                    <p>Creating structured and responsive web pages.</p>
                    <span class="skill-status">Learning &amp; Practicing</span>
                </div>

                <div class="skill-card">
                    <span class="skill-number">04</span>
                    <div class="skill-icon php-icon">PHP</div>
                    <h3>PHP &amp; Laravel</h3>
                    <p>Learning server-side development and web applications.</p>
                    <span class="skill-status">Learning &amp; Practicing</span>
                </div>
            </div>
        </section>

        <section id="projects" class="section">
            <div class="section-heading">
                <p class="section-label">03 / SELECTED WORK</p>
                <h2>Projects I've <span class="gradient-text">explored.</span></h2>

                <p class="section-description">
                    A collection of academic and personal development projects.
                </p>
            </div>

            <div class="projects-grid">

                <article class="project-card">
                    <div class="project-preview bank-preview">
                        <span class="preview-label">JAVA APPLICATION</span>

                        <div class="bank-mockup">
                            <span class="mockup-icon">▤</span>
                            <h3>Mini Bank System</h3>
                            <p>Account Management</p>

                            <div class="mockup-balance">
                                <span>Account Balance</span>
                                <strong>₱ 00,000.00</strong>
                            </div>

                            <div class="mockup-bars">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <div class="project-content">
                        <div class="project-meta">
                            <span>ACADEMIC PROJECT</span>
                            <span>01</span>
                        </div>

                        <h3>Mini Bank System</h3>

                        <p>
                            A Java-based banking application for managing
                            accounts, deposits, withdrawals, and transaction
                            history.
                        </p>

                        <div class="tech-tags">
                            <span>Java</span>
                            <span>OOP</span>
                            <span>Data Structures</span>
                        </div>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-preview web-preview">
                        <span class="preview-label">WEB DEVELOPMENT</span>

                        <img
                            src="{{ asset('images/personal.jpg') }}"
                            alt="Screenshot of my personal portfolio website"
                            class="project-image"
                            loading="lazy"
                        >
                    </div>

                    <div class="project-content">
                        <div class="project-meta">
                            <span>PERSONAL PROJECT</span>
                            <span>02</span>
                        </div>

                        <h3>Personal Portfolio</h3>

                        <p>
                            A personal website showcasing my background,
                            technical skills, development journey, and
                            contact information.
                        </p>

                        <div class="tech-tags">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>Laravel PHP</span>
                        </div>
                    </div>
                </article>

            </div>
        </section>

        <section id="contact" class="section contact-section">
            <div class="contact-panel">
                <p class="section-label">04 / CONTACT</p>

                <h2>
                    Have an idea?<br>
                    <span class="gradient-text">Let's connect.</span>
                </h2>

                <p>
                    I'm interested in learning, collaborating, and exploring
                    opportunities in technology.
                </p>

                <div class="contact-buttons">
                    <a href="mailto:itsmejayr11@gmail.com" class="btn-primary">
                        Send Me an Email ↗
                    </a>

                    <a
                        href="https://www.facebook.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn-secondary"
                    >
                        Facebook Profile ↗
                    </a>
                </div>

                <div class="contact-email">
                    <span>Email:</span>
                    <a href="mailto:itsmejayr11@gmail.com">
                        itsmejayr11@gmail.com
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <a href="#home" class="logo">JB<span>.</span></a>
        <p>Designed and developed by Jay-R Banguanga.</p>
        <a href="#home" class="back-top">Back to top ↑</a>
        <span class="copyright">© 2026</span>
    </footer>

</body>
</html>
