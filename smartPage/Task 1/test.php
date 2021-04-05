<?php
    //клас Транспортний засіб
    class Vehicle{
        //к-сть коліс
        public $numberOfWheels;
        // тип (наземний, водний, повітряний)
        public $type;
        // к-сть пасажирів, яку може вмістити
        public $numberOfPassengers;

        //конструктор
        public function __construct($nWheel, $t, $nPass){
            $this->numberOfWheels = $nWheel;
            $this->type = $t;
            $this->numberOfPassengers = $nPass;
        }

        // гетер для кількості коліс
        public function getNumOfWheels(){
            return $this->numberOfWheels;
        }

        // гетер для типу
        public function getType(){
            return $this->type;
        }

        // гетер для к-сті пасажирів 
        public function getNumOfPassengers(){
            return $this->numberOfPassengers;
        }

        // метод, який виводить інформацію про транспортний засіб
        public function showVehicle(){
            echo "Number of wheels: ".$this->getNumOfWheels()."<br>";
            echo "Type of vechicle: ".$this->getType()."<br>";
            echo "Number of passengers: ".$this->getNumOfPassengers()."<br>";
        }
    }

    // клас Автомобіль, який наслідує клас Транспортний засіб
    class Car extends Vehicle{
        // потужність двигуна
        private $enginePower;
        // наявність фар
        private $headlights;

        //конструктор
        public function __construct($nWheel, $t, $nPass, $engPow, $hl){
            Vehicle::__construct($nWheel, $t, $nPass);
            $this->enginePower = $engPow;
            $this->headlights = $hl;
        }

        // гетер для потужності двигуна
        public function getEnginePower(){
            return $this->enginePower;
        }

        // гетер для наявності фар
        public function getHeadlight(){
            return $this->headlights;
        }

        //метод для виведеня інформації про автомобіль
        public function showCar(){
            Vehicle::showVehicle();
            echo "Engine power (kW): ".$this->getEnginePower()."<br>";

            if($this->getHeadlight() == true){
                $res = "true";
            }else{
                $res = "false";
            }

            echo "Headlights: ".$res."<br>";
        }
    }

    // клас Singleton
    class MyCar{
        // статичне поле для зберігання об'єкта
        private static $instance;
        // модель автомобіля
        private $model;

        //метод для створення єдиного екземпляра класу
        public static function getInstance(): MyCar{
            if(self::$instance === null){
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function getModel(){
            return $this->model;
        }

        public function setModel($model){
            $this->model = $model;
        }

        private function __construct(){
        }

        private function __clone(){
        }

        private function __wakeup(){
        }
    }

    echo "<b>Створення екземпляра класу Vehicle</b> <br>";
    $cart = new Vehicle(4, "terrestrial", 5);
    echo "VEHICLE <br>";
    $cart->showVehicle();

    echo "<b>Створення екземпляра класу Car</b> <br>";
    echo "VOLVO <br>";
    $volvo = new Car(4, 'terrestrial', 4, 170, true);
    $volvo->showCar();

    echo "<b>Створення єдиного об'єкта класу MyCar </b> <br>";
    $myCar = MyCar::getInstance();
    $myCar->setModel("Tesla");
    echo "My car's model is ".$myCar->getModel()."<br>";
    // створимо ще один екземпляр класу singleton
    $alsoMyCar = MyCar::getInstance();
    // перевіримо, що це той самий об'єкт
    if($myCar === $alsoMyCar){
        echo "My only one car <br>";
    }

    //відкриваємо файл на читання
    $stdin = fopen("text.txt", "r");
    // зчитуємо рядок
    $stringFromFile = fgets($stdin);
    // розбиваємо на слова
    $array = explode(" ", $stringFromFile); 
    // масив, що містить знаки пунктуації
    $punctuation = [".", ",", "-", "?", "!"];  
    
    echo "<br> <b> Слово з файла без знаків пунктуації </b> <br>";
    // для кожного слова з масиву
    foreach($array as &$word){
        //для кожної букви зі слова
        for($i = 0; $i < strlen($word); $i++){
            //перевіряємо чи даний символ є знаком пунктуації
            if(in_array($word[$i], $punctuation)){
                //якщо є, видаляємо його
                $word = str_replace($word[$i], "", $word);
            }
        }
        //виводимо слово
        echo $word."<br>";
    }

    //слова з масиво з'єднуємо у рядок
    $newString = implode(" ", $array);
    echo "<b>Рядок без знаків пунктуації </b> <br>";
    echo $newString."<br>"; 

    //асоціативний масив (ключ => значення)
    $weather = array(
        "spring" => "like",
        "warm autumn" => "like",
        "winter" => "dont_like",
        "hot summer" => "like",
        "rain" => "dont_like",
        "drizzle" => "dont_like"
    );

    $like = [];
    $dont_like = [];

    foreach($weather as $key => $value){
        //розіменування - залежно від значення, заносимо ключ у відповідний масив 
        array_push($$value, $key);
    }


    echo "<br> <b> I like </b> ";
    for($i = 0; $i < count($like); $i++){
        //виводимо усі елементи масиву like
        echo $like[$i].", ";
    }

    echo "<br>";

    echo "<b>I don't like </b> ";
    for($i = 0; $i < count($dont_like); $i++){
        // виводимо усі едементи масиву dont_like
        echo $dont_like[$i].", ";
    }
    echo "<br>";

    echo "<br> <b> Приведення типів </b>";
    $number = 10;
    $string = "15";
    echo "<br> Number 10 + String 15: <br>";
    echo $number + $string;
    echo "<br> Number 10 concatenate String 15: <br>";
    echo $number.$string;
?>