<?php

# membuat class Animal
class Animal
{
    # property animals

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    { $this->animals ["Ayam", "Bebek", "Gajah"];
    }

    # method index - menampilkan data animals
    public function index()
    {
        # gunakan foreach untuk menampilkan data animals (array)
        echo "Seluruh data animals:<br>";
        foreach ($this->animals as $index => $animal) {
            echo "#{$index}: {$animal}<br>";
        }
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($newAnimal)
    {
        # gunakan method array_push untuk menambahkan data baru
        $this->animals[] = $newAnimal;
        echo "Hewan \"$newAnimal\" telah ditambahkan.<br>";
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $updatedAnimal)
    {   if ($index >= 0 && $index < count($this->animals)) {
        $this->animals[$index] = $updatedAnimal;
        echo "Data hewan di indeks #$index telah diperbarui.<br>";
    } else {
        echo "Indeks tidak valid. Tidak ada perubahan yang dilakukan.<br>";
    }
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        if ($index >= 0 && $index < count($this->animals)) {
            $removedAnimal = array_splice($this->animals, $index, 1);
            echo "Hewan \"{$removedAnimal[0]}\" di indeks #$index telah dihapus.<br>";
        } else {
            echo "Indeks tidak valid. Tidak ada penghapusan yang dilakukan.<br>";
        }
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal([]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";
