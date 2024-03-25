<?php

namespace App\Application\v1\Service;

use Psr\Log\LoggerInterface;
use Throwable;

class CsvGeneratorService
{
    /**
     * @param array $data
     * @param string $filename
     * @param LoggerInterface $logger
     * @return void
     */
    public function generateCsv(array $data, string $filename, LoggerInterface $logger): void
    {
        try {
            $handle = fopen('../var/files/'.$filename, 'w');

            // Headers
            fputcsv($handle, ['date', 'open', 'high', 'low', 'close', 'volume']);

            foreach ($data as $row) {
                if (!empty($row['open'])) {
                    fputcsv($handle, [$row['date'], $row['open'], $row['high'], $row['low'], $row['close'], $row['volume']]);
                }
            }

            fclose($handle);
        } catch (Throwable $t) {
            //TODO:log exception
            echo $t->getMessage(). PHP_EOL;

            $logger->error('An error occurred in CsvGeneratorService: ' . $t->getMessage(), ['exception' => $t]);
        }
    }
}
