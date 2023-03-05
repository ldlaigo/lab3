<div class="topnav">
  <a class ="icon" href="home"><img src="https://64.media.tumblr.com/e0b978612c68d83635151d03fa995a0c/e1089a909f72b296-c7/s540x810/640bd85b2a8cc63ab5d08ee11459fec87c3a681a.jpg" style="width:48px;height:48px; margin:0px; margin-bottom:-5px;"></a>
  <a href="home">Home</a>
  <a class="active" href="/news">SIMP CONFESSIONS</a>
  <a href="create">CONFESS!</a>
</div>

<div class="divbody">

<h2>Make a confession.</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Type of Confession</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Tell me your sins</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="CONFESS!!!!">
</form>
