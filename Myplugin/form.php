<?php
if (!defined('ABSPATH')) {
  exit;
}
global $variable1;
global $variable2;
global $variable3;
global $variable4;
global $variable5;
global $variable6;
if (isset($_POST['link_submit'])) {
  link_opt();
}
if(isset($_POST['copyright_submit'])){
  copyright_opt();
}
function copyright_opt(){
  $copyright = $_POST['copyright'];
  $copyright_date = $_POST['copyright_date'];

  global $variable5;
  global $variable6;

  if (get_option('copyright') != trim($copyright)) {
    $variable5 = update_option('copyright', trim($copyright));
  }
  if (get_option('copyright_date') != trim($copyright_date)) {
    $variable6 = update_option('copyright_date', trim($copyright_date));
  }
}
function link_opt()
{
  $link1 = $_POST['facebook_link'];
  $link2 = $_POST['instagram_link'];
  $link3 = $_POST['twitter_link'];
  $link4 = $_POST['linkedin_link'];

  global $variable1;
  global $variable2;
  global $variable3;
  global $variable4;

  if (get_option('facebook_link') != trim($link1)) {
    $variable1 = update_option('facebook_link', trim($link1));
  }
  if (get_option('instagram_link') != trim($link2)) {
    $variable2 = update_option('instagram_link', trim($link2));
  }
  if (get_option('twitter_link') != trim($link3)) {
    $variable3 = update_option('twitter_link', trim($link3));
  }
  if (get_option('linkedin_link') != trim($link4)) {
    $variable4 = update_option('linkedin_link', trim($link4));
  }

}
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>Footer Settings</h2>
  <?php if (isset($_POST['link_submit']) && ($variable1 || $variable2 || $variable3 || $variable4 )) : ?>
    <div id="message" class="updated below-h2">
      <p>Link of social network updated successfully</p>
    </div>
  <?php endif; ?>
  <?php if (isset($_POST['copyright_submit']) && ( $variable5 || $variable6)) : ?>
    <div id="message" class="updated below-h2">
      <p>Copyright updated successfully </p>
    </div>
  <?php endif; ?>
  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Enter footer link and click on save button.</strong></h3>
      <hr>
      <form method="post" action="">
        <table class="form-table">

            <tr>
              <th scope="row" style="padding-left: 12px;">Facebook Link :</th>
              <td><input type="text" name="facebook_link" value="<?php echo get_option('facebook_link'); ?>" style="width:350px;" /></td>
            </tr>

            <tr>
              <th scope="row" style="padding-left: 12px;">Instagram Link :</th>
              <td><input type="text" name="instagram_link" value="<?php echo get_option('instagram_link'); ?>" style="width:350px;" /></td>
            </tr>

            <tr>
              <th scope="row" style="padding-left: 12px;">Twitter Link :</th>
              <td><input type="text" name="twitter_link" value="<?php echo get_option('twitter_link'); ?>" style="width:350px;" /></td>
            </tr>

            <tr>
              <th scope="row" style="padding-left: 12px;">Linkedin Link :</th>
              <td><input type="text" name="linkedin_link" value="<?php echo get_option('linkedin_link'); ?>" style="width:350px;" /></td>
            </tr>


          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
              <input type="submit" name="link_submit" value="Save changes" class="button-primary" />
            </td>
          </tr>
        </table>
      </form>
    </div>

    <div class="postbox">
      <h3><strong>Enter Copyright and click on save button.</strong></h3>
      <hr>
      <form method="post" action="">
        <table class="form-table">

          <tr>
            <th scope="row" style="padding-left: 12px;">Copyright By :</th>
            <td><input type="text" name="copyright" value="<?php echo get_option('copyright'); ?>" style="width:350px;" /></td>
          </tr>

          <tr>
            <th scope="row" style="padding-left: 12px;">Copyright Date :</th>
            <td><input type="text" name="copyright_date" value="<?php echo get_option('copyright_date'); ?>" style="width:350px;" /></td>
          </tr>

          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
              <input type="submit" name="copyright_submit" value="Save changes" class="button-primary" />
            </td>
          </tr>
        </table>
      </form>
    </div>

  </div>
</div>