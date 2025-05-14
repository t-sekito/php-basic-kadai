<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>
<body>
<?php
// Foodクラスを定義する
class Food {
    private $name;
    private $price;
    
    // Foodコンストラクタを定義する
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Foodメソッドを定義する
    public function __toString() {
        return "Food Object ( [name:Food:private] => {$this->name} [price:Food:private] => {$this->price} )";
    }

    public function getPrice() {
        return $this->price;
    }
}

$food = new Food('potato', 250);

// オブジェクトの状態を表示
echo $food;

?>

<br>

<?php
// Animalクラスを定義する
class Animal {
    private $name;
    private $height;
    private $weight;

    // Animalコンストラクタを定義する
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // FAnimalメソッドを定義する
    public function __toString() {
        return "Animal Object ( [name:Animal:private] => {$this->name} [height:Animal:private] => {$this->height} [weight:Animal:private] => {$this->weight} )";
    }

    public function getHeight() {
        return $this->height;
    }
}

$animal = new Animal('dog', 60, 5000);

// オブジェクトの状態を表示
echo $animal;
?>

<?php
// 価格を出力する
echo "<br>";
echo $food->getPrice();
?>

<?php
echo "<br>";
// 高さを出力する
echo $animal->getHeight();
?>

</body>
</html>