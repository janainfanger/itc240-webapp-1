<?php
//customer_view.php - shows details of a single customer
?>
<?php include 'includes/config.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:character_list.php');
}


$sql = "select * from SchittsCreek where CharacterID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $CharacterName = stripslashes($row['CharacterName']);
        $Playedby = stripslashes($row['Playedby']);
        $Seasons = stripslashes($row['Seasons']);
        $title = "Title Page for " . $CharacterName;
        $Description = stripslashes($row['Description']);
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>This character does not exist</p>';
}

?>
<?php get_header()?>
<?php
    
    
if($Feedback == '')
{//data exists, show it

    echo '<p>';
    echo 'Character Name: <b>' . $CharacterName . '</b> ';
    echo 'Played by: <b>' . $Playedby . '</b> ';
    echo 'Seasons: <b>' . $Seasons . '</b> ';
    echo 'Description: <b>' . $Description . '</b> ';
    
    echo '<img src="uploads/' . $id . '.jpg" />';
    
    echo '</p>'; 
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="character_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer()?>