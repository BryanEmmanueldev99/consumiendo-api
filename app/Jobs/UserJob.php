<?php

namespace App\Jobs;

use App\Mail\NewsletterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserJob implements ShouldQueue
{
    use Queueable, SerializesModels, Dispatchable, InteractsWithQueue;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public User $usuario,
    )
    {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            Mail::to($this->usuario)->send(new NewsletterMail($this->usuario));
        } catch (\Exception $e) {
            Log::debug($e->getMessage());
        }
    }
}
