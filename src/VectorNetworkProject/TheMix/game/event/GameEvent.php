<?php
/**
 * Copyright (c) 2018 VectorNetworkProject. All rights reserved. MIT license.
 *
 * GitHub: https://github.com/VectorNetworkProject/TheMix
 * Website: https://www.vector-network.tk
 */

namespace VectorNetworkProject\TheMix\game\event;

class GameEvent
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return get_class($this);
    }
}
