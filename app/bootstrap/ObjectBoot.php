<?php
use models\common\RsaKeys;

//初始化rsakey
$di->setShared('RsaKeys', function () {
    return new RsaKeys(file_get_contents(ROOT . '/rsakeys/private.key'), file_get_contents(ROOT . '/rsakeys/public.key'));
});