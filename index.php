<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
use Sinergi\BrowserDetector\Browser;
use Sinergi\BrowserDetector\Os;
use Sinergi\BrowserDetector\Language;
use Filipac\Ip;

$isSubmit = $_POST['submit'];

$browser = new Browser();
$browserName = $browser->getName();
$browserVer = $browser->getVersion();

$os = new Os();
$osName = $os->getName();

$lang = new Language();
$langName = $lang->getLanguageLocale();

$timeZone = Carbon::now()->tzName;

$ip = Ip::get();

include __DIR__ . '/view.php';