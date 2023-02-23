<!--https://drive.google.com/drive/folders/1rX598TkSfKFwD5iE8tr7hfvGHe_dATJg DRIVE ARCHIVOS POO68--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - Private</title>
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
            <h1 class="text-2xl">03 - Private</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[520px]">
        <h2 class="text-center text-2xl mb-6">Table Maker</h2>    
        <form class="p-2 mb-4 grid grid-cols-2 justify-center gap-4 ring-1 bg-white/20 ring-white/50 rounded-md" action="" method="post">
                <div class="flex flex-col items-center gap-4">
                    <label>Rows:</label>
                    <input type="range" name="nr" min="1" max="20" step="1" 
                           value="10" oninput="onr.value=this.value">
                    <output id="onr" class="text-2xl">10</output>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <label>Columns:</label>
                    <input type="range" name="nc" min="1" max="20" step="1" 
                           value="10" oninput="onc.value=this.value">
                    <output id="onc" class="text-2xl">10</output>
                </div>
                <button class="p-2 bg-white w-[324px] rounded-md hover:scale-95 transition opacity-70 hover:opacity-100 text-black/100">Make Table</button>
            </form>
            <?php
                class Table {
                    private $nr;
                    private $nc;

                    public function __construct($nr, $nc) {
                        $this->nr = $nr;
                        $this->nc = $nc;
                        $this->makeTable();
                    }
                    private function makeTable() {
                        echo "<table class='border-collapse mx-auto'>";
                        for($r = 1; $r <= $this->nr; $r++) {
                            echo "<tr>";
                            for($c = 1; $c <= $this->nc; $c++) {
                                echo "<td class='p-2 ring-1 ring-white/50 bg-black/40'> </td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
                if ($_POST) {
                    $table = new Table($_POST['nr'], $_POST['nc']);
                }
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>