<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <title>WIKI</title>
</head>
<body>
    <style>
            :root {
    --card-height: 300px;
    --card-width: calc(var(--card-height) / 1.5);
    }
    * {
    box-sizing: border-box;
    }
    body {
    width: 100vw;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #191c29;
    }
    .card {
    width: var(--card-width);
    height: var(--card-height);
    position: relative;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    padding: 0 36px;
    perspective: 2500px;
    margin: 0 50px;
    }

    .cover-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    .wrapper {
    transition: all 0.5s;
    position: absolute;
    width: 100%;
    z-index: -1;
    }

    .card:hover .wrapper {
    transform: perspective(900px) translateY(-5%) rotateX(25deg) translateZ(0);
    box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
    -webkit-box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
    }

    .wrapper::before,
    .wrapper::after {
    content: "";
    opacity: 0;
    width: 100%;
    height: 80px;
    transition: all 0.5s;
    position: absolute;
    left: 0;
    }
    .wrapper::before {
    top: 0;
    height: 100%;
    background-image: linear-gradient(
        to top,
        transparent 46%,
        rgba(12, 13, 19, 0.5) 68%,
        rgba(12, 13, 19) 97%
    );
    }
    .wrapper::after {
    bottom: 0;
    opacity: 1;
    background-image: linear-gradient(
        to bottom,
        transparent 46%,
        rgba(12, 13, 19, 0.5) 68%,
        rgba(12, 13, 19) 97%
    );
    }

    .card:hover .wrapper::before,
    .wrapper::after {
    opacity: 1;
    }

    .card:hover .wrapper::after {
    height: 120px;
    }
    .title {
    width: 100%;
    transition: transform 0.5s;
    }
    .card:hover .title {
    transform: translate3d(0%, -50px, 100px);
    }

    .character {
    width: 100%;
    opacity: 0;
    transition: all 0.5s;
    position: absolute;
    z-index: -1;
    }

    .card:hover .character {
    opacity: 1;
    transform: translate3d(0%, -30%, 100px);
}
    </style>
        <a href="https://www.mythrillfiction.com/the-dark-rider" alt="Mythrill" target="_blank">
            <div class="card">
            <div class="wrapper">
                <img src="https://w0.peakpx.com/wallpaper/277/358/HD-wallpaper-playstation-ps4-sony-thumbnail.jpg" class="cover-image" />
            </div>
            
            <img src="https://iphoneswallpapers.com/wp-content/uploads/2021/08/Playstation-Controllers.jpg" class="character" />
            </div>
        </a>
        
        <a href="https://www.mythrillfiction.com/force-mage" alt="Mythrill" target="_blank">
            <div class="card">
            <div class="wrapper">
                <img src="https://e0.pxfuel.com/wallpapers/554/333/desktop-wallpaper-abstract-remix-nes-nintendo-phone-for-tech-minimalist-nintendo-art-thumbnail.jpg" class="cover-image" />
            </div>
            
            <img src="https://w0.peakpx.com/wallpaper/390/22/HD-wallpaper-whitegameboy-gameboy-gaming.jpg" class="character" />
            </div>
        </a>
        <a href="https://www.mythrillfiction.com/the-dark-rider" alt="Mythrill" target="_blank">
            <div class="card">
            <div class="wrapper">
                <img src="https://i.pinimg.com/originals/07/04/be/0704be656e5cba718a4303e01eebb182.jpg" class="cover-image" />
            </div>
            
            <img src="https://w0.peakpx.com/wallpaper/395/821/HD-wallpaper-x-box-logo-game-microsoft-xb-xbox.jpg" class="character" />
            </div>
        </a>
        

</body>