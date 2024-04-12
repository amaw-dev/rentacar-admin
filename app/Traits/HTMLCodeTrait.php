<?php

namespace App\Traits;

trait HTMLCodeTrait {

    /**
     * returns HTML code without CSS classes and styles
     * @param string $html_code
     */
    public function noCSSCode($html_code)
    {
        return preg_replace('/(<[^>]+) style=\".*?\"|class=\".*?\"/i','$1', $html_code);
    }
}
