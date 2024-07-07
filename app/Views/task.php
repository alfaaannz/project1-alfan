<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
    <?php echo $this->extend('layouts/default'); ?>

    <?php echo $this->section('content'); ?>
    <h1><?php echo $title; ?></h1>
    <ul>
        <?php foreach($tasks as $task) : ?>
          <li>
                <?= $task->name;?>
                <?= $task->description;?>
                <?= $task->done;?>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php echo $this->endSection(); ?>
</body>
</html>