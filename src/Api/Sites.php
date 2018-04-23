<?php

namespace nickurt\PleskXml\Api;

class Sites extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'webspace' => ['get' => ['filter' => [], 'dataset' => ['gen_info' => [], 'hosting' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'webspace' => ['get' => ['filter' => $params, 'dataset' => ['gen_info' => [], 'hosting' => []]]]
        ]);
    }
}
