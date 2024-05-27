<?php

/**
 * @var \App\View\AppView $this
 */

 $controller = $this->getRequest()->getParam('controller');
 $action = $this->getRequest()->getParam('action');
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
        '/plugins/bootstrap/css/bootstrap.min',
        '/plugins/font-awesome/css/fontawesome.min',
        '/plugins/font-awesome/css/solid.min',
        'custom.css',
    ]); ?>

    <?= $this->fetch('meta') ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link<?= $controller === 'Pages' && $action === 'welcome' ? ' active' : '' ?>" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'welcome']); ?>">Domů</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= $controller === 'Pages' && $action === 'shifts' ? ' active' : '' ?>" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'shifts']); ?>">Rozdělení služeb</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="bg-light p-5 rounded">
            <div class="row">
                <div class="col-12">
                    <?= $this->Flash->render() ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </main>

    <?= $this->Html->script([
        '/plugins/jquery/jquery-3.7.1.min',
        '/plugins/popper/popper.min',
        '/plugins/bootstrap/js/bootstrap.min',
        'custom',
    ]); ?>
</body>

</html>