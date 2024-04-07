<?php

defined('TYPO3') or die();

call_user_func(function () {
    $obj = new \Slavlee\PopupPower\Bootstrap\TCA\Pages();
    $obj->invoke();
});
