<?php
pcntl_signal(SIGALRM, function () {
    echo 'Received an alarm signal !' . PHP_EOL;
}, false);

pcntl_alarm(5);

while (true) {
    pcntl_signal_dispatch();
    echo 'one sleep'.'<\br>';
    sleep(1);
}
