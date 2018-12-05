<?php
//customer_list.php - shows a list of customer data

?>
<?php include 'includes/config.php';?>

<?php require 'includes/Pager.php';?>


<?php
$sql = "select * from SchittsCreek";

$config->loadhead .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">'; ?>

<?php get_header()?>
<?php
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

/*if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo 'CharacterName: <b>' . $row['CharacterName'] . '</b> ';
        echo 'Playedby: <b>' . $row['Playedby'] . '</b> ';
        echo 'Seasons: <b>' . $row['Seasons'] . '</b> ';
        echo 'Description: <b>' . $row['Description'] . '</b> ';
        
        
        echo '<a href="character_view.php?id=' . $row['CharacterID'] . '">' . $row['CharacterName'] . '</a>';
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no characters</p>';
}*/

$prev = '<i class="fa fa-chevron-circle-left"></i>';
$next = '<i class="fa fa-chevron-circle-right"></i>';

$myPager = new Pager(10,'',$prev,$next,'');
$sql = $myPager->loadSQL($sql,$iConn);  #load SQL, pass in existing connection, add offset
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

//release web server resources

if(mysqli_num_rows($result) > 0)
{#records exist - process
    echo $myPager->showNAV();//show pager if enough records 
	if($myPager->showTotal()==1){$itemz = "character";}else{$itemz = "characters";}  //deal with plural
    echo '<p align="center">We have ' . $myPager->showTotal() . ' ' . $itemz . '!</p>';
	while($row = mysqli_fetch_assoc($result))
	{# process each row
         echo '<p align="center">
            <a href="character_view.php?id=' . (int)$row['CharacterID'] . '">' . $row['CharacterName'] . '</a>
            </p>';
	}
	//the showNAV() method defaults to a div, which blows up in our design
    echo $myPager->showNAV();//show pager if enough records 
    
    //the version below adds the optional bookends to remove the div design problem
    //echo $myPager->showNAV('<p align="center">','</p>');
}else{#no records
    echo "<p align=center>What! No Characters?  There must be a mistake!!</p>";	
}

@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer()?>