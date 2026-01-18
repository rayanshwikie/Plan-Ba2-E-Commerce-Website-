<html>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <head>
    <style>
      
    .card {
      border: none;
      box-shadow: none;
      width: 95%; /* Slightly smaller cards */
      margin: 0 auto; /* Center the cards */
    }
   
    .card-title {
      font-family: "Inconsolata", monospace;
      font-size: 16px; /* Slightly smaller text */
      
      text-align: center;
      color: #333;
    }
    .card-price {
      font-family: "Inconsolata", monospace;
      font-size: 14px;
      font-weight: bold;
  
      text-align: center;
      color: #666;
    }
    .card {
      border: none;
      box-shadow: none;
    }
    .card-img-top {
      width: 100%;
      height: auto;
      object-fit: cover; /* Optional: if you want nicely cropped images */
    }
    .card-title {
        font-family: "Inconsolata", monospace;
      font-size: 18px;
      margin-top: 10px;
      text-align: center;
      color: #333;
    }
    .card-price {
        font-family: "Inconsolata", monospace;
      font-size: 16px;
      font-weight: bold;
      margin-top: 5px;
      text-align: center;
      color: #666;
    }
  </style>
    </head>
    <body>
      <?php include 'nav.php';
      include 'links.php'; ?> 
      <div class="container p-3" >

        <div class="float-end ">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z"/>
            </svg>
        </div>

      </div>
      <div class="container ">
  <div class="row g-4">
    
    <div class="col-md-4">
      <div class="card border-0">
        <img src="upload/item1.jpg" class="card-img-top" alt="Item 1">
        <div class="card-body">
          <h5 class="card-title">Item Name 1</h5>
          <div class="card-price">$19.99</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0">
        <img src="upload/item2.jpg" class="card-img-top" alt="Item 2">
        <div class="card-body">
          <h5 class="card-title">Item Name 2</h5>
          <div class="card-price">$29.99</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0">
        <img src="upload/item3.jpg" class="card-img-top" alt="Item 3">
        <div class="card-body">
          <h5 class="card-title">Item Name 3</h5>
          <div class="card-price">$39.99</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0">
        <img src="upload/item4.jpg" class="card-img-top" alt="Item 1">
        <div class="card-body">
          <h5 class="card-title">Item Name 1</h5>
          <div class="card-price">$19.99</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0">
        <img src="upload/item5.jpg" class="card-img-top" alt="Item 2">
        <div class="card-body">
          <h5 class="card-title">Item Name 2</h5>
          <div class="card-price">$29.99</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0">
        <img src="upload/item6.jpg" class="card-img-top" alt="Item 3">
        <div class="card-body">
          <h5 class="card-title">Item Name 3</h5>
          <div class="card-price">$39.99</div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php include 'setter.php'; ?>
      
    </body>
</html>
