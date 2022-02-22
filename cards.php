<?php 

include('includes/navbar.php');
require('db.php');

?>
<!-- <!DOCTYPE html> 
<html> 
<head>
  
  linking the stylesheet(CSS) -->
  <!-- <link rel="stylesheet" type="text/css" href="css/cards.css"> 
</head> 

<body>  -->
  <!-- input tag -->
  <input id="searchbar" onkeyup="search_seller()" type="text"
    name="search" placeholder="Search sellers.."> 



<div class="row">
  <?php
    $fetch="SELECT * FROM `books`";
    $result=mysqli_query($con,$fetch);

    //find the number of records returned
          //to get the same idno from database use: <th scope='row'>".$row['id']."</th>

        while($row=mysqli_fetch_assoc($result))
        { 

          ?>
  <div class="column">
    <div class="card">
      
          <div class="container">
            
            <p><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['seller_img']).'" height="180" width="100"/>' ?></p>
             <h4><b><?php echo $row['name'] ?> </b></h4>
              <p><?php echo $row['address'] ?> </p>
              <p><?php echo $row['books_type'] ?> </p>
              <p><?php echo $row['contact'] ?> </p>
              <form >
              <button class="cards"  type="submit" formaction="<?php echo $row['direction'] ?>" style="color:white;">
                Visit
              </button>
          </form>
          
          </div>
    </div>

  </div>
  <?php
            }


          ?>
</div>

<script>
    // JavaScript code 
function search_seller() { 
  let input = document.getElementById('searchbar').value 
  input=input.toLowerCase(); 
  let x = document.getElementsByClassName('card'); 
  
  for (i = 0; i < x.length; i++) { 
    if (!x[i].innerHTML.toLowerCase().includes(input)) { 
      x[i].style.display="none"; 
    } 
    else { 
      x[i].style.display="list-item";        
    } 
  } 
} 

</script> 