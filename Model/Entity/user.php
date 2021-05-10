<?php


class user {
    private ?int $id;
    private string $name;
    private string $password;
    private int $role_fk;

    public function __construct(?int $id = null, string $name, string $password, int $role_fk) {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->role_fk = $role_fk;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getRoleFk(): int
    {
        return $this->role_fk;
    }

    /**
     * @param int $role_fk
     */
    public function setRoleFk(int $role_fk): void
    {
        $this->role_fk = $role_fk;
    }



}