<?php
/**
 * Created by PhpStorm.
 * User: CollinsJumah
 * Date: 5/19/2019
 * Time: 07:22
 */
class helloWorld{

    function sayHello($language='English'){

        echo '<p>';
            switch ($language){
                case 'French':
                    echo 'Bonjour,Monde!';
                    break;
                case 'Dutch':
                    echo 'Hello wereld';
                    break;
                case 'Germany':
                    echo 'Hallo Welt!';
                    break;
                case 'Italian':
                    echo 'ciao mondo!';
                    break;
                case 'Spanish':
                    echo 'Hola, mundo';
                    break;
                default:
                    echo 'Hello world';
                    break;
            }
        echo '</p>';
    }
}

?>