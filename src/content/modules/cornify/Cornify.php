<?php

class Cornify extends MainClass
{

    const MODULE_NAME = "cornify";

    public function frontendFooter()
    {
        $jsFile = ModuleHelper::buildRessourcePath(self::MODULE_NAME, "js/cornify.js");
        enqueueScriptFile($jsFile);
        combinedScriptHtml();
    }
}