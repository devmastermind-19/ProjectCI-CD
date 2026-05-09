<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
unset($_SESSION['errors'], $_SESSION['old']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="QuickPOS - Modern Point of Sale system for businesses of all sizes.">
    <title>QuickPOS — Modern Point of Sale System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- HEADER -->
    <header class="header" id="header">
        <div class="container header__container">
            <a href="#" class="header__logo" id="logo">
                <span class="logo__icon">⚡</span>
                <span class="logo__text">QuickPOS</span>
            </a>
            <nav class="header__nav" id="nav">
                <ul class="nav__list">
                    <li><a href="#features" class="nav__link">Features</a></li>
                    <li><a href="#pricing" class="nav__link">Pricing</a></li>
                    <li><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </nav>
            <div class="header__actions">
                <a href="#contact" class="btn btn--outline" id="btn-signup">Sign Up</a>
                <button class="header__hamburger" id="hamburger" aria-label="Toggle navigation">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero" id="hero">
        <div class="hero__bg-glow hero__bg-glow--1"></div>
        <div class="hero__bg-glow hero__bg-glow--2"></div>
        <div class="container hero__container">
            <div class="hero__content">
                <span class="hero__badge">🚀 Now in v2.0 — Faster Than Ever</span>
                <h1 class="hero__title" id="hero-title">The <span class="text-gradient">Smarter</span> Way to<br>Manage Your Sales</h1>
                <p class="hero__subtitle" id="hero-subtitle">QuickPOS empowers businesses with lightning-fast transactions, real-time analytics, and seamless inventory management.</p>
                <div class="hero__cta">
                    <a href="#pricing" class="btn btn--primary btn--lg" id="cta-get-started">Get Started Free <span class="btn__arrow">→</span></a>
                    <a href="#features" class="btn btn--ghost btn--lg" id="cta-learn-more">Learn More</a>
                </div>
                <div class="hero__stats">
                    <div class="stat"><span class="stat__number">10K+</span><span class="stat__label">Businesses</span></div>
                    <div class="stat"><span class="stat__number">5M+</span><span class="stat__label">Transactions</span></div>
                    <div class="stat"><span class="stat__number">99.9%</span><span class="stat__label">Uptime</span></div>
                </div>
            </div>
            <div class="hero__visual">
                <div class="hero__dashboard" id="hero-dashboard">
                    <div class="dashboard__header">
                        <div class="dashboard__dots"><span></span><span></span><span></span></div>
                        <span class="dashboard__title">QuickPOS Dashboard</span>
                    </div>
                    <div class="dashboard__body">
                        <div class="dashboard__sidebar">
                            <div class="sidebar__item active"></div>
                            <div class="sidebar__item"></div>
                            <div class="sidebar__item"></div>
                            <div class="sidebar__item"></div>
                        </div>
                        <div class="dashboard__main">
                            <div class="dashboard__card dashboard__card--revenue">
                                <span class="card__label">Today's Revenue</span>
                                <span class="card__value">$12,489</span>
                                <span class="card__change positive">↑ 12.5%</span>
                            </div>
                            <div class="dashboard__card dashboard__card--orders">
                                <span class="card__label">Orders</span>
                                <span class="card__value">284</span>
                                <span class="card__change positive">↑ 8.3%</span>
                            </div>
                            <div class="dashboard__chart">
                                <div class="chart__bar" style="--h:40%"></div>
                                <div class="chart__bar" style="--h:65%"></div>
                                <div class="chart__bar" style="--h:45%"></div>
                                <div class="chart__bar" style="--h:80%"></div>
                                <div class="chart__bar" style="--h:55%"></div>
                                <div class="chart__bar" style="--h:90%"></div>
                                <div class="chart__bar" style="--h:70%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="features" id="features">
        <div class="container">
            <div class="section__header">
                <span class="section__tag">Features</span>
                <h2 class="section__title" id="features-title">Everything You Need to <span class="text-gradient">Succeed</span></h2>
                <p class="section__subtitle">Powerful tools designed to streamline your business operations.</p>
            </div>
            <div class="features__grid">
                <div class="feature-card" id="feature-lightning">
                    <div class="feature-card__icon"><span>⚡</span></div>
                    <h3 class="feature-card__title">Lightning Fast</h3>
                    <p class="feature-card__desc">Process transactions in under 2 seconds. No lag, no downtime.</p>
                </div>
                <div class="feature-card" id="feature-analytics">
                    <div class="feature-card__icon"><span>📊</span></div>
                    <h3 class="feature-card__title">Real-Time Analytics</h3>
                    <p class="feature-card__desc">Track sales, inventory, and customer behavior with beautiful dashboards.</p>
                </div>
                <div class="feature-card" id="feature-inventory">
                    <div class="feature-card__icon"><span>📦</span></div>
                    <h3 class="feature-card__title">Smart Inventory</h3>
                    <p class="feature-card__desc">Automatic stock alerts, barcode scanning, and supplier management.</p>
                </div>
                <div class="feature-card" id="feature-security">
                    <div class="feature-card__icon"><span>🔒</span></div>
                    <h3 class="feature-card__title">Bank-Grade Security</h3>
                    <p class="feature-card__desc">End-to-end encryption and PCI compliance keep your data safe.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="pricing" id="pricing">
        <div class="container">
            <div class="section__header">
                <span class="section__tag">Pricing</span>
                <h2 class="section__title" id="pricing-title">Simple, Transparent <span class="text-gradient">Pricing</span></h2>
                <p class="section__subtitle">No hidden fees. Choose the plan that fits your business.</p>
            </div>
            <div class="pricing__grid">
                <div class="pricing-card" id="plan-basic">
                    <div class="pricing-card__header">
                        <h3 class="pricing-card__name">Basic</h3>
                        <p class="pricing-card__desc">Perfect for small businesses.</p>
                    </div>
                    <div class="pricing-card__price"><span class="price__currency">$</span><span class="price__amount">29</span><span class="price__period">/month</span></div>
                    <ul class="pricing-card__features">
                        <li><span class="check">✓</span> 1 Register</li>
                        <li><span class="check">✓</span> Basic Analytics</li>
                        <li><span class="check">✓</span> Email Support</li>
                        <li><span class="check">✓</span> 500 Products</li>
                    </ul>
                    <a href="#contact" class="btn btn--outline btn--full" id="btn-plan-basic">Get Started</a>
                </div>
                <div class="pricing-card pricing-card--featured" id="plan-pro">
                    <div class="pricing-card__badge">Most Popular</div>
                    <div class="pricing-card__header">
                        <h3 class="pricing-card__name">Pro</h3>
                        <p class="pricing-card__desc">For growing businesses.</p>
                    </div>
                    <div class="pricing-card__price"><span class="price__currency">$</span><span class="price__amount">79</span><span class="price__period">/month</span></div>
                    <ul class="pricing-card__features">
                        <li><span class="check">✓</span> 5 Registers</li>
                        <li><span class="check">✓</span> Advanced Analytics</li>
                        <li><span class="check">✓</span> Priority Support</li>
                        <li><span class="check">✓</span> Unlimited Products</li>
                        <li><span class="check">✓</span> Inventory Management</li>
                    </ul>
                    <a href="#contact" class="btn btn--primary btn--full" id="btn-plan-pro">Get Started</a>
                </div>
                <div class="pricing-card" id="plan-enterprise">
                    <div class="pricing-card__header">
                        <h3 class="pricing-card__name">Enterprise</h3>
                        <p class="pricing-card__desc">Custom solutions for large-scale operations.</p>
                    </div>
                    <div class="pricing-card__price"><span class="price__currency">$</span><span class="price__amount">199</span><span class="price__period">/month</span></div>
                    <ul class="pricing-card__features">
                        <li><span class="check">✓</span> Unlimited Registers</li>
                        <li><span class="check">✓</span> Custom Analytics</li>
                        <li><span class="check">✓</span> 24/7 Dedicated Support</li>
                        <li><span class="check">✓</span> API Access</li>
                        <li><span class="check">✓</span> Custom Integrations</li>
                    </ul>
                    <a href="#contact" class="btn btn--outline btn--full" id="btn-plan-enterprise">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section__header">
                <span class="section__tag">Contact</span>
                <h2 class="section__title" id="contact-title">Get in <span class="text-gradient">Touch</span></h2>
                <p class="section__subtitle">Have questions? Send us a message.</p>
            </div>
            <div class="contact__wrapper">
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger" style="color: red; margin-bottom: 20px; text-align: left; background: #ffe6e6; padding: 15px; border-radius: 8px;">
                        <ul style="margin: 0; padding-left: 20px;">
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo htmlspecialchars($error); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form action="includes/validation.php" method="POST" class="contact__form" id="contact-form">
                    <div class="form__group">
                        <label for="name" class="form__label">Full Name</label>
                        <input type="text" id="name" name="name" class="form__input" placeholder="John Doe" value="<?php echo htmlspecialchars($old['name'] ?? ''); ?>" required>
                    </div>
                    <div class="form__group">
                        <label for="email" class="form__label">Email Address</label>
                        <input type="email" id="email" name="email" class="form__input" placeholder="john@example.com" value="<?php echo htmlspecialchars($old['email'] ?? ''); ?>" required>
                    </div>
                    <div class="form__group">
                        <label for="message" class="form__label">Message</label>
                        <textarea id="message" name="message" class="form__input form__textarea" placeholder="Tell us about your needs..." rows="5" required><?php echo htmlspecialchars($old['message'] ?? ''); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn--primary btn--full btn--lg" id="btn-submit">Send Message <span class="btn__arrow">→</span></button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer" id="footer">
        <div class="container footer__container">
            <div class="footer__brand">
                <a href="#" class="header__logo"><span class="logo__icon">⚡</span><span class="logo__text">QuickPOS</span></a>
                <p class="footer__tagline">Modern point of sale for modern businesses.</p>
                <div class="footer__socials" id="social-links">
                    <a href="#" class="social__link" id="social-twitter" aria-label="Twitter">𝕏</a>
                    <a href="#" class="social__link" id="social-github" aria-label="GitHub">GH</a>
                    <a href="#" class="social__link" id="social-linkedin" aria-label="LinkedIn">in</a>
                </div>
            </div>
            <div class="footer__links">
                <div class="footer__col"><h4>Product</h4><ul><li><a href="#features">Features</a></li><li><a href="#pricing">Pricing</a></li><li><a href="#">Integrations</a></li></ul></div>
                <div class="footer__col"><h4>Company</h4><ul><li><a href="#">About</a></li><li><a href="#">Careers</a></li><li><a href="#contact">Contact</a></li></ul></div>
                <div class="footer__col"><h4>Resources</h4><ul><li><a href="#">Documentation</a></li><li><a href="#">Blog</a></li><li><a href="#">Support</a></li></ul></div>
            </div>
        </div>
        <div class="footer__bottom"><div class="container"><p>&copy; 2026 QuickPOS. All rights reserved.</p></div></div>
    </footer>
    <script src="assets/js/main.js"></script>
</body>
</html>
