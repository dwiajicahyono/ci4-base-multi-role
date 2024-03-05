<?= $this->extend('template/index'); ?>

<?= $this->section('section'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail User</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= base_url('/img/' . $user->user_image); ?>" class="img-fluid rounded-start" alt="<?= $user->username; ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h4><?= $user->username; ?></h4>
                        </li>
                        <?php if ($user->fullname) : ?>
                            <li class="list-group-item"><?= $user->fullname; ?></li>
                        <?php endif; ?>

                        <li class="list-group-item"><?= $user->email; ?></li>
                        <li class="list-group-item">
                            <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning'; ?>"><?= $user->name; ?></span>
                        </li>
                        <li class="list-group-item">
                            <a href="<?= base_url('admin'); ?>">&laquo; back to user list</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- <?php d($user); ?> -->

</div>
<?= $this->endSection(); ?>