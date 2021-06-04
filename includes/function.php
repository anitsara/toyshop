<?php
    function dateCheck($date)
    {
        $fulldate = explode("-", $date);
        if(count($fulldate) == 3)
        {
            if (is_numeric($fulldate['0']) && is_numeric($fulldate['1'])
                                                && is_numeric($fulldate['2']))
                if(checkdate($fulldate['1'] , $fulldate['2'] , $fulldate['0']))
                    return true;                
        }
        return false;
    }
    
    function dateCheckCallRecord($date)
    {
        $fulldate = explode("-", $date);
        if(count($fulldate) == 3)
        {
            if (is_numeric($fulldate['0']) && is_numeric($fulldate['1'])
                                                && is_numeric($fulldate['2']))
                if(checkdate($fulldate['1'] , $fulldate['0'] , $fulldate['2']))
                    return true;                
        }
        return false;
    }
    
    function dateCheckDueDate($date)
    {
        $fulldate = explode("-", $date);
        if(count($fulldate) == 3)
        {
            if (is_numeric($fulldate['0']) && is_numeric($fulldate['1'])
                                                && is_numeric($fulldate['2']))
                if(checkdate($fulldate['0'] , $fulldate['1'] , $fulldate['2']))
                    return true;                
        }
        return false;
    }
    
    function dateCheckPayDate($date)
    {
        $fulldate = explode("-", $date);
        if(count($fulldate) == 3)
        {
            if (is_numeric($fulldate['0']) && is_numeric($fulldate['1'])
                                                && is_numeric($fulldate['2']))
                if(checkdate($fulldate['1'] , $fulldate['0'] , $fulldate['2']))
                    return true;                
        }
        return false;
    }
?>
