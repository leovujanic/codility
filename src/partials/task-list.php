<?php
/**
 * User: leonardvujanic
 * DateTime: 19/11/2017 01:24
 *
 * @var $tree array
 */

use leovujanic\codility\helpers\TaskHelper;

?>
<h2>Codility Lessons</h2>
<ul>
    <?php
    
    foreach ($tree as $lesson => $tasks) { ?>
        <li>
            <span><?= ucfirst($lesson) ?></span>
            <ul>
                <?php
                foreach ($tasks as $taskName => $taskFile) { ?>
                    <li><a href="<?= TaskHelper::taskUrl($taskName) ?>"><?= TaskHelper::taskName($taskName) ?></a>
                    </li>
                <?php } ?>
            </ul>
        </li>
    <?php } ?>
</ul>
