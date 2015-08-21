<?php

use Carbon\Carbon;

function set_active($path, $active = 'active-link')
{
    return Request::is($path) ? $active : '';
}

/**
 * If $value is FALSE or 0, then $value is NULL
 *
 * @param  boolean  $value
 * @return Response
 */
function nullOrValue($value)
{
    if( ($value == false) OR ($value == 0) )
        $value = null;

    return $value;
}

/**
 * If $value is FALSE or 0, then $value is 0
 *
 * @param  boolean  $value
 * @return Response
 */
function zeroOrValue($value)
{
    if( ($value == false) OR ($value == 0) )
        $value = 0;
    else
        $value = 1;

    return $value;
}

/**
 * Return days for select 1-31
 *
 *
 * @return array
 */
function loopDays()
{
    $days = array('' => '--- Deň ---');
    for($i=1; $i<32; $i++)
    {
        if(strlen($i) < 2)
            $a = '0'.$i;
        else
            $a = $i;

        $days[$a] = $i;
    }

    return $days;
}

/**
 * Return months for select 1-12
 *
 *
 * @return array
 */
function loopMonths()
{
    return [
        ''      => '-- Mesiac --',
        '01'    => 'Január',
        '02'    => 'Február',
        '03'    => 'Marec',
        '04'    => 'Apríl',
        '05'    => 'Máj',
        '06'    => 'Jún',
        '07'    => 'Júl',
        '08'    => 'August',
        '09'    => 'September',
        '10'    => 'Október',
        '11'    => 'November',
        '12'    => 'December'
    ];
}

/**
 * Return years for select 2010 - 1990
 *
 *
 * @return array
 */
function loopYears()
{
    $start  = Carbon::now()->year - 5;
    $end    = 1900;

    $years = array('' => '--- Rok ---');
    for($i=$start; $i>=$end; $i--)
    {
        $years[$i] = $i;
    }

    return $years;
}



?>