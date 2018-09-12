<?php

namespace Dummy;

class Controller_First extends \Controller {

    public function action_index() {
        \Cache::set('test', 'String to be cached.', 3600 * 3);
        return \Response::forge(\Presenter::forge('first'));
    }

}