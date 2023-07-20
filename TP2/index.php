<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY WEB PAGE</title>
    <link rel="stylesheet" href="work.css">
    <style>
        /* Your CSS styles here */
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        
        /* Navbar styles */
        nav {
          display: flex;
          justify-content: space-between;
          align-items: center;
          background-color: #333;
          color: white;
          padding: 20px;
          position: relative;
        }
        
        nav a {
          color: white;
          text-decoration: none;
        }
        
        .nav-links {
          display: flex;
          justify-content: space-around;
          width: 50%;
        }
        
        .nav-links li {
          list-style: none;
        }
        
        /* Responsive styles */
        @media (max-width: 768px) {
          body {
            overflow-x: hidden;
          }
          
          .nav-links {
            position: absolute;
            right: 0px;
            height: 92vh;
            top: 8vh;
            background-color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50%;
            transform: translateX(100%);
            transition: transform 0.5s ease-in;
          }
          
          .nav-links li {
            opacity: 1;
          }
          
          .burger {
            display: block;
            cursor: pointer;
          }
        }
        
        .nav-active {
          transform: translateX(0%);
        }
        
        .burger div {
          width: 25px;
          height: 3px;
          margin: 5px;
          background-color: #fff;
          transition: transform 0.3s ease-in;
        }
        
        .toggle .line1 {
          transform: rotate(-45deg) translate(-5px, 6px);
        }
        
        .toggle .line2 {
          opacity: 0;
        }
        
        .toggle .line3 {
          transform: rotate(45deg) translate(-5px, -6px);
        }
        
        h1 {
          text-align: center;
        }
        
        h2 {
          text-align: center;
        }
        
        .good {
          display: flex;
          justify-content: center;
          align-items: center;
          gap: 25px;
        }
        
        .good > div {
          display: flex;
          flex-direction: column;
          align-items: center;
          text-align: center;
        }
        
        .good img {
          width: 200px;
          height: 200px;
        }
        
        .good p {
          margin-top: 10px;
        }
        
        form {
          width: 60%;
          height: 100%;
          margin: auto;
          border: 2px solid white;
        }
        
        @media screen and (max-width: 700px) {
          .good {
            position: fixed;
            background-color: rgb(17, 16, 16);
            top: 0%;
            width: 100%;
          }
        
          .good > div {
            width: 90%;
            margin-right: 20px;
            display: inline-block;
            box-sizing: border-box;
          }
        }
        
        .inform {
          padding: 10px;
          display: grid;
        }
        
        .inform label {
          margin: 10px 0;
          text-transform: capitalize;
        }
        
        .inform input {
          padding: 10px;
          border-radius: 10px;
          outline: none;
        }
        
        .container {
          max-width: 400px;
          margin: 0 auto;
          padding: 20px;
        }
        
        .form-group {
          margin-bottom: 15px;
        }
        
        label {
          display: block;
          font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        textarea {
          width: 100%;
          padding: 10px;
          border-radius: 4px;
          border: 1px solid #ccc;
          font-size: 16px;
        }
        
        button[type="submit"] {
          padding: 10px 20px;
          background-color: #4CAF50;
          color: #fff;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        button[type="submit"]:hover {
          background-color: #45a049;
        }
        
        /* Adjustments for Tablets */
        @media (max-width: 768px) {
          form {
            max-width: 500px;
          }
        }
        
        /* Adjustments for Phones */
        @media (max-width: 576px) {
          form {
            padding: 20px;
            max-width: 300px;
          }
        
          form h2 {
            font-size: 24px;
          }
        
          .form-group input[type="submit"] {
            padding: 6px 12px;
            font-size: 14px;
          }
        }
        
        .form-group input[type="submit"]:hover {
          background-color: purple;
        }
        
        /* Adjustments for Tablets */
        @media (max-width: 768px) {
          form {
            max-width: 400px;
          }
        }
        
        /* Adjustments for Phones */
        @media (max-width: 576px) {
          form {
            padding: 20px;
            max-width: 300px;
          }
        
          form h2 {
            font-size: 20px;
          }
        
          .form-group input[type="submit"] {
            padding: 8px 16px;
            font-size: 16px;
          }
        }
        
        /* Footer styling */
        footer {
          background-color: #f5f5f5;
          padding: 10px 0;
          text-align: center;
        }
        
        footer p {
          margin: 0;
          font-size: 14px;
          color: black;
        }
        
        /* Media queries for responsiveness */
        @media screen and (max-width: 1200px) {
          .service {
            display: grid;
            grid-template-columns: 1fr 1fr;
          }
        }
        
        @media screen and (max-width: 1000px) {
          .service {
            display: grid;
            grid-template-columns: 1fr;
          }
        }
    </style>
</head>
<body>
  <!-- index.php -->
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myd_b";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($fullname)) {
        echo '<br>';
        echo 'fullname is required';
    }
    if (empty($email)) {
        echo '<br>';
        echo 'email is required';
    }
    if (empty($message)) {
        echo '<br>';
        echo 'message is required';
    }

    $sql = "INSERT INTO messages (fullname, email, message) VALUES ('$fullname', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>


  <nav>
    <div class="logo">
      <a href="#">Logo</a>
    </div>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>

  <img src="img.jpeg.jpeg" width="100%" height="500"><br>
  <h1>About</h1><br>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa facere, maxime magnam quo iusto laudantium
      nesciunt. Eligendi neque similique fuga accusantium modi sint sequi aliquam minus libero rerum quibusdam eum
      quis voluptatibus, veniam ullam incidunt autem accusamus consequatur natus optio quod odio quasi. Facilis
      voluptatum cumque veniam porro ad, vitae adipisci harum nemo libero voluptatem numquam iste consequatur
      architecto sit culpa vel repellendus excepturi, totam suscipit saepe nesciunt molestiae ipsam. Provident
      impedit quia, vitae voluptates ullam debitis alias ab nesciunt, accusantium maxime explicabo accusamus! Tenetur
      et maiores animi tempore quidem, aspernatur suscipit sunt non minima, amet voluptatum, nesciunt consequuntur
      totam.</p> <br>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio vero soluta magnam rerum eveniet labore ea
      perspiciatis in nisi nam delectus, nesciunt illo repellat, sint quam nulla. Corporis eligendi dicta iure.
      Tempore obcaecati numquam non quasi et deleniti atque adipisci unde dolor quibusdam velit consectetur
      exercitationem, at, sit repudiandae ducimus iusto expedita vitae magnam consequatur architecto pariatur, totam
      impedit? Recusandae rem, illo ipsa vero adipisci error ullam quis dolorem dolore! Earum, numquam omnis quis
      facere ipsam dolores provident! Voluptatibus quo ipsa adipisci, eaque atque quis doloribus corporis
      perspiciatis ipsam, labore ipsum aliquam et alias, culpa ea. Tempore, est minima.</p>

  <h2>SERVICE</h2><br>
  <div class="good">
    <div class="good">
      <img src="img.jpeg.jpeg" alt="Italian Trulli" width="200px" height="200">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa facere, maxime magnam quo iusto laudantium
          nesciunt. </p>
    </div>
    <div class="good">
      <img src="img.jpeg.jpeg" alt="Italian Trulli" width="200px" height="200">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa facere, maxime magnam quo iusto laudantium
          nesciunt. </p>
    </div>
    <div class="good">
      <img src="img.jpeg.jpeg" alt="Italian Trulli" width="200px" height="200">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa facere, maxime magnam quo iusto laudantium
          nesciunt. </p>
    </div>
    <div class="good">
      <img src="img.jpeg.jpeg" alt="Italian Trulli" width="200px" height="200">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa facere, maxime magnam quo iusto laudantium
          nesciunt. </p>
    </div>
  </div><br><br>

  <div class="container">
    <h2>Contact Form</h2>
    <form action="index.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
  
  <footer>
    <p>&copy; 2023 Musa. All rights reserved.</p>
  </footer>
</body>
</html>
