<?php

namespace App\Mail;

use App\Team;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\URL;

class InviteToTeam extends Mailable
{
    use Queueable, SerializesModels;

    private string $email;
    private int $teamId;
    private string $teamName;
    private string $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $email, Team $team)
    {
        $this->email = $email;
        $this->teamId = $team->id;
        $this->teamName = $team->name;
        $this->url = URL::temporarySignedRoute('inviteToTeam', now()->addMinute(30), ['email' => Crypt::encrypt($this->email), 'team_id' => Crypt::encrypt($this->teamId)]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))->markdown('emails.inviteToTeam', ['url' => $this->url, 'teamName' => $this->teamName]);
    }
}
