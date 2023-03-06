

<div class="divbody">

<h2>Make a confession.</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/~ldlaigo/lab3/ci4/public/news/success" method="post">
    <?= csrf_field() ?>

    <label for="title">Type of Confession</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Tell me your sins</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="CONFESS!!!!">
</form>
