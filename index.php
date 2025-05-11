<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Strata Building A</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f9f9f9; margin: 0; }
    header, footer { background: #0d1b2a; color: white; padding: 1rem; text-align: center; }
    nav a { color: white; margin: 0 1rem; text-decoration: none; font-weight: bold; }
    .container { max-width: 1000px; margin: auto; padding: 2rem; }
    h1 { text-align: center; }
    .amenities { display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; }
    .card {
      background: white;
      border-radius: 8px;
      padding: 1rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      width: 45%;
      min-width: 300px;
    }
    .green { color: green; font-weight: bold; }
    footer small { color: #ccc; }
  </style>
</head>
<body>
  <header>
    <h2>Strata Building A</h2>
    <nav>
      <a href="/">Home</a>
      <a href="/board-members">Our Board Members</a>
      <a href="/our-rooms">Our Rooms</a>
      <a href="#">Our Amenities</a>
      <a href="/our-fees">Our Fees</a>
      <a href="#">Public Documents</a>
      <a href="#">Help</a>
    </nav>
  </header>

  <div class="container">
    <h1>Our Amenities</h1>
    <div class="amenities">
      <?php
        $amenities = [
          [
            "title" => "Fully equipped 24/7 gym",
            "hours" => "Available 24 hours",
            "description" => "Stay fit with our modern gym facilities, accessible anytime."
          ],
          [
            "title" => "Steam room",
            "hours" => "Open 10 AM - 8 PM",
            "description" => "Relax and rejuvenate in our communal steam room."
          ],
          [
            "title" => "Pool",
            "hours" => "Open 10 AM - 8 PM",
            "description" => "Enjoy a swim in our refreshing pool during opening hours."
          ],
          [
            "title" => "24/7 security and reception",
            "hours" => "Available 24 hours",
            "description" => "Our dedicated security and reception team is available around the clock for your safety and assistance."
          ]
        ];

        foreach ($amenities as $item) {
          echo "<div class='card'>";
          echo "<h3>{$item['title']}</h3>";
          echo "<p class='green'>{$item['hours']}</p>";
          echo "<p>{$item['description']}</p>";
          echo "</div>";
        }
      ?>
    </div>
  </div>

  <footer>
    <p>© 2025 Strata Building A. All rights reserved.</p>
    <small>Managed under the Strata Schemes Management Act (2015), New South Wales, Australia.</small>
  </footer>
</body>
</html>
