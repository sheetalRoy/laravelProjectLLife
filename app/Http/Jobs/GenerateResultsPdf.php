<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
// browsershot requires php7.1!
use Spatie\Browsershot\Browsershot;

class GenerateResultsPdf implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    const allowedKeys = [
        'locale',
        'lung_age',
        'age',
        'gender',
        'height',
        'cigarettes_per_day',
        'smoking_years',
        'type',
    ];

    private $filename;
    private $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($filename, array $data)
    {
        $this->filename = $filename;
        $this->data = collect($data);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $params = '?' . http_build_query($this->data->except('locale')->toArray());
        $url = sprintf(config('pdf.lungage_pdf_url'), $this->data['locale']);

        Browsershot::url($url . $params)
            ->setNodeBinary(config('pdf.node_path'))
            ->setNpmBinary(config('pdf.npm_path'))
            ->waitForFunction('window.pageReady == true', 100, 500)
            ->paperSize(210, 297)
            ->margins(0, 0, 0, 0)
            ->showBackground()
            ->emulateMedia('screen')
            ->ignoreHttpsErrors()
            ->setExtraHttpHeaders([
                'charset' => 'utf-8',
            ])
            ->setOption('args', ['--disable-web-security'])
            ->savePdf($this->filename);
    }
}
