<?php

namespace InstagramFeed\Vendor\Smashballoon\Framework\Utilities\PlatformTracking\Platforms;

/** @internal */
class GoDadddy implements PlatformInterface
{
    /**
     * @inheritDoc
     */
    public function register()
    {
        \add_filter('sb_hosting_platform', [$this, 'filter_sb_hosting_platform']);
    }
    /**
     * @inheritDoc
     */
    public function filter_sb_hosting_platform($platform)
    {
        if (!empty(\getenv('WPAAS_POD'))) {
            $platform = 'godaddy';
        }
        return $platform;
    }
}
