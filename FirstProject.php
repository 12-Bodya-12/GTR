<?php
	$rimNumber = ' ';
echo 'Введите число: ';
$number = readline();
system('clear');
for ($i = 0; $i <= 37; $i ++)
{
	print_r('~');
}
print_r("\n");
print_r("Ваше число в десятичной системе: {$number}");
$a = $number / 1000 % 10;
$b = $number / 100 % 10;
$c = $number / 10 % 10;
$d = $number % 10;

if ($a !== 0)
{
	for ($i = 1; $i < $a + 1; $i ++)
		$rimNumber .= "M";
}
if ($b !== 0)
{
	if ($b < 4)
		for ($i = 1; $i < $b + 1; $i ++)
			$rimNumber .= "C";
	if ($b === 4)
		$rimNumber .= "CD";
	if ($b === 5)
		$rimNumber .= "D";
	if ($b > 5 && $b < 9)
	{
		$rimNumber .= "D";
		for ($i = 1; $i < $b - 5 + 1; $i ++)
			$rimNumber .= "C";
	}
	if ($b === 9)
		$rimNumber .= "CM";
}
if ($c !== 0)
{
	if ($c < 4)
		for ($i = 1; $i < $c + 1; $i ++)
			$rimNumber .= "X";
	if ($c === 4)
		$rimNumber .= "XL";
	if ($c === 5)
		$rimNumber .= "L";
	if ($c > 5 && $c < 9)
	{
		$rimNumber .= "L";
		for ($i = 1; $i < $c - 5 + 1; $i ++)
			$rimNumber .= "X";
	}
	if ($c === 9)
		$rimNumber .= "XC";
}
if ($d !== 0)
{
	if ($d < 4)
		for ($i = 1; $i < $d + 1; $i ++)
			$rimNumber .= "I";
	if ($d === 4)
		$rimNumber .= "IV";
	if ($d === 5)
		$rimNumber .= "V";
	if ($d > 5 && $d < 9)
	{
		$rimNumber .= "V";
		for ($i = 1; $i < $d - 5 + 1; $i ++)
			$rimNumber .= "I";
	}
	if ($d === 9)
		$rimNumber .= "IX";
}

print_r("\n");
print_r('Ваше число в римской системе: ' . $rimNumber);
print_r("\n");

for ($i = 0; $i <= 37; $i++)
print_r('~');
?>