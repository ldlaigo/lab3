<div class="divbody">

<h2>Become a Guest!</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/guest/create" method="post">
    <?= csrf_field() ?>

   <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>
    <br>

    <label for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>
    <br>

    <label for="website">Website</label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br>
    <br>

    <label for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>
    <br>

    <label for="gender">Gender</label>
    <input type="input" name="gender" value="<?= set_value('gender') ?>">
    <br>
    <br>

    <input type="submit" name="submit" value="CONFESS!!!!">
</form>

