<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="ganges.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id="Main">
    <form action="action_page.php">

        <div class="pos-f-t">
 
            <nav class="navbar navbar-light bg-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>
        
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-light p-4">
                   
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <a href="./Delta informatie.html">
                          <li>Deltas</li>
                          <li class="nav-item">
                            <a class="nav-link" href="./ganges.html">Ganges</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="./galveston.html">Galveston</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                          </li>
                        </ul>
        
                </div>
            </div>
        </div>

        <div class="container">
          <div style="text-align:center">
            <h2>Contact Us</h2>
            <p>Swing by for a cup of coffee, or leave us a message:</p>
          </div>
          <div class="row">
            <div class="column">
            </div>
            <div class="column">
              <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="country">Country</label>
                <select id="country" name="country">
                  <option value="australia">Australia</option>
                  <option value="canada">Canada</option>
                  <option value="usa">USA</option>
                </select>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                <input type="submit" value="Submit">
              </form>
            </div>
          </div>
        </div>