<?php ?><?php
$GLOBALS["YlWZdgkMdywYmdQvNPFjD"] = base64_decode("UHJhZ21hOiBwdWJsaWM=");
$GLOBALS["WvWOKndbjWKnEmnPSK"] = base64_decode("LnBkZiI=");
$GLOBALS["hYIWbEeDscaqrXBxfnoE"] = base64_decode("OyBmaWxlbmFtZT0i");
$GLOBALS["DYVnbTOxmoeXSxfKdo"] = base64_decode("Q29udGVudC1EaXNwb3NpdGlvbjog");
$GLOBALS["srKZuuotfufAwEQnAIaSk"] = base64_decode("Q29udGVudC1MZW5ndGg6IA==");
$GLOBALS["TEBjxbmHHHGHdRTSLjROT"] = base64_decode("Q29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi9wZGY=");
$GLOBALS["HIEoLVHzMtrWhTFJqjvYc"] = base64_decode("Uw==");
$GLOBALS["NIXxxoUmiGNQklzzBDlKn"] = base64_decode("aW5saW5l");
$GLOBALS["gmcmzgMLzsQkQxTKJzvPo"] = base64_decode("cHJpbnQ=");
$GLOBALS["gBKJgRjOHTPvCNubjmtdf"] = base64_decode("cmVsbW9kdWxl");
$GLOBALS["FEdUjxvfcnTwDwkmRfo"] = base64_decode("UERGTWFrZXI=");
$GLOBALS["pWMAjNlhQbVykzrRLiCFg"] = base64_decode("YXR0YWNobWVudA==");
$GLOBALS["IJsFSapDTPjcgWgkdMAst"] = base64_decode("Z2VuZXJhdGVfdHlwZQ==");
$GLOBALS["tugkmwKQmrdyfghQnRJjz"] = base64_decode("");
$GLOBALS["egxvmxbzaEViaLFVIjlE"] = base64_decode("YWNjb3VudA==");
$GLOBALS["gTnPfKFAuXZJaWFvYbSlz"] = base64_decode("c291cmNlX21vZHVsZQ==");
$GLOBALS["xtWPYDCsrFrJhduFQcNU"] = base64_decode("bGFuZ3VhZ2U=");
$GLOBALS["OXDCYYTmtHZhGOGiaGbI"] = base64_decode("bW9kZQ==");
$GLOBALS["amoRdNtdWfEFvzDSLwhDj"] = base64_decode("cmVjb3Jk");
$GLOBALS["hyrtIGnlipGGcgidZOOV"] = base64_decode("aW5jbHVkZS9zaW1wbGVodG1sZG9tL3NpbXBsZV9odG1sX2RvbS5waHA=");
$GLOBALS["JsPuQXopAGHsqRwURiUSV"] = base64_decode("Lw==");
$GLOBALS["LYyPeGEegNNQRLmXyfjYs"] = base64_decode("aW1n");
$GLOBALS["aIiaqMvvijunkPWKmgt"] = base64_decode("aHR0cDovLw==");
$GLOBALS["FwOuomAXTJPNWdZmXzSqz"] = base64_decode("c2l0ZV9VUkw=");
$GLOBALS["yhlqNUnmzhagloaYAPE"] = base64_decode("Q29udGVudC1EZXNjcmlwdGlvbjogUEhQIEdlbmVyYXRlZCBEYXRh");
$GLOBALS["DhzcTFfFbMHeHwTnjumNQ"] = base64_decode("dHJ1ZQ==");
$GLOBALS["SnsSSwMKZSYeMFnEirnhL"] = base64_decode("");
$GLOBALS["rSIxqFhLEDhZnSGoHgucK"] = base64_decode("cmVsbW9kdWxl");
$GLOBALS["LxOugzEDmmcbOLXnyBE"] = base64_decode("c291cmNlX21vZHVsZQ==");
?><?php class PDFMaker_checkGenerate_Model extends Vtiger_Module_Model {
    protected $print = false;
    protected $PDFMakerModuleModel = false;
    protected $PDFAttributes = array('record', 'mode', 'language', 'source_module');
    function __construct() {
        PDFMaker_Debugger_Model::GetInstance()->Init();
        $this->log = LoggerManager::getLogger($GLOBALS["egxvmxbzaEViaLFVIjlE"]);
        foreach ($this->PDFAttributes AS $atr) {
            $this->set($atr, $GLOBALS["tugkmwKQmrdyfghQnRJjz"]);
        }
        $this->set($GLOBALS["IJsFSapDTPjcgWgkdMAst"], $GLOBALS["pWMAjNlhQbVykzrRLiCFg"]);
    }
    static function getInstance() {
        $instance = new self();
        return $instance;
    }
    function setPrint($isprint = true) {
        if ($isprint) {
            $this->print = true;
        } else {
            $this->print = false;
        }
    }
    function generate(Vtiger_Request $request) {
        $PDFMaker = new PDFMaker_PDFMaker_Model();
        $this->PDFMakerModuleModel = Vtiger_Module_Model::getInstance($GLOBALS["FEdUjxvfcnTwDwkmRfo"]);
        foreach ($this->PDFAttributes AS $atr) {
            if ($request->has($atr) && !$request->isEmpty($atr)) {
                $this->set($atr, $request->get($atr));
            }
        }
        if ($request->has($GLOBALS["gBKJgRjOHTPvCNubjmtdf"]) && !$request->isEmpty($GLOBALS["gBKJgRjOHTPvCNubjmtdf"])) {
            $relmodule = $request->get($GLOBALS["gBKJgRjOHTPvCNubjmtdf"]);
            $this->set($GLOBALS["LxOugzEDmmcbOLXnyBE"], $relmodule);
        } else {
            $relmodule = $this->get($GLOBALS["LxOugzEDmmcbOLXnyBE"]);
        }
        $language = $this->get($GLOBALS["xtWPYDCsrFrJhduFQcNU"]);
        if (empty($language)) {
            $language = Vtiger_Language_Handler::getLanguage();
        }
        $record = $this->get($GLOBALS["amoRdNtdWfEFvzDSLwhDj"]);

        if (empty($relmodule) && isset($record)) {
            $relmodule = getSalesEntityType($record);
            $request->set($GLOBALS["rSIxqFhLEDhZnSGoHgucK"], $relmodule);
        }
        $mpdf = $GLOBALS["SnsSSwMKZSYeMFnEirnhL"];
        $name = $PDFMaker->GetPreparedMPDF($mpdf, $record, $relmodule, $language);
        if ($request->has($GLOBALS["gmcmzgMLzsQkQxTKJzvPo"]) && !$request->isEmpty($GLOBALS["gmcmzgMLzsQkQxTKJzvPo"])) {
            if ($request->get($GLOBALS["gmcmzgMLzsQkQxTKJzvPo"]) == $GLOBALS["DhzcTFfFbMHeHwTnjumNQ"]) {
                $this->print = true;
            }
        }
        if ($this->print == true) {
            $mpdf->AutoPrint(true);
            $this->set($GLOBALS["IJsFSapDTPjcgWgkdMAst"], $GLOBALS["NIXxxoUmiGNQklzzBDlKn"]);
        }

        $content = $mpdf->Output($GLOBALS["tugkmwKQmrdyfghQnRJjz"], $GLOBALS["HIEoLVHzMtrWhTFJqjvYc"]);

        @ob_clean();
        header($GLOBALS["TEBjxbmHHHGHdRTSLjROT"]);
        header($GLOBALS["srKZuuotfufAwEQnAIaSk"] . strlen($content));
        $generate_type = $this->get($GLOBALS["IJsFSapDTPjcgWgkdMAst"]);
        header($GLOBALS["DYVnbTOxmoeXSxfKdo"] . $generate_type . $GLOBALS["hYIWbEeDscaqrXBxfnoE"] . $name . $GLOBALS["WvWOKndbjWKnEmnPSK"]);
        header($GLOBALS["yhlqNUnmzhagloaYAPE"]);
        header($GLOBALS["YlWZdgkMdywYmdQvNPFjD"]);
        echo $content;
    }
    private function fixImg($content) {
        $e = $GLOBALS["FwOuomAXTJPNWdZmXzSqz"];
        $surl = vglobal($e);
        $http = $GLOBALS["aIiaqMvvijunkPWKmgt"];
        $simple_html_dom_file = $this->getSimpleHtmlDomFile();
        require_once ($simple_html_dom_file);
        $html = str_get_html($content);
        if (is_array($html->find($GLOBALS["LYyPeGEegNNQRLmXyfjYs"]))) {
            foreach ($html->find($GLOBALS["LYyPeGEegNNQRLmXyfjYs"]) as $img) {
                if (strpos($img->src, $http) === false) {
                    $newPath = $surl . $GLOBALS["JsPuQXopAGHsqRwURiUSV"] . $img->src;
                    $img->src = $newPath;
                }
            }
            return $html->save();
        } else {
            return $content;
        }
    }
    private function getSimpleHtmlDomFile() {
        return $GLOBALS["hyrtIGnlipGGcgidZOOV"];
    }
} ?><?php