<?php
/**
 * User: leonardvujanic
 * DateTime: 19/11/2017 01:21
 *
 * @var $taskName string
 * @var $tree     array
 */

use leovujanic\codility\helpers\TaskHelper;

$taskFilePath = null;

foreach ($tree as $lesson => $tasks) {
    foreach ($tasks as $taskName => $taskFile) {
        if ($taskName === $_GET['taskName']) {
            $taskFilePath = LESSONS_DIR . '/' . $lesson . '/' . $taskName . '/index.php';
            break 2;
        }
    }
}

if ($taskFilePath === null) {
    echo '<h2>Task not found<h2>';
    
    return;
}

?>
    <h2>Task: <?= htmlspecialchars(TaskHelper::taskName($taskName), ENT_QUOTES) ?></h2>
    <pre>
<?php

$content = file_get_contents($taskFilePath);

echo htmlspecialchars($content, ENT_QUOTES);


$arrayInput = empty($_GET['arrayInput']) ? null : htmlspecialchars(trim($_GET['arrayInput']));
?>
</pre>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
        <input type="hidden" name="taskName" value="<?= htmlspecialchars($_GET['taskName'], ENT_QUOTES) ?>">
        <input name="arrayInput" value="<?= $arrayInput ?>">
        <br>
        <input type="submit" value="Submit">
    </form>
<?php

if ($arrayInput !== null) {
    
    $runnerPath = dirname(__DIR__) . '/bin/task-runner.php';
    
    $output = null;
    
    exec('php ' . $runnerPath . ' ' . $taskFilePath . ' ' . $arrayInput, $output);
    
    
    if (empty($output) === false) {
        echo '<h3>Result:</h3>';
        echo '<p>';
        
        foreach ($output as $line) {
            echo $line . '<br>';
        }
        
        echo '</p>';
    }
    
}


?>