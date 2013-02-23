<?php

/*
 * Comments iin AJAX heseg
 */

load_template('empty');

$p = Request_Post::get();
if (is_logged_user() == 0) {
    echo 'Please login first';
    die();
}
switch ($p['action']) {
    case 'send_comment':
        if (isset($p['code'])) {
            $comment = new TComments();
            $comment->setCode($p['code']);
            $comment->setComment($p['comment']);
            $comment->setIp(getenv('REMOTE_ADDR'));
            $comment->setUserId(get_logged_user_info('id'));
            $comment->setName(get_logged_user_info('username'));
            $comment->setCreatedAt(new DateTime('now'));
            $DBW->persist($comment);
            $DBW->flush();
            echo __('comment has been submitted');
        } else {
            echo __('Unknown code');
        }
        break;
    default;
        break;
}

die();