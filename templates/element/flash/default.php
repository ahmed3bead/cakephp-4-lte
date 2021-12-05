<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
$class = 'message';
if (!empty($params['class'])) {
    
    if(is_array($params['class'])){
        $extraClasses = implode(' ', $params['class']);
        $class .= ' ' . $extraClasses;
    }else{
       $class .= ' ' . $params['class']; 
    }
    
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div id='flashMessage' class="<?= h($class) ?> info" onclick="this.classList.add('hidden');"><?= $message ?></div>
