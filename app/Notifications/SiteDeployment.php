<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use App\Site;

class SiteDeployment extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The site instance.
     *
     * @var Site
     */
    public $site;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Site $site)
    {
        $this->site = $site;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return $notifiable->preferences;
        // return ['mail', 'database', 'slack', 'nexmo', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Site Deployment Started')
            ->greeting('A new site build is in progress')
            ->line('Please click the button below to view the Site.')
            ->action('View Site', url('/sites/' . $this->site->site_uid));
    }

    /**
     * Get the broadcast representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'message' => 'New Site Deployment Started'
        ]);
    }

    /**
     * Get the database representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'message' => 'New Site Deployment Started',
            'action' => 'A new site build is in progress',
            'refer_url' => url('/sites/' . $this->site->site_uid),
            'action_url' => url('/sites/' . $this->site->site_uid)
        ];
    }

    /**
     * Get the Slack representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable)
    {
        $action_url = url('/');
        $site = $this->site;

        return (new SlackMessage)
            ->from('Webtheory')
            ->image('https://laravel.com/favicon.png')
            //->to('#general')
            ->success()
            ->content('New Site Deployment Started')
            ->attachment(function ($attachment) use ($action_url, $site) {
                $attachment->title('A new site build is in progress', $action_url)
                    ->fields([
                        'Site #' => $site->site_uid,
                    ]);
            });
    }

    /**
     * Get the Nexmo / SMS representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return NexmoMessage
     */
    public function toNexmo($notifiable)
    {
        $url = url('/sites/' . $this->invoice->slug);
        return (new NexmoMessage)
            ->content('New Site Deployment Started' . '. To view request click here ' . $url)
            ->from('SMS');
        //->from('15554443333');
    }
}
