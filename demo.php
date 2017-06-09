<?php

/**
 * Created by PhpStorm.
 * Author: moxingxum
 * Date: 2017/6/1
 * Time: 下午9:16
 */

$imgs = array();

for ($i=0; $i <12; $i++){
    $imgs[$i] = __DIR__.'/avatars/'.$i.'.jpeg';
}

require_once 'MergeImage.class.php';

$ci = new MergeImage($imgs, "myavatar".count($imgs).".jpg");
$ci->combine();
