<?php
namespace SocialLinks\Providers;

class Telegram extends ProviderBase implements ProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function shareUrl()
    {
        $info = $this->page->get();

        return $this->buildUrl(
            'tg://msg',
            null,
            array(
                'text' => $info['title'].' '.$info['url'],
            )
        );
    }
}
