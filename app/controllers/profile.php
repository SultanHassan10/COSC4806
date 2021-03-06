<?php 

  if($_POST['submit']) {
    echo "Form was submitted.";
    $new_display_name = $sanitizer->text($input->post->displayname);
  }

  // Make sure the user has permission before showing the page to edit.
  if($user->hasPermission("edit_content")) {

    $edit_page = $input->urlSegment1;

    // The user is trying to edit their profile.
    if($edit_page == "profile") {
      if($user->name == $input->urlSegment2 or $user->isSuperuser()){

        $user_display_name = $user->user_display_name;
        ?>
        <form action='./' method='post'>
          <div class="row">
            <div class="large-12 columns">
              <label>Display Name
                <input type="text" maxlength="26" name="displayname" value="<?php echo $user_display_name; ?>" />
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <button type="submit" name="submit" value="Send">Update Profile</button>
            </div>
          </div>

        </form>
        <?php
      }
      else {
        echo "You cannot edit this profile.";
      }
    }
    elseif($edit_page == "link") {
      echo "You are editing the following link page: " . $input->urlSegment2;
    }

  }
  else {
    echo "You do not have permission to edit content.";
  }