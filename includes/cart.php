<?php
  include'common.php';
  ?>
   

   <html>
    
    
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
  <style>
          .tabletext{
              align-content: center;
          
              
          }
          
          
          .t{
              text-align: center;
              font-family: sans-serif;
              font-weight: bold;
              height: 200px;
          }
          
          
            .foot{
              max-height: 60px;
              min-height: 45px;
              color: aliceblue;
                margin-top: 5%;
              text-align: center;
              align-content: center;
              background-color: black;
          }
          .container1{
              align-content: center;
              margin: 0 auto;
              width: 400px;
              height: 400px;
            margin-top: 12%;
              text-align:center;
              align-content: center;
          }
          
        </style>
    
        <title>Forms in Bootstrap</title>
    </head>
    <body>
      
     <?php
        include'header.php';
        ?>
        
<div class="container1">

  <table class="table table-bordered t">
    <thead>
      <tr>

       <div id="cen">
        <th>Item Number</th>
        <th>Item Name</th>
           <th>Price</th>
           <th></th></div>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Total</td>
        <td>RS 0/-</td>
        <td> <div class="button">
                                <a  href="sucess.html" class="button">Confirm Order</a></div>
                       </td>
      </tr>
      <tr>
       <td></td>
        <td></td>
        <td> </td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
   
   <?php
        include'footer.php';
        ?>
        
    
    </body>
</html>