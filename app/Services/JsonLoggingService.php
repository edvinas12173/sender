<?php

namespace App\Services;

class JsonLoggingService
{
    public static function log($filename, $data)
    {
        // read the file if present
        $handle = @fopen($filename, 'r+');

        // create the file if needed
        if ($handle === false)
        {
            $handle = fopen($filename, 'w+');
        }

        if ($handle)
        {
            // seek to the end
            fseek($handle, 0, SEEK_END);

            // are we at the end of is the file empty
            if (ftell($handle) > 0)
            {
                // move back a byte
                fseek($handle, -1, SEEK_END);

                // add the trailing comma
                fwrite($handle, ',' , 1);

                // add a new line
                fwrite($handle, PHP_EOL);

                // add the new json string
                fwrite($handle, json_encode($data)  . ']');
            }
            else
            {
                // write the first event inside an array
                fwrite($handle, json_encode(array($data)));
            }

            // close the handle on the file
            fclose($handle);
        }
    }
}
