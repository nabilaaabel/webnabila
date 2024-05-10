<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>

    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <h3>Send us a message</h3>
                    <form action="simpan-pesanan.php" method="POST">

                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Your Name">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="pesan" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><i class="fas fa-phone"></i>+62 83851220952</p>
                    <p><i class="fas fa-envelope"></i>info honestchocholate@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i>123 street, city, country</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>