<html>
<head>
  <style>
    .logo-img {
      height: 120px; /* Adjusted for better fit */
      width: auto;
    }
    .sideb-img {
      height: 100px; /* Adjusted for better fit */
      width: auto;
    }
    .navbar {
      background-color: #ffffff !important; /* Pure white */
      min-height: 140px;
      padding-top: 10px;
      padding-bottom: 10px;
    }
    .navbar-toggler {
      border: none;
      box-shadow: none;
      position: fixed;
      top: 10px;
      right: 20px;
      z-index: 1050;
    }
    .brand-wrapper {
      text-align: center;
      width: 100%;
    }
    .time-date {
      font-family: "Inconsolata", monospace;
      font-size: 14px;
      color: black;
      margin-top: 3px;
    }
    .cart-wrapper {
      font-family: "Inconsolata", monospace;
      margin-top: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px; /* space between Cart text and number */
      font-size: 18px;
      color: black;
    }
    .cart-badge {
      font-size: 16px;
      padding: 6px 10px;
    }
    body {
      background-color: #ffffff !important; /* Page background */
    }
  </style>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar">
    <div class="container-fluid position-relative">
      
      <div class="brand-wrapper">
        <a class="navbar-brand d-block" href="index.php">
          <img src="img/logo.png" alt="Logo" class="d-inline-block align-text-top logo-img">
        </a>
        <div class="time-date" id="timeDate"></div>
        <div class="cart-wrapper">
          <p class="m-0">Cart</p>
          <span class="badge rounded-5 text-bg-dark cart-badge">0</span>
        </div>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>  

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">          <img src="img/logo.png" alt="Logo" class="d-inline-block align-text-top sideb-img">
          </h5>
          
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="shop.php">shop</a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link active" href="shop.php">Login</a>
            </li>
 
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </form>
        </div>
      </div>

    </div>
  </nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script to set time and date -->
  <script>
    function updateTime() {
      const now = new Date();
      const options = { 
        month: '2-digit', 
        day: '2-digit', 
        year: 'numeric', 
        hour: 'numeric', 
        minute: '2-digit', 
        hour12: true, 
        timeZone: 'Asia/Riyadh'
      };
      const formatted = now.toLocaleString('en-US', options).replace(',', '');
      document.getElementById('timeDate').innerHTML = `${formatted} GMT+3`;
    }

    updateTime();
    setInterval(updateTime, 60000);
  </script>
</body>
</html>
