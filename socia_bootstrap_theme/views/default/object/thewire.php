<?php

/**
 * View a wire post
 *
 * @uses $vars['entity']
 */
elgg_require_js('elgg/thewire');

$full = elgg_extract('full_view', $vars, FALSE);
$post = elgg_extract('entity', $vars, FALSE);

if (!$post) {
    return true;
}

// make compatible with posts created with original Curverider plugin
$thread_id = $post->wire_thread;
if (!$thread_id) {
    $post->wire_thread = $post->guid;
}

$owner = $post->getOwnerEntity();

//$owner_icon = elgg_view_entity_icon($owner, 'tiny');
  $user = elgg_get_logged_in_user_entity();
  $icone=getProfileIcon($user);
  $owner_icon = "<img src='$icone' style='border-radius: 50%;'' alt='Avatar' width='60' height='60'> ";
$owner_link = elgg_view('output/url', array(
    'href' => "thewire/owner/$owner->username",
    'text' => $owner->name,
    'is_trusted' => true,
        ));
$author_text = elgg_echo('byline', array($owner_link));
$date = elgg_view_friendly_time($post->time_created);

$subtitle = "$author_text $date";
//$subtitle = "$date";
$metadata = '';
if (!elgg_in_context('widgets')) {
    // only show entity menu outside of widgets
    $metadata = elgg_view_menu('entity', array(
        'entity' => $post,
        'handler' => 'thewire',
        'sort_by' => 'priority',
        'class' => 'elgg-menu-hz',
    ));
}

$params = array(
    'entity' => $post,
    'title' => false,
    'metadata' => $metadata,
    'subtitle' => $subtitle,
    'content' => html_entity_decode($post->description),
    'tags' => false,
    'icon' => $owner_icon,
    'class' => 'thewire-post',
);
 $params = $params + $vars;
echo elgg_view('object/elements/summary', $params);

if ($post->reply) {
    echo "<div class=\"thewire-parent hidden\" id=\"thewire-previous-{$post->guid}\">";
    echo "</div>";
}
