<?php
namespace SocialLinks\Providers;

class Whatsapp extends ProviderBase implements ProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function shareUrl()
    {
        $info = $this->page->get();

        return $this->buildUrl(
            'whatsapp://send',
            null,
            array(
                'text' => $info['title'].' '.$info['url'],
            )
        );
    }
}
