
<?php

/**
 * @file
 * Customize confirmation screen after successful submission.
 *
 * This file may be renamed "webform-confirmation-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-confirmation.tpl.php" to affect all webform confirmations on your
 * site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $progressbar: The progress bar 100% filled (if configured). This may not
 *   print out anything if a progress bar is not enabled for this node.
 * - $confirmation_message: The confirmation message input by the webform
 *   author.
 * - $sid: The unique submission ID of this submission.
 * - $url: The URL of the form (or for in-block confirmations, the same page).
 */
?>
<?php print $progressbar; ?>

<div class="webform-confirmation">
  <?php if ($confirmation_message): ?>
    <?php print $confirmation_message ?>
  <?php else: ?>
        <div class="w-form-done">
          <p><?php print ('Thank you! Your submission has been received!'); ?></p>
        </div>
    <p></p>
  <?php endif; ?>
</div>
<!-- /#page, /#page-wrapper -->
