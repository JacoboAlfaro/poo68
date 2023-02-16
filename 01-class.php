<!--https://drive.google.com/drive/folders/1rX598TkSfKFwD5iE8tr7hfvGHe_dATJg DRIVE ARCHIVOS POO68--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Class</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-black/75">
    <main class="bg-black/50 h-[610px] w-[380px] rounded-lg">
        <header class= "flex justify-center items-center py-5 gap-5 bg-black/50 rounded-t-lg text-white">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 hover:-translate-x-2 transition-all" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  
            </a>
            <h1 class="text-2xl">01 - Class</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[520px]">
            <?php
                class Vehicle{

                    //Attribute
                    public $brand;
                    public $refer;
                    public $model;
                    public $color;

                    //Methods
                    public function setAttributes($brand, $refer, $model, $color){
                        $this->brand =$brand;
                        $this->refer =$refer;
                        $this->model =$model;
                        $this->color =$color;

                    }
                    public function getAttributes(){
                        return "<div class='p-4 mb-4 flex-col ring-1 ring-white/50 rounded-md bg-white/30'>
                                    <p><strong>Brand:</strong>    $this->brand</p>
                                    <p><strong>Reference:</strong>$this->refer</p>
                                    <p><strong>Model:</strong>    $this->model</p>
                                    <p><strong>Color:</strong>    $this->color</p>
                                </div>";
                    }
                }
                $vehicle1 = new Vehicle;
                $vehicle1 -> setAttributes('Audi',' R8',2020,'White');
                echo $vehicle1 -> getAttributes();

                $vehicle2 = new Vehicle;
                $vehicle2 -> setAttributes('Renault',' Sandero',2022,'Yellow');
                echo $vehicle2 -> getAttributes();

                $vehicle3 = new Vehicle;
                $vehicle3 -> setAttributes('Mazda',' CX-5',2023,'Black');
                echo $vehicle3 -> getAttributes();

                $vehicle4 = new Vehicle;
                $vehicle4 -> setAttributes('Volkswagen',' Tiguan',2021,'Blue');
                echo $vehicle4 -> getAttributes();
                
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>