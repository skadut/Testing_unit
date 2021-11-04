<?php
Class Pitagoras
{
    public function akar($a,$b)
    {
        if($a>0 && $b>0)
        {return sqrt($a*$a+$b*$b);}
        else
        {return "sisi tidak boleh negatif atau nol";}
    }
}