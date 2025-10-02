<?php
class xyz
{

    public $result;
    public function __construct($num1,$num2,$opration)
    {

        switch($opration){
        
            case '+':
                $this->result= $num1 + $num2;
            break;

            case '-':
                $this->result=$num1 - $num2;
                break;

             case '*':
                $this->result=$num1 * $num2;
                break;


               case '/':

                    if($num2 != 0){
                        $this->result=$num1/$num2;

                    }
                    else{
                           $this->result="error divided by zero not allowed";
                    }
                    break;

                 default :
                $this->result="invalid opration selected";
                break;


        }
    }

    function getResult()
    {
       echo $this->result;
    }
}


echo " addition of number:  ";
$add =new xyz(10,5 ,'+');
$add->getResult();
echo "<br>";

echo " subtration of number:  ";
$sub =new xyz(10,5 ,'-');
$sub->getResult();
echo "<br>";

echo " multiplication of number:  ";
$mul =new xyz(10,5 ,'*');
$mul->getResult();

echo "<br>";

echo " division of number:  ";
$div =new xyz(10,5 ,'/');
$div->getResult();

echo "<br>";

echo " invalid opration result:  ";
$invalid =new xyz(10,5 ,'%');
$invalid->getResult();

echo "<br>";
?>