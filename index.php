<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Living Free Wellbeing | Panashe Mahlokozera</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- HERO SECTION -->
    <header class="hero-section">
        <div class="overlay">
            <div class="hero-text">
                <h1>Living Free Wellbeing</h1>
                <h2>Panashe Mahlokozera (M.Psych)</h2>
                <p class="subtitle">Addiction & Trauma Recovery Counsellor</p>
                <a href="#book" class="btn-book">Book an Appointment</a>
            </div>
        </div>
    </header>

    <!-- ABOUT -->
    <section class="about-section fade-in-section">
        <h2>Welcome to Living Free</h2>
        <p>
            We all long for a life that feels meaningful, whole, and connected — to thrive in our identity, purpose, enjoy deep relationships, and move through the world with clarity and confidence.
        </p>
        <p>
            Maybe you're carrying the weight of trauma, struggling with addiction, or navigating emotional burnout. These moments can leave us feeling overwhelmed, ashamed, or unsure how to move forward — especially alone.
        </p>
    </section>

    <!-- APPROACH -->
    <section class="approach-section fade-in-section">
        <h2>Why Work With Me?</h2>
        <p>
            As a trauma and addiction recovery counsellor trained in mental health and shaped by lived experience, I offer a compassionate, faith-grounded space to process, heal, and grow.
        </p>
        <p>
            I've walked with individuals navigating addictions, trauma, relational wounds, and emotional distress. With an integrative approach combining evidence-based methods, Christian values, and deep soul work — freedom and healing is possible.
        </p>
    </section>

    <!-- FOCUS AREAS -->
    <section class="values-section fade-in-section">
        <h2>Core Focus Areas</h2>
        <ul>
            <li>Trauma & Emotional Recovery</li>
            <li>Addiction Recovery (Pornography, Masturbation, etc.)</li>
            <li>Relationship Healing</li>
            <li>Christian-based Inner Work</li>
            <li>Marriage & Purpose Preparation</li>
        </ul>
    </section>

    <!-- CTA / BOOK -->
    <section class="cta-section fade-in-section" id="book">
        <h2>Let’s Journey Together</h2>
        <p>Whether you're single and seeking clarity, preparing for marriage, or healing from the inside out — you deserve to thrive, to be free, and to love well.</p>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe_QzYxexeCOixlDTeAgos3lhx1bd0gkH6QqV1AZ7v8BrgaQQ/viewform?usp=header"
           target="_blank" class="btn-book big-btn">Book Now via Google Form</a>
    </section>

    <!-- FOOTER -->
    <footer class="fade-in-section">
        <p>&copy; <?php echo date("Y"); ?> Living Free Wellbeing | Panashe Mahlokozera</p>
    </footer>

    <!-- SCROLL ANIMATION SCRIPT -->
    <script>
        const sections = document.querySelectorAll('.fade-in-section');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Animate once
                }
            });
        }, {
            threshold: 0.1
        });

        sections.forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>
