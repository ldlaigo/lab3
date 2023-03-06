
<div class = "divbody">

<h2>Become a Guest!</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/~ldlaigo/lab3/ci4/public/guest/success" method="post">
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

</div>
<style>
.topnav {
  margin: -10px;
  background-color: rgb(250,246,231);
  border: .5px solid black;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color:  rgb(221,197,105);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #ae8b0c;
  color: white;
}
.topnav a.icon {
  padding: 0px;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
body {
  background-color: rgba(225,197,100, 0.8);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
      
.divbody {
  width: auto;
  padding: 10px;
  border: 5px solid  rgb(250,246,231);
  background-color:  rgb(250,246,231);
  margin-top: 50px;
  margin-left: 100px;
  margin-right: 100px;
}
.topnav {
  margin: -10px;
  background-color: rgb(250,246,231);
  border: .5px solid black;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color:  rgb(221,197,105);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #ae8b0c;
  color: white;
}
.topnav a.icon {
  padding: 0px;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.image-list-small {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0 auto;
  text-align: center;
  max-width: auto;
  padding: 0;
}

.image-list-small li {
  display: inline-block;
  width: 300px;
  margin: 0 50px 50px;
}


/* Photo */

.image-list-small li > a {
  display: block;
  text-decoration: none;
  background-size: cover;
  background-repeat: no-repeat;
  height: 200px;
  margin: 0;
  padding: 0;
  border: 4px solid #ffffff;
  outline: 1px solid #d0d0d0;
  box-shadow: 0 2px 1px #DDD;
}

.image-list-small .details {
  margin-top: 13px;
}


/* Title */

.image-list-small .details h3 {
  display: block;
  font-size: 12px;
  margin: 0 0 3px 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.image-list-small .details h3 a {
  color: #303030;
  text-decoration: none;
}

.image-list-small .details .date {
  display: block;
  color: #717171;
  font-size: 11px;
  font-weight: normal;
  margin: 0;
}
</script>