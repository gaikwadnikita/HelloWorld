<?php 

/**
 * Normal salutation
 * 
 */
class ShortSalutation
{
    
    public function sayHelloIn($lang) {
        $salutation = [
            'SPA' => 'Hola',
            'ENG' => 'Hello',
            'POR' => 'Olá',
            'POL' => 'Witaj',
        ];

        echo $salutation[$lang];
    }
}

/**
 * Classic worldwide programmers salutation
 * 
 */
trait LongSalutation
{
    
    public function sayHelloIn($lang) {
        parent::sayHelloIn($lang);

        $salutation = [
            'SPA' => 'Mundo',
            'ENG' => 'World',
            'POR' => 'Mundo',
            'POL' => 'Świecie ',
        ];

        echo " $salutation[$lang]" . PHP_EOL;
    }
}

/**
 * We salute you!
 */
class Salutation extends ShortSalutation
{
    
    use LongSalutation;
}

$me = new Salutation();

/**
 * Print "Hello World" in different languages.
 * Actual sets: SPA, ENG, POR, POL
 */
$me->sayHelloIn('ENG');

?>
