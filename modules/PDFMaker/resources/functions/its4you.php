<?php

/**
 * This function executes if-else statement based on given parameters
 *  
 * @param $param1 first parameter of comparation
 * @param $comparator comparation sign - one of ==,!=,<,>,<=,>=
 * @param $param2 second parameter of comparation
 * @param $whatToReturn1 value returned when comparation succeded
 * @param $whatToReturn2 value returned when comparation not succeded
 * */
if (!function_exists('its4you_if')) {
    function its4you_if($param1, $comparator, $param2, $whatToReturn1, $whatToReturn2 = '')
    {
        global $default_charset;
        $param1 = htmlentities($param1, ENT_QUOTES, $default_charset);
        $comparator = html_entity_decode($comparator, ENT_COMPAT, 'utf-8');
        $param2 = htmlentities($param2, ENT_QUOTES, $default_charset);
        $whatToReturn1 = htmlentities($whatToReturn1, ENT_QUOTES, $default_charset);
        $whatToReturn2 = htmlentities($whatToReturn2, ENT_QUOTES, $default_charset);
        switch ($comparator) {
            case "=":
                $comparator = '==';
                break;
            case "<>":
                $comparator = '!=';
                break;
            case "=>":
                $comparator = '>=';
                break;
            case "=<":
                $comparator = '<=';
                break;
        }
        if (in_array($comparator, array('==', '!=', '>=', '<=', '>', '<'))) {
            return nl2br(html_entity_decode(eval("if('{$param1}' {$comparator} '{$param2}'){return '{$whatToReturn1}';} else {return '{$whatToReturn2}';}"), ENT_COMPAT, $default_charset));
        } else {
            return "Error! second parameter must be one from following: ==,!=,<,>,<=,>=";
        }
    }
}
/**
 * This function returns id of current template 
 * 
 * */
if (!function_exists('getTemplateId')) {
    function getTemplateId()
    {
        //global $PDFMaker_template_id;
        $PDFMaker_template_id = vglobal("PDFMaker_template_id");
        return $PDFMaker_template_id;
    }
}
/**
 * This function returns image of contact 
 *  
 * @param $id - contact id
 * @param $width width of returned image (10%, 100px) 
 * @param $height height of returned image (10%, 100px)
 *
 * */
if (!function_exists('its4you_getContactImage')) {
    function its4you_getContactImage($id, $width, $height)
    {
        if (isset($id) and $id != "") {
            $adb = PearDatabase::getInstance();
            $query = "SELECT vtiger_attachments.path, vtiger_attachments.name, vtiger_attachments.attachmentsid\n\t\t\t\tFROM vtiger_contactdetails\n\t\t\t\tINNER JOIN vtiger_seattachmentsrel ON vtiger_contactdetails.contactid=vtiger_seattachmentsrel.crmid\n\t\t\t\tINNER JOIN vtiger_attachments ON vtiger_attachments.attachmentsid=vtiger_seattachmentsrel.attachmentsid\n\t\t\t\tINNER JOIN vtiger_crmentity ON vtiger_attachments.attachmentsid=vtiger_crmentity.crmid\n\t\t\t\tWHERE deleted=0 AND vtiger_contactdetails.contactid=?";
            $result = $adb->pquery($query, array($id));
            $num_rows = $adb->num_rows($result);
            if ($num_rows > 0) {
                $adb->query_result($result, 0, "path");
                $image_src = $adb->query_result($result, 0, "path") . $adb->query_result($result, 0, "attachmentsid") . "_" . $adb->query_result($result, 0, "name");
                $image = "<img src='" . $image_src . "' width='" . $width . "' height='" . $height . "'/>";
                return $image;
            }
        } else {
            return "";
        }
    }
}
/**
 * This function returns formated value 
 *  
 * @param $value - int  
 *  
 * */
if (!function_exists('its4you_formatNumberToPDF')) {
    function its4you_formatNumberToPDF($value)
    {
        $PDFMaker_template_id = vglobal("PDFMaker_template_id");
        $adb = PearDatabase::getInstance();
        $sql = "SELECT decimals, decimal_point, thousands_separator\n\t\t\tFROM vtiger_pdfmaker_settings           \n\t\t\tWHERE templateid=?";
        $result = $adb->pquery($sql, array($PDFMaker_template_id));
        $data = $adb->fetch_array($result);
        $decimal_point = html_entity_decode($data["decimal_point"], ENT_QUOTES);
        $thousands_separator = html_entity_decode($data["thousands_separator"] != "sp" ? $data["thousands_separator"] : " ", ENT_QUOTES);
        $decimals = $data["decimals"];
        if (is_numeric($value)) {
            $number = number_format($value, $decimals, $decimal_point, $thousands_separator);
        } else {
            $number = "";
        }
        return $number;
    }
}
/**
 * This function returns converted value into integer 
 *  
 * @param $value - int  
 *  
 * */
if (!function_exists('its4you_formatNumberFromPDF')) {
    function its4you_formatNumberFromPDF($value)
    {
        $PDFMaker_template_id = vglobal("PDFMaker_template_id");
        $adb = PearDatabase::getInstance();
        $sql = "SELECT decimals, decimal_point, thousands_separator\n\t\t\tFROM vtiger_pdfmaker_settings           \n\t\t\tWHERE templateid=?";
        $result = $adb->pquery($sql, array($PDFMaker_template_id));
        $data = $adb->fetch_array($result);
        $decimal_point = html_entity_decode($data["decimal_point"], ENT_QUOTES);
        $thousands_separator = html_entity_decode($data["thousands_separator"] != "sp" ? $data["thousands_separator"] : " ", ENT_QUOTES);
        // $decimals = $data["decimals"];
        $number = str_replace($thousands_separator, '', $value);
        $number = str_replace($decimal_point, '.', $number);
        return $number;
    }
}

if(!function_exists('its4you_translate')) {
    function its4you_translate($value) {
        return vtranslate($value);
    }
}

/**
 * This function returns multipication of all input values 
 *  
 * @param $sum - int (unlimited count of input params)
 *
 * using: [CUSTOMFUNCTION|its4you_multiplication|param1|param2|...|param_n|CUSTOMFUNCTION]
 * */
if (!function_exists('its4you_multiplication')) {
    function its4you_multiplication()
    {
        $input_args = func_get_args();
        $return = 0;
        if (!empty($input_args)) {
            foreach ($input_args as $key => $sum) {
                $sum = its4you_formatNumberFromPDF(strip_tags($sum));
                if (!is_numeric($sum) || $sum == '') {
                    $sum = 0;
                }
                if ($key == 0) {
                    $return = $sum;
                } else {
                    $return = $return * $sum;
                }
            }
        }
        return its4you_formatNumberToPDF($return);
    }
}
/**
 * This function returns deducated value sum1-sum2-...-sum_n (all following values are deducted from the first one) 
 *  
 * @param $sum - int (unlimited count of input params)
 *
 * using: [CUSTOMFUNCTION|its4you_deduct|param1|param2|...|param_n|CUSTOMFUNCTION]
 * */
if (!function_exists('its4you_deduct')) {
    function its4you_deduct()
    {
        $input_args = func_get_args();
        $return = 0;
        if (!empty($input_args)) {
            foreach ($input_args as $key => $sum) {
                $sum = its4you_formatNumberFromPDF(strip_tags($sum));
                if (!is_numeric($sum) || $sum == '') {
                    $sum = 0;
                }
                if ($key == 0) {
                    $return = $sum;
                } else {
                    $return -= $sum;
                }
            }
        }
        return its4you_formatNumberToPDF($return);
    }
}
/**
 * This function returns sum of input values 
 *  
 * @param $sum - int (unlimited count of input params)
 *
 * using: [CUSTOMFUNCTION|its4you_sum|param1|param2|...|param_n|CUSTOMFUNCTION]
 * */
if (!function_exists('its4you_sum')) {
    function its4you_sum()
    {
        $input_args = func_get_args();
        $return = 0;
        if (!empty($input_args)) {
            foreach ($input_args as $sum) {
                $sum = its4you_formatNumberFromPDF(strip_tags($sum));
                if (!is_numeric($sum) || $sum == '') {
                    $sum = 0;
                }
                $return += $sum;
            }
        }
        return its4you_formatNumberToPDF($return);
    }
}
/**
 * This function returns divided value sum1/sum2/.../sum_n 
 *  
 * @param $sum - int (unlimited count of input params)
 *
 * using: [CUSTOMFUNCTION|its4you_divide|param1|param2|...|param_n|CUSTOMFUNCTION]
 * */
if (!function_exists('its4you_divide')) {
    function its4you_divide()
    {
        $input_args = func_get_args();
        $return = 0;
        if (!empty($input_args)) {
            foreach ($input_args as $key => $sum) {
                $sum = its4you_formatNumberFromPDF(strip_tags($sum));
                if (!is_numeric($sum) || $sum == '') {
                    $sum = 0;
                }
                if ($key == 0) {
                    $return = $sum;
                } elseif ($sum != 0) {
                    $return = $return / $sum;
                }
            }
        }
        return its4you_formatNumberToPDF($return);
    }
}