<?php

namespace App\Application\v1\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\DataPart;
use Throwable;

class MailService
{
    private MailerInterface $mailer;
    private MessageBusInterface $bus;
    private LoggerInterface $logger;

    public function __construct(MailerInterface $mailer,
                                MessageBusInterface $bus,
                                LoggerInterface $logger)
    {
        $this->mailer = $mailer;
        $this->bus = $bus;
        $this->logger = $logger;
    }

    /**
     * @param string $to
     * @param string $companyName
     * @param string $startDate
     * @param string $endDate
     * @param string $csvFile
     * @return void
     */
    public function sendEmailWithCSV(string $to, string $companyName, string $startDate, string $endDate, string $csvFile): void
    {

        try {
            $email = (new Email())
                ->from($_ENV['MAIL_FROM'])
                ->to($to)
                ->subject("Company's Name: {$companyName}")
                ->text("From {$startDate} to {$endDate}");

            $attachment = DataPart::fromPath('../var/files/'.$csvFile, $csvFile, 'text/csv');
            $email->addPart($attachment);

           // $this->mailer->send($email);
            // TODO: fix problem with worker container for the async email sending.
            $this->bus->dispatch(new SendEmailMessage($email));
        } catch (Throwable $t) {
            //TODO:log exception
            echo $t->getMessage(). PHP_EOL;

            $this->logger->error('An error occurred in MailService: ' . $t->getMessage(), ['exception' => $t]);
        }
    }
}
