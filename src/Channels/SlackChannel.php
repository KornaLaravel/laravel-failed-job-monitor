<?php

namespace Spatie\FailedJobsMonitor\Channels;

use Maknz\Slack\Client as Slack;

class SlackChannel implements Channel
{
    protected $slack;

    public function __construct(Slack $slack)
    {
        $this->slack = $slack;
    }

    public function send(string $failedJobClassName)
    {
        $config = config('laravel-failed-jobs-monitor.slack');
        $message = 'Job failed: '.$failedJobClassName;

        $this->slack
            ->to($config['channel'])
            ->withIcon(':'.$config['icon'].':')
            ->send($message);
    }
}