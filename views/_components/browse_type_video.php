<?php

switch ($post->video->type) {

    case 'YOUTUBE':

        echo '<iframe width="100%" src="https://www.youtube.com/embed/' . $post->video->id . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        break;

    case 'VIMEO':

        echo '<iframe src="https://player.vimeo.com/video/' . $post->video->id . '" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        break;
}
