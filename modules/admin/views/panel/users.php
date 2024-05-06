<?php
/**
 * @var $users
 */
?>
<div class="page">
    <div class="userCards">
        <?php foreach ($users as $user): ?>
            <div class="userCard">
                <img src="/images/users_avatars/<?= $user->id ?>.jpg" alt="">
            </div>
            <?php echo $user->login[0] ?>
        <?php endforeach; ?>
    </div>
</div>
