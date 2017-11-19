<?php
/**
 * User: leonardvujanic
 * DateTime: 18/11/2017 22:46
 *
 *
 */


define('LESSONS_DIR', __DIR__ . '/../lessons');


require_once __DIR__ . '/../../vendor/autoload.php';

use leovujanic\codility\helpers\DirectoryTree;
use leovujanic\codility\helpers\PartialHelper;


$directoryTree = new DirectoryTree(LESSONS_DIR);
$tree = $directoryTree->getTree();


echo PartialHelper::render('layout/header', [
    'title' => 'My Solutions - Codility Lessons',
]);


if (empty($_GET['taskName'])) {
    
    echo PartialHelper::render('task-list', [
        'tree' => $tree,
    ]);
    
} else {
    echo PartialHelper::render('task-runner', [
        'tree'     => $tree,
        'taskName' => trim($_GET['taskName']),
    ]);
} // else


echo PartialHelper::render('layout/footer');


