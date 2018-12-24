    <?php
    $add=$argv[1];
    argv[3]
    if($argv[1]=="add")
    {
    echo $argv[2] + $argv[4];
    }
    elseif($argv[1]=="sub")
    {
        echo $argv[2] - $argv[4];
    }   

    elseif($argv[1]=="mul")
    {
        echo $argv[2] * $argv[4];
    } 

    elseif($argv[1]=="div")
    {
        echo $argv[2] / $argv[4] . PHP_EOL;
    } 
    else{
        echo "Invalid Choice";
    }