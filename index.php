<?php


class Multiples 
{

    public $from; //number 
    public $to_check = []; // 3 or 5
    public $array_result = array();

    function __construct($from, $to_check)
    {
        $this->from         = $from;
        $this->to_check     = $to_check;
    } 

    public function get_multiples()
    {

        foreach ($this->to_check as $value) 
        {
            if($this->from%$value==0) 
            {
                switch ($value) {
                    case '3':
                        array_push($this->array_result,'Falabella');
                        break;
                    case '5':
                        array_push($this->array_result,'IT');
                        break;
                    
                    default:
                        break;
                }
            }
        }

        return $this->print($this->array_result);
        
    }

    public function print($array_result)
    {
        if(empty($array_result))
        {
            return $this->from;
        }

        if(count($this->array_result) == 2)
        {
            return 'Integraciones';
        }
        return $this->array_result[0];
        
    }
    
}


for ($i=1; $i <= 100 ; $i++) 
{ 
    $multiples = new Multiples($i,array(3,5));

    echo $multiples->get_multiples();
    echo '</br>';
}

?>