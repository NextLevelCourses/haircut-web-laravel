<?php

function HandlerLogSuccess() {}


function MainLog(string $type = 'error')
{
    try {
        switch ($type) {
            case 'success':
                break;
            case 'error':
                break;
        }
    } catch (Throwable $t) {
        return 'Error: ' . $t->getMessage();
    }
}
