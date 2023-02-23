<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - construct</title>
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
            <h1 class="text-2xl">02 - construct</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[520px]">
            <?php
                class PlayList {
                    //Attributes
                    private $name;
                    private $artist = Array();
                    private $album  = Array();
                    private $cover  = Array();
                    private $year   = Array();

                    //Methods
                    public function __construct($name) {
                        $this->name = $name;
                    }

                    public function setPlayList($artist, $album, $cover, $year) {
                        $this->artist[] = $artist;
                        $this->album[]  = $album;
                        $this->cover[]  = $cover;
                        $this->year[]   = $year;
                    }

                    public function getPlayList(){
                        echo "<div class = ' text-black p-2 ring-1 ring-white/80 rounded-md bg-white/30 mb-4'>
                                    <h2 class = 'text-center text-2xl my-4'> $this->name </h2>";
                                    for($i =0; $i < count($this->artist); $i++){
                                    echo"<div class=' mb-4 p-2 flex flex-col gap-4 bg-black/40 rounded-md'>
                                        <p><strong>Album: </strong>".$this->album[$i]."</p>
                                        <img src='".$this->cover[$i]."' alt= 'cover' widt= '280px'class='rounded-md'>
                                        <p><strong>Artist: </strong>".$this->artist[$i]."</p>
                                        <p><strong>year: </strong>".$this->year[$i]."</p>

                                    </div>";
                                    }
                                "</div>";
                    }
                }
                $myPlayList1 = new PlayList('My new music');
                $myPlayList1->setPlayList('SuperMan', 'new me', 'https://tinyurl.com/5yh2pkrz', 2006);
                $myPlayList1->setPlayList('Imagine Dragons', 'Evolve', 'https://tinyurl.com/4hut3kyc', 2017);
                $myPlayList1->setPlayList('Ed Sheeran', 'Divide', 'https://tinyurl.com/3kemx2y5', 2017);
                $myPlayList1->setPlayList('Michael Jackson', 'Thriller', 'https://tinyurl.com/yw7asw3m', 1982);
                $myPlayList1->setPlayList('Bruno Mars', 'Unorthodox Jukebox', 'https://tinyurl.com/jcju32y2', 2012);
                $myPlayList1->getPlayList();

                
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>