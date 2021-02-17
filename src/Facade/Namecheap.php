<?php

namespace GotCreations\Namecheap\Facade;

use Illuminate\Support\Facades\Facade;
use Namecheap\Domain\Domains;
use Namecheap\Domain\DomainsDns;
use Namecheap\Domain\DomainsNs;
use Namecheap\Domain\DomainsTransfer;
use Namecheap\Ssl\Ssl;
use Namecheap\Users\Users;
use Namecheap\Users\UsersAddress;
use Namecheap\Whoisguard\Whoisguard;

/**
 * Class Namecheap
 * @package GotCreations\Namecheap\Facade
 * @method static Domains domains()
 * @method static DomainsDns domainsDns()
 * @method static DomainsNs domainsNs()
 * @method static DomainsTransfer domainsTransfer()
 * @method static Ssl ssl()
 * @method static Users users()
 * @method static UsersAddress usersAddress()
 * @method static Whoisguard whoisguard()
 */
class Namecheap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'namecheap';
    }
}