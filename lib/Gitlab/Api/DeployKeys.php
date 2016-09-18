<?php

namespace Gitlab\Api;

class DeployKeys extends AbstractApi
{
    public function all($page = 1, $per_page = self::PER_PAGE)
    {
        return $this->get('deploy_keys', [
            'page' => $page,
            'per_page' => $per_page,
        ]);
    }
}
