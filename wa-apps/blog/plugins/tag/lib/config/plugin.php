<?php

return array(
    'name'        => 'Tags',//_wp('Tags');
    'description' => "Assign tags to posts",//_wp("Assign tags to posts");
    'vendor'      => 'webasyst',
    'version'     => '1.0.0',
    'img'=>'img/tags.png',
    'frontend'    => true,
    'handlers'  => array(
        'search_posts_backend'   => 'postSearch',
        'search_posts_frontend'  => 'postSearch',
        'backend_sidebar'        => 'backendSidebar',
        'prepare_posts_backend'  => 'prepareBackendView',
        'prepare_posts_frontend' => 'prepareFrontendView',
        'backend_post_edit'      => 'backendPostEdit',
        'post_save'              => 'postSave',
        'post_publish'           => 'postSave',
        'post_shedule'           => 'postSave',
        'post_delete'            => 'postDelete',
        'frontend_action_default'=> 'frontendSidebar',
    ),
);
//EOF