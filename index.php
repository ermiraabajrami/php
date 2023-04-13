<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello World</title>
    </head>
    <body>
        <?php
            $name = "John";
            $age = 32;
            $job_title = "Database analyst";
            echo "Hi, my name is " . $name . ", and I am " . $age .
            ", and I work as a " .  $job_title . "<br/>";

            $names = ["Mark", "John", "George", "Lisa"];
            echo "The third player in the team is $names[2]" ;
                
            $characters = ["Mickey Mouse" => "Disney", 
                            "Super Mario" => "Nintendo", 
                            "Goku" => "Drago Ball",
                            "Pokemeon" => "Nintendo"
                        ];
                        foreach ($characters as $character => $franchise) {
                            echo "$character is a character from $franchise. <br>";
                        }
            
            
            function devide($a, $b){
                echo $a / $b ."<br/>";
            }
            devide(100, 10);

            function numbers($math, $physics, $english){
                if( !is_numeric($math) || !is_numeric($physics) || !is_numeric($english)){
                   echo "The all values are not nubers";
       
                }
                else{
                    $sum = $math + $physics + $english;
                    $avg = $sum / 3;
                    echo "Sum" . $sum . "<br/>";
                    echo "Average" . $avg . "<br>";
                }
            }
            numbers(7, 8, 9);

            function min_to_hour($minutes){
                $hours = floor($minutes / 60);
                $min = $minutes - ($hours * 60);
                echo $hours . ":" . $min;
            }
            min_to_hour(250);
        ?>
    </body>
</html>