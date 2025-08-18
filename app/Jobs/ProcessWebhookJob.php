<?php
    namespace App\Jobs;

    use \Spatie\WebhookClient\ProcessWebhookJob as SpatieProcessWebhookJob;
    
    class ProcessWebhookJob extends SpatieProcessWebhookJob
    {
        public function handle()
        {
            // $this->webhookCall // contains an instance of `WebhookCall`
        
            // perform the work here
        }
    }