<?php

namespace JagdishJP\CPanelAPI;

enum AuthType: string
{
    case BASIC = 'Basic';
    case TOKEN = 'cpanel';
}
