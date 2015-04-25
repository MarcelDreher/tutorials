


<?php  
    
    $container = "Whats"." "."up";
    $container .= "?<br>";
    echo $container;
    
    $container = "Now I am a string!<br>";
    
    print("$container");
    
    $container = "12";
    print("Now I am a int: $container <br>");
    echo __FILE__;
    echo "<br>",2,"<br>";
    
    
    
    $numbers = array(1,2,3,"test");
    $numbers2[5] = 4;
    print_r($numbers2);
    echo "<br>";
    $numbers2 = array(1 => 'one', 
    'two', 
    'three'
    );
    
    print_r($numbers2);
    echo "<br>";
    
    foreach($numbers as $value) {
        print ("$value <br>");
    }
    
    $number3 = array('Klaus'     => "Gertraud",
    "Adelfunds" => "Rosa");
    
    print_r($number3);
    echo "<br>",$number3["Klaus"],"<br>";
    
    $marks = array( 
    "mohammad" => array
    (
    "physics" => 35,	    
    "maths" => 30,	    
    "chemistry" => 39	    
    ),
    "qadir"    => array
    (
    "physics" => 30,
    "maths" => 32,
    "chemistry" => 29
    ),
    "zara"     => array
    (
    "physics" => 31,
    "maths" => 22,
    "chemistry" => 39
    )
    );
    
    print_r($marks);
    echo "<br>";
    print($marks["zara"]["physics"]);
    echo "<br>";
    
    $viewer = getenv("HTTP_USER_AGENT");
    $browser = "unkown browser";
    if( preg_match( "~MSIE~i", "$viewer" ) )
    {
        $browser = "Internet Explorer";
    }
    else if(  preg_match( "~Netscape~i", "$viewer" ) )
    {
        $browser = "Netscape";
    }
    else if(  preg_match( "~Mozilla~i", "$viewer" ) )
    {
        $browser = "Mozilla";
        if(preg_match("~Chrome~i", "$viewer" ))
        $browser = "Chrome";
    }
    $platform = "An unidentified OS!";
    if( preg_match( "~Windows~i", "$viewer" ) )
    {
        $platform = "Windows!";
    }
    else if ( preg_match( "~Linux~i", "$viewer" ) )
    {
        $platform = "Linux!";
    }
    echo("You are using $browser on $platform");
    
    
    
        
