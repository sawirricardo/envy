<?php

declare(strict_types=1);

namespace Worksome\Envy\Contracts\Actions;

use Illuminate\Support\Collection;
use Worksome\Envy\Support\EnvironmentCall;

interface FindsEnvironmentVariablesToPrune
{
    /**
     * @param Collection<int, EnvironmentCall> $environmentCalls
     * @return Collection<int, string>
     */
    public function __invoke(string $filePath, Collection $environmentCalls): Collection;
}
