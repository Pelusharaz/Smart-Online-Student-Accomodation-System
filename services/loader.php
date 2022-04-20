<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="refresh" content="0; URL=../hostels.php" />
      <link rel="shortcut icon" href="../img/icons/logo.webp"/>
      <title>smart SAS loader</title>

      <style>
        .loader {
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid blue;
          border-right: 16px solid green;
          border-bottom: 16px solid red;
          border-left: 16px solid pink;
          width: 120px;
          height: 120px;
          -webkit-animation: spin 6s linear infinite;
          animation: spin 6s linear infinite;
          display: block;
          margin: auto;
          margin-top: 10%;
        }
        
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }
        
        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
        </style>
  </head>
  <body>

    <div class="loader"></div>
     
    <div class="text"style="text-align:center;">
      <h4>Kindly wait as we Find You a suitable Hostel <br> If you are not redirected in 7 seconds,</h4>
       <p><a href="../hostels.php">click here</a>.</p>
    </div>
    
  </body>
  </html>