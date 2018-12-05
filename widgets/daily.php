<?php include 'includes/config.php'?>


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


   switch($today){
        case 'Monday':
            $coffee= "Pumpkin Spice";
            $pic= 'Pumpkin-Spice.jpg';
            $alt= "Yummy pumpkin spice";
            break;
            
        case 'Tuesday':
            $coffee= "Peppermint Patty";
            $pic= 'peppermint latte.jpg';
            $alt= "Yummy peppermint patty";
            break;
            
            
                 case 'Wednesday':
            $coffee= "Blonde Espresso";
            $pic= 'blonde.jpg';
            $alt= "Yummy blonde espresso";
            break;
            
            
                 case 'Thursday':
            $coffee= "Mocha Latte";
            $pic= 'mocha.jpg';
            $alt= "Yummy Mocha Latte";
            break;
            
                 case 'Friday':
            $coffee= "Black Coffee";
            $pic= 'black.jpg';
            $alt= "Black Coffee";
            break;
            
                 case 'Saturday':
            $coffee= "Pink Tea";
            $pic= 'pink tea.jpg';
            $alt= "Yummy pink tea";
            break;
            
                 case 'Sunday':
            $coffee= "Chai Tea";
            $pic= 'chai tea.jpg';
            $alt= "Yummy chai tea";
            break;
            
            
    }
        
  
 /*   $today = date('l');*/

  /*  echo $today;*/
 

    ?>




<?php get_header()?>

<p><?=$today?>'s special is <?=$coffee?></p>  

<img src="images/<?=$pic?>" alt="Our <?=$alt?>" id="coffee" />

<p>Click below to find out what awesome flavors we have for each day of the week!</p>
<p><a href="daily.php?day=Sunday">Sunday</a></p>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>
 

<?php get_footer()?>