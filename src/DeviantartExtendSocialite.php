<?php
namespace SocialiteProviders\Deviantart;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DeviantartExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'deviantart', __NAMESPACE__.'\Provider'
        );
    }
}
