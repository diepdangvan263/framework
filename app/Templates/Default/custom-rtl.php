<?php
/**
 * Custom Layout - a Layout similar with the classic Header and Footer files.
 */
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>" dir="rtl">
<head>
    <meta charset="utf-8">
    <title><?= $title .' - ' .SITETITLE; ?></title>
<?php
echo $meta; // Place to pass data / plugable hook zone

Assets::css([
    template_url('css/bootstrap-rtl.min.css', 'Default'),
    template_url('css/bootstrap-rtl-theme.min.css', 'Default'),
    'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
    template_url('css/style-rtl.css', 'Default'),
]);

echo $css; // Place to pass data / plugable hook zone
?>
</head>
<body style='padding-top: 60px;'>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= site_url('dashboard'); ?>"><strong><?= SITETITLE; ?></strong></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if (Auth::check()) { ?>
                <li <?php if($currentUri == 'dashboard') echo 'class="active"'; ?>>
                    <a href='<?= site_url('dashboard'); ?>'><i class='fa fa-dashboard'></i> <?= __d('default', 'Dashboard'); ?></a>
                </li>
                <?php } ?>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right: 5px;">
                <?php if (Auth::check()) { ?>
                <li <?php if($currentUri == 'profile') echo 'class="active"'; ?>>
                    <a href='<?= site_url('profile'); ?>'><i class='fa fa-user'></i> <?= __d('default', 'Profile'); ?></a>
                </li>
                <li>
                    <a href='<?= site_url('logout'); ?>'><i class='fa fa-sign-out'></i> <?= __d('default', 'Logout'); ?></a>
                </li>
                <?php } else { ?>
                <li <?php if($currentUri == 'login') echo 'class="active"'; ?>>
                    <a href='<?= site_url('login'); ?>'><i class='fa fa-sign-out'></i> <?= __d('default', 'User Login'); ?></a>
                </li>
                <li <?php if($currentUri == 'password/remind') echo 'class="active"'; ?>>
                    <a href='<?= site_url('password/remind'); ?>'><i class='fa fa-user'></i> <?= __d('default', 'Forgot Password?'); ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<?= $afterBody; // Place to pass data / plugable hook zone ?>

<div class="container">
    <p><img src='<?= template_url('images/nova.png', 'Default'); ?>' alt='<?= SITETITLE; ?>' style="max-width: 360px; height: auto;"></p>

    <?= $content; ?>
</div>

<?php
Assets::js([
    'https://code.jquery.com/jquery-1.12.4.min.js',
    template_url('js/bootstrap-rtl.min.js', 'Default'),
]);

echo $js; // Place to pass data / plugable hook zone
echo $footer; // Place to pass data / plugable hook zone
?>

</body>
</html>