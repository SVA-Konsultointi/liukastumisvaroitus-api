<?php

namespace App\Repositories;

use App\Repositories\Interfaces\WarningRepositoryInterface;

class LabyrinttiWarningRepository implements WarningRepositoryInterface
{
    /**
     * @var string
     */
    private $server;

    /**
     * @var string
     */
    private $port;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $password;

    /**
     * @var resource
     */
    private $connection;

    public function __construct(string $server, string $port, string $user, string $password)
    {
        $this->server = $server;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
    }

    public function getWarnings()
    {
        $this->open();

        $messages = $this->getMessages();

        $this->close();

        return $messages;
    }

    private function open()
    {
        $this->connection = imap_open(
            "{{$this->server}:{$this->port}/imap}INBOX",
            $this->user,
            $this->password
        );
    }

    private function getMessages()
    {
        $numberOfMessages = imap_num_msg($this->connection);
        $messages = [];

        for ($index = 1; $index <= $numberOfMessages; $index++) {
            $overview = imap_fetch_overview($this->connection, $index);

            if ($overview[0]->subject !== 'Varoitus') {
                continue;
            }

            $messages[] = imap_fetchbody($this->connection, $index, 1.0);

            imap_mail_move($this->connection, $index, 'Trash');
        }

        return $messages;
    }

    private function close()
    {
        imap_close($this->connection, CL_EXPUNGE);
    }
}
