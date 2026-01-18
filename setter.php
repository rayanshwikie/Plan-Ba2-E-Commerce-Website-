<html>
    <head>
        <style>
            body {
                font-family: "Inconsolata", monospace;
                margin: 0;
                padding: 0;
            }

            .newsletter-section {
               
                color: white;
                padding: 50px 0;
            }

            .newsletter-container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff; /* White background for the form */
               
                box-shadow: none; /* No card shadow effect */
                color: black; /* Ensures text inside the form is black */
            }

            .newsletter-header {
                font-size: 24px;
                font-weight: bold;
                text-align: center;
                margin-bottom: 20px;
                color: black; /* Black color for the header text */
            }

            .newsletter-text {
                font-size: 16px;
                text-align: justify;
                color: white; /* White color for the description text */
                margin-bottom: 20px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-control {
                border-radius: 0.375rem;
                padding: 10px;
                font-size: 16px;
            }

            .btn-subscribe {
                width: 100%;
                background-color: black;
                color: white;
                border: none;
                padding: 12px;
                font-size: 18px;
                font-weight: bold;
                transition: background-color 0.3s ease;
            }

            .btn-subscribe:hover {
                background-color: #333;
            }
        </style>
    </head>
    <body>
        <section class="newsletter-section">
            <div class="newsletter-container">
                <div class="newsletter-header">
                    Join our newsletter below.
                </div>
                <p class="newsletter-text">
                    The streets never left, and neither did the culture. Bolder designs, raw energy, and a movement that speaks for itself. The next chapter starts now.
                </p>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="EMAIL ADDRESS *" required>
                    </div>
                    <p class="newsletter-text" style="font-size: 14px; color: black;">
                        By completing and sending your data, you agree to the Privacy policy. All data will be kept confidential. (* are required fields)
                    </p>
                    <button type="submit" class="btn-subscribe">Subscribe</button>
                </form>
            </div>
        </section>
    </body>
</html>
