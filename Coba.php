<?php
class Coba
{
    private string $nama;

    // Dengan cara get dan set
    public function setNama(string $nama)
    {
        ($this->nama = $nama) ? $this->nama : 0;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

$tampilNama = new Coba();
$tampilNama->setNama("Yulo");
echo $tampilNama->getNama();
