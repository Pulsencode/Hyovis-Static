<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Welcome to Hyovis, a technology and water systems firm providing sustainable solutions for efficient water management through innovative technologies.'; ?>">
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : 'Hyovis Technologies and Water Systems, water management, automation company in india, automation company in kerala'; ?>">
    <meta name="author" content="<?php echo isset($meta_author) ? $meta_author : 'Hyovis Technologies And Water Systems'; ?>">

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16511306233"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-16511306233');
    </script>

    <!-- Document Title, Description, and Author -->
    <title><?php echo isset($page_title) ? $page_title : 'Hyovis Technologies'; ?></title>

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
    <link rel="android-chrome-icon" sizes="192x192" href="../assets/favicon/android-chrome-192x192.png">
    <link rel="android-chrome-icon" sizes="512x512" href="../assets/favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="48x48" href="../assets/favicon/favicon.ico">
    <link rel="manifest" href="../assets/favicon/site.webmanifest">

    <!-- Google Fonts Files -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="./assets/css/palette-bsb.css">
    
    <!-- Facebook Open Graph -->
    <meta property="og:title" content="Hyovis Technologies - Sustainable Water Solutions">
    <meta property="og:description" content="Discover our eco-friendly water-saving technologies.">
    <meta property="og:image" content="https://hyovis.com/assets/img/branding/og_hyovis_logo.webp">
    <meta property="og:image:alt" content="Hyovis Technologies Logo">
    <meta property="og:description" content="Hyovis is leading the way in water conservation with automation solutions.">
    <meta property="og:url" content="https://hyovis.com">
    <meta property="og:site_name" content="Hyovis Technologies">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hyovis Technologies - Water Solutions">
    <meta name="twitter:description" content="Smart water-saving solutions for a sustainable future.">
    <meta name="twitter:image" content="https://hyovis.com/assets/img/branding/og_hyovis_logo.webp">

    <!-- Schema Markup -->
    <?php if (isset($schema_markup)) { echo $schema_markup; } else { ?>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Automation Company",
            "name": "Hyovis Technologies And Water Systems",
            "telephone": "8075578938",
            "email": ["admin@hyovis.com", "sales@hyovis.com"],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Karipuzha",
                "addressLocality": "Allapuzha District",
                "addressRegion": "Kerala",
                "addressCountry": "India",
                "postalCode": "690103"
            }
        }
    </script>
    <?php } ?>
</head>