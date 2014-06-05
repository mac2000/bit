Usage example
=============

    <?php
    require_once 'vendor/autoload.php';

    use mac\bit\Bit;

    class User
    {
        const NONE = 0;
        const REGISTERED = 1;
        const ADMIN = 2;
        const ALL = 3;

        use Bit;

        protected $flags;

        public function setRegistered()
        {
            $this->setFlag(self::REGISTERED, $this->flags);
        }

        public function setAdmin()
        {
            $this->setFlag(self::ADMIN, $this->flags);
        }

        public function unsetRegistered()
        {
            $this->unsetFlag(self::REGISTERED, $this->flags);
        }

        public function unsetAdmin()
        {
            $this->unsetFlag(self::ADMIN, $this->flags);
        }

        public function toggleRegistered()
        {
            $this->toggleFlag(self::REGISTERED, $this->flags);
        }

        public function toggleAdmin()
        {
            $this->toggleFlag(self::ADMIN, $this->flags);
        }

        public function isRegistered()
        {
            return $this->isFlagSet(self::REGISTERED, $this->flags);
        }

        public function isAdmin()
        {
            return $this->isFlagSet(self::ADMIN, $this->flags);
        }

        public function __toString() {
            return implode(' ', array_filter([
                $this->isRegistered() ? 'REGISTERED' : null,
                $this->isAdmin() ? 'ADMIN' : null
            ]));
        }
    }

    $user = new User();

    $user->setRegistered();

    echo $user; // REGISTERED

    $user->toggleAdmin();
    $user->unsetRegistered();
    echo $user; // ADMIN

Installation
============

Here is `composer.json` example:

    {
        "require": {
            "mac/bit": "x"
        },
        "repositories": [
            {
                "type": "vcs",
                "url": "https://github.com/mac2000/bit"
            }
        ]
    }

