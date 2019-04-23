<?php

namespace App\Transformers;

use App\Models\Vote;

/**
 * Class VoteTransformer.
 *
 * @package namespace App\Transformers;
 */
class VoteTransformer extends App\Transformers\BaseTransformer
{
    /**
     * Array attribute doesn't parse.
     */
    public $ignoreAttributes = [];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $defaultIncludes = [];
}
