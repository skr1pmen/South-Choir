<?php
/**
 * @var $users
 */
?>
<div class="page">
    <div class="userCards">
        <?php foreach ($users as $user): ?>
            <a href="/user/profile?id=<?= $user->id ?>" class="userCard">
                <img src="/images/users_avatars/<?= $user->id ?>.jpg" alt="">
                <div>
                    <h3><?= $user->surname ?> <?= mb_substr($user->name, 0, 1) ?>
                        .<?= !empty($user->patrinymic) ? mb_substr($user->patrinymic, 0, 1) . '.' : '' ?></h3>
                    <span class="userId">#<?= $user->id ?></span>
                    <span class="userLogin"><?= $user->login ?></span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
