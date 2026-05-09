<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You — QuickPOS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .thankyou {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 24px;
        }
        .thankyou__icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(0, 184, 148, 0.1);
            border: 2px solid rgba(0, 184, 148, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto 24px;
            animation: fadeInUp 0.6s ease-out;
        }
        .thankyou__title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 16px;
            animation: fadeInUp 0.6s ease-out 0.1s both;
        }
        .thankyou__text {
            font-size: 1.1rem;
            color: var(--color-text-secondary);
            max-width: 480px;
            margin: 0 auto 32px;
            animation: fadeInUp 0.6s ease-out 0.2s both;
        }
        .thankyou__btn {
            animation: fadeInUp 0.6s ease-out 0.3s both;
        }
    </style>
</head>
<body>
    <section class="thankyou">
        <div>
            <div class="thankyou__icon">✓</div>
            <h1 class="thankyou__title">Thank <span class="text-gradient">You!</span></h1>
            <p class="thankyou__text">Your message has been received successfully. Our team will get back to you within 24 hours.</p>
            <div class="thankyou__btn">
                <a href="index.php" class="btn btn--primary btn--lg">← Back to Home</a>
            </div>
        </div>
    </section>
</body>
</html>
