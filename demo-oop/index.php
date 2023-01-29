<?php

class Par
{
    public function parent_funct()
    {echo "Це батьківська функція\n";}
    public function test()
    {echo "Це батьківський клас\n";}
}

class Ch extends Par
{
    public function child_funct()
    {echo "Це дочірня функція\n";}
    public function test()
    {echo "Це дочірній клас\n";}
}

$c = new Ch;
$c->parent_funct(); // Виводить 'Це батьківська функція'
$c->child_funct(); // Виводить 'Це дочірня функція'
$c->test(); // Виводить 'Це дочірній клас'