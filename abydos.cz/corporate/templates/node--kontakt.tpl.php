<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 * <?php print render($title_prefix); ?>
 */
?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>
    <?php if (!$page): ?>
      <header>
	<?php endif; ?>

      <?php if (!$page): ?>
      <h2 class="title" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <span class="submitted"><?php print $submitted; ?></span>
      <?php endif; ?>

    <?php if (!$page): ?>
      </header>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
      <div>
      <div id="kontakt_nadpis">
	  <?php print render($content['field_kontakt_hlavni_nadpis']); ?>
	  <?php //print render($content['field_kontakt_podnadpis']); ?>
      </div>
      <div id="kontakt_main">
	  <div id="adresy">
	    <div id="kontakt_cz">
	      <div class="stejnykontakt">
		  <?php print render($content['field_adresa_cz']); ?>
	      </div>
	    </div>
	    <div id="kontakt_de">
	      <div class="stejnykontakt">
		 <?php print render($content['field_adresa_de']); ?>
	      </div>
	    </div>
	  </div>
	  <div id="kontakt_mapa">
<iframe src="https://api.mapy.cz/frame?params=%7B%22x%22%3A12.282137937434612%2C%22y%22%3A50.006787414814625%2C%22base%22%3A%2227%22%2C%22layers%22%3A%5B%5D%2C%22zoom%22%3A9%2C%22url%22%3A%22https%3A%2F%2Fmapy.cz%2Fs%2F1TqBA%22%2C%22mark%22%3A%7B%22x%22%3A%2212.284659213908622%22%2C%22y%22%3A%2250.16229162960824%22%2C%22title%22%3A%22Hazlov%20247%2C%20Hazlov%22%7D%2C%22overview%22%3Atrue%7D&amp;width=520&amp;height=490&amp;lang=cs" width="520" height="490" style="border:none" frameBorder="0"></iframe>
	  </div>
	  <hr class="cistic">
      </div>
      <div id="kontakt_pozvanka">
	  <?php print render($content['field_navstivte_nas_text']); ?>
      </div>
      </div>
  </div>

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>
