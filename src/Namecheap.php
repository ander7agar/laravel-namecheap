<?php


namespace GotCreations\Namecheap;


use Namecheap\Api;
use Namecheap\Domain\Domains;
use Namecheap\Domain\DomainsDns;
use Namecheap\Domain\DomainsNs;
use Namecheap\Domain\DomainsTransfer;
use Namecheap\Ssl\Ssl;
use Namecheap\Users\Users;
use Namecheap\Users\UsersAddress;
use Namecheap\Whoisguard\Whoisguard;

class Namecheap
{

    /**
     * @var Api
     */
    protected $client;

    /**
     * @var Domains
     */
    protected $domains;

    /**
     * @var DomainsDns
     */
    protected $domainsDns;
    /**
     * @var DomainsNs
     */
    protected $domainsNs;

    /**
     * @var DomainsTransfer
     */
    protected $domainsTransfer;

    /**
     * @var Ssl
     */
    protected $ssl;

    /**
     * @var Users
     */
    protected $users;

    /**
     * @var UsersAddress
     */
    protected $usersAddress;

    /**
     * @var Whoisguard
     */
    protected $whoisguard;

    /**
     * Namecheap constructor.
     * @param $config
     */
    public function __construct($config)
    {
        $this->client = new Api($config['apiUser'], $config['apiKey'], $config['apiUser'], $config['clientIp'], $config['returnType']);
        $this->domains = new Domains($this->client);
        $this->domainsDns = new DomainsDns($this->client);
        $this->domainsNs = new DomainsNs($this->client);
        $this->domainsTransfer = new DomainsTransfer($this->client);
        $this->ssl = new Ssl($this->client);
        $this->users = new Users($this->client);
        $this->usersAddress = new UsersAddress($this->client);
        $this->whoisguard = new Whoisguard($this->client);

        $this->enableSandbox(boolval($config['enableSandbox']));
    }

    /**
     * @return Domains
     */
    public function domains(): Domains
    {
        return $this->domains;
    }

    /**
     * @return DomainsDns
     */
    public function domainsDns(): DomainsDns
    {
        return $this->domainsDns;
    }

    /**
     * @return DomainsNs
     */
    public function domainsNs(): DomainsNs
    {
        return $this->domainsNs;
    }

    /**
     * @return DomainsTransfer
     */
    public function domainsTransfer(): DomainsTransfer
    {
        return $this->domainsTransfer;
    }

    /**
     * @return Ssl
     */
    public function ssl(): Ssl
    {
        return $this->ssl;
    }

    /**
     * @return Users
     */
    public function users(): Users
    {
        return $this->users;
    }

    /**
     * @return UsersAddress
     */
    public function usersAddress(): UsersAddress
    {
        return $this->usersAddress;
    }

    /**
     * @return Whoisguard
     */
    public function whoisguard(): Whoisguard
    {
        return $this->whoisguard;
    }

    /**
     * @param bool $enable
     */
    public function enableSandbox($enable = true) {
        if ($enable) {
            $this->domains->enableSandbox();
            $this->domainsDns->enableSandbox();
            $this->domainsNs->enableSandbox();
            $this->domainsTransfer->enableSandbox();
            $this->ssl->enableSandbox();
            $this->users->enableSandbox();
            $this->usersAddress->enableSandbox();
            $this->whoisguard->enableSandbox();
        } else {
            $this->domains->disableSandbox();
            $this->domainsDns->disableSandbox();
            $this->domainsNs->disableSandbox();
            $this->domainsTransfer->disableSandbox();
            $this->ssl->disableSandbox();
            $this->users->disableSandbox();
            $this->usersAddress->disableSandbox();
            $this->whoisguard->disableSandbox();
        }
    }
}