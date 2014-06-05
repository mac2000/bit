Usage example
=============

    <?php
    require_once 'vendor/autoload.php';

    use mac\bit\BitField;
    use mac\bit\BitParam;

    class User
    {
        const NONE = 0;
        const REGISTERED = 1;
        const ADMIN = 2;
        const ALL = 3;

        use BitField;

        public function setRegistered()
        {
            $this->setFlag(self::REGISTERED);
        }

        public function setAdmin()
        {
            $this->setFlag(self::ADMIN);
        }

        public function unsetRegistered()
        {
            $this->unsetFlag(self::REGISTERED);
        }

        public function unsetAdmin()
        {
            $this->unsetFlag(self::ADMIN);
        }

        public function toggleRegistered()
        {
            $this->toggleFlag(self::REGISTERED);
        }

        public function toggleAdmin()
        {
            $this->toggleFlag(self::ADMIN);
        }

        public function isRegistered()
        {
            return $this->isFlagSet(self::REGISTERED);
        }

        public function isAdmin()
        {
            return $this->isFlagSet(self::ADMIN);
        }

        public function __toString() {
            return implode(' ', array_filter([
                $this->isRegistered() ? 'REGISTERED' : null,
                $this->isAdmin() ? 'ADMIN' : null
            ]));
        }
    }

    class UserRepository
    {
        use BitParam;

        public function create($flags = User::NONE)
        {
            $user = new User();

            if (self::isBitSet(User::REGISTERED, $flags)) {
                $user->setRegistered();
            }

            if (self::isBitSet(User::ADMIN, $flags)) {
                $user->setAdmin();
            }

            return $user;
        }
    }

    $repository = new UserRepository();
    $user = $repository->create(User::ALL & ~User::ADMIN);

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

