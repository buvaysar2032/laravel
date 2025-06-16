<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\{MoonShineUserResource, MoonShineUserRoleResource, TextResource, UserResource};
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\{ConfiguratorContract, CoreContract};
use MoonShine\Laravel\DependencyInjection\{MoonShine, MoonShineConfigurator};

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param MoonShine             $core
     * @param MoonShineConfigurator $config
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                TextResource::class,
                UserResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ]);
    }
}
