<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReportesMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject= "Reporte de Fallo ";
    public $reporte;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reporte)
    {
        $this->reporte=$reporte;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reportes');
    }
}
