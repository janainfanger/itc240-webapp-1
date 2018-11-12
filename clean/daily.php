<?php include 'config.php'?>

    <?php   
    
    /*
    
       If day is passed via GET, show $days's coffee
    place a link to show today's coffee (if on another day)
    
    If it's today, show $today's coffee
    
 
    
    
    */
    
    
    if(isset($_GET['day']))
    {//if day is passed via GET, show $day's coffee
        
       $today= $_GET['day']; 
        
        
    }else{
        $today= date('l');
        
        
    }
        
  
 /*   $today = date('l');*/

  /*  echo $today;*/
 

    ?>




<?php include 'header.php'?>

<p><?=$today?>'s special is Pumpkin Spice</p>  

<p>Click below to find out what awesome flavors we have for each day of the week!</p>
<p><a href="daily.php?day=Sunday">Sunday</a></p>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>
 

<?php include 'footer.php'?>