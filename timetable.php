<?php

/*
*   Creates a timetable that display all the numbers in the 12x12 and all the square numbers and factors in it.
*   Just pop it in a standard Apache/PHP install and it should work.
*/

$html = '';

echo '<style>td.squarenum{background-color:#00AA00;}td.factor{background-color:#FF99FF;}td.plain{background-color:#FFFFFF;}</style>';

function createTableCell($value, $styleclass)
{
	return '<td class="'.$styleclass.'">'.$value.'</td>';
}

function isSquare($num1, $num2)
{
	return $num1 === $num2;
}

function createTableRow($row)
{
	$html = '<tr>';
	$html .= createTableCell($row, 'factor');
	for ($column=0;$column<=12;$column++)
	{
		$grid = $row*$column;
		if (isSquare($row, $column))
		{
			$html .= createTableCell($grid, 'squarenum');
		}
		else
		{
			$html .= createTableCell($grid, 'plain');
		}
	}
	$html .= '</tr>';

	return $html;
}
$html = '<table>';
$html .= '<tr>';
$html .= '<td>';
$html .= '</td>';
for ($headcolumn=0;$headcolumn<=12;$headcolumn++)
{
	$html .= createTableCell($headcolumn, 'factor');
}
$html .= '</tr>';
for ($row=0;$row<=12;$row++)
{
	$html .= createTableRow($row);
}
$html .= '</table>';
echo $html;

?>