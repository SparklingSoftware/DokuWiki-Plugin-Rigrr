<?php
/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Stephan Dekker <stephan@sparklingsoftware.com.au>
 */

if(!defined('DOKU_INC')) die();
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once DOKU_PLUGIN.'action.php';

class action_plugin_rigrr_javascript extends DokuWiki_Action_Plugin {

    function register(&$controller) {
		$controller->register_hook('TPL_METAHEADER_OUTPUT', 'BEFORE', $this, '_hook_header');
	}

    function rigrr_javascript()
    {
        $rigrr_script = DOKU_URL.'lib/plugins/rigrr/lib/rigrr/rigrr.nocache.js';
        $script = '<script src="'.$rigrr_script.'" ></script>';
        $svg_pan_script = DOKU_URL.'lib/plugins/rigrr/lib/svg-pan-zoom/svg-pan-zoom.js';
        $script .= '<script src="'.$svg_pan_script.'" ></script>';
        
        return $script;
    }
    
	function _hook_header(&$event, $param) {
		$scripts = $this->rigrr_javascript();
           ptln($scripts);
	}
    
}
