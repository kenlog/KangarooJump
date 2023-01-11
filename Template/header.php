<?php $_title = $this->render('header/title', array(
    'project' => isset($project) ? $project : null,
    'task' => isset($task) ? $task : null,
    'description' => isset($description) ? $description : null,
    'title' => $title,
)) ?>

<?php $_top_right_corner = implode('&nbsp;', array(
        $this->render('header/user_notifications'),
        $this->render('header/creation_dropdown'),
        $this->render('header/user_dropdown')
    )) ?>

<?php 
    global $themeMoonConfig;
    if (file_exists('plugins/Moon') && isset($themeMoonConfig['backgroundColorHeader'])) {
        echo '<header style="background:'.$themeMoonConfig['backgroundColorHeader'].'">';
    } else {
        echo '<header>';
    }
?>
    <div class="title-container">
        <?= $_title ?>
    </div>

    <div class="board-selector-container">
        <form method="get" action="<?= $this->url->dir() ?>" class="search">
            <?= $this->form->hidden('controller', array('controller' => 'TaskViewController')) ?>
            <?= $this->form->hidden('action', array('action' => 'show')) ?>
            <div>
                <?= $this->form->text('task_id', array(), array(), array('placeholder="'.t('Search task id').'"', 'pattern="[0-9.]+" title="'.t('Task number').'" '.'aria-label="'.t('Search task id').'" '.'style="border-radius: 3px; height: 16px;"'), 'input-addon-field') ?>
            </div>
        </form>
    </div>
    
    <div class="board-selector-container">
        <?php if (! empty($board_selector)): ?>
            <?= $this->render('header/board_selector', array('board_selector' => $board_selector)) ?>
        <?php endif ?>
    </div>

    <div class="menus-container">
        <?= $_top_right_corner ?>
    </div>
</header>
