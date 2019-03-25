
<?php

function perulanganFor($nilai)
{
    for($i=0;$i<=$nilai;$i++)
    {
        echo $i;
    }

    return $nilai;
}
function perulangWhile($nilai)
{
    $i=0;
    while($i<=$nilai)
    {
        echo $i;
        $i++;
    }
}
function perulanganDowhile($nilai)
{
    $i=0;
    do
    {
        echo $i;
        $i++;
    }
    while($i<=$nilai);
}

perulanganFor(10);
echo "</br>";
perulangWhile(10);
echo "</br>";
perulanganDowhile(10);
?>
