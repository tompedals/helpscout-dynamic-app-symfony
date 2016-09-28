<?php

namespace App\AppBundle;

use DateTime;
use TomPedals\HelpScoutApp\AppHandlerInterface;
use TomPedals\HelpScoutApp\AppRequest;
use Twig_Environment;

class AppHandler implements AppHandlerInterface
{
    /**
     * @var Twig_Environment
     */
    private $twig;

    /**
     * @param Twig_Environment $twig
     */
    public function __construct(Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param AppRequest $request
     *
     * @return string The HTML to output within the Help Scout sidebar
     */
    public function handle(AppRequest $request)
    {
        // Render the template with some example customer data
        return $this->twig->render('@App/app.html.twig', [
            'subscription' => [
                'amount'  => 1500,
                'created' => new DateTime('2015-06-01T09:00:00+00:00'),
            ],
            'charges' => [
                [
                    'reference' => '12345',
                    'date'      => new DateTime('2016-09-20T09:00:10+00:00'),
                    'amount'    => 1500,
                ],
                [
                    'reference' => '12346',
                    'date'      => new DateTime('2016-08-20T09:12:33+00:00'),
                    'amount'    => 1500,
                ],
            ],
        ]);
    }
}
