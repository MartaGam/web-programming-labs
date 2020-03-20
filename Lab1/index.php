<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>The Witcher</title>
</head>
<body>
    <div class="content-container">
        <img class="poster-image" src="Images/poster.jpg" />
        <div class="content">
            <img src="Images/title.png" width="60" />
            <br />
            <br />
            <b><div class="title-div"><?php echo "The Witcher"?></div></b>
            <div class="metadata-div">Action &#8226; Fantasy &#8226; Adventure &#8226; 18+</div>
            <p><div class="description-div">Hostile townsfolk and a cunning mage greet Geralt in the town of Blaviken. Ciri finds her royal world upended when Nilfgaard sets its sights on Cintra.</div></p>
            <div class="buttons-container">
                <a href="https://www.netflix.com/title/80189685"><button class="primary-button">WATCH ON NETFLIX</button></a>
                <a href="trailer.php"><button class="secondary-button">WATCH TRAILER</button></a>
            </div>
        </div>
        <div class="actors-list">
            <u>Episodes:</u>
            <ul>
                <li>
                    <div class="episode-root-grid">
                        <div class="episode-image-grid">
                            <img src="Images/ep1.jpg" width="240px" height="134px" />
                        </div>
                        <div class="episode-title">Episode 1: Lalala</div>
                        <div class="episode-duration">58:30</div>
                        <div class="episode-description">At the first episode Witcher is going to kill Renphrie - a stranger women with special power.</div>
                    </div>
                </li>
                <li>
                    <div class="episode-root-grid">
                        <div class="episode-image-grid">
                            <img src="Images/ep2.jpg" width="240px" height="134px" />
                        </div>
                        <div class="episode-title">Episode 2: Lalala</div>
                        <div class="episode-duration">1:02:17</div>
                        <div class="episode-description">At the first episode Witcher is going to kill Renphrie - a stranger women with special power.</div>
                    </div>
                </li>
                <li>
                    <div class="episode-root-grid">
                        <div class="episode-image-grid">
                            <img src="Images/ep3.jpg" width="240px" height="134px" />
                        </div>
                        <div class="episode-title">Episode 3: Lalala</div>
                        <div class="episode-duration">1:02:17</div>
                        <div class="episode-description">At the first episode Witcher is going to kill Renphrie - a stranger women with special power.</div>
                    </div>
                </li>
                <li>
                    <div class="episode-root-grid">
                        <div class="episode-image-grid">
                            <img src="Images/ep4.jpg" width="240px" height="134px" />
                        </div>
                        <div class="episode-title">Episode 4: Lalala</div>
                        <div class="episode-duration">1:02:17</div>
                        <div class="episode-description">At the first episode Witcher is going to kill Renphrie - a stranger women with special power.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>

<style>
    @font-face {
        font-family: Witcher;
        src: url('font-witcher.ttf');
    }

    .episode-title {
        max-lines: 1;
        font-size: 12pt;
    }
    .episode-duration {
        color: #6B6B6B;
        font-size: 10pt;
    }
    .episode-description {
        font-size: 10pt;
        color: #ABABAB;
    }
    .episode-image-grid {
        width: 180pt;
        height: 100pt;
        background-color: #2B2B2B;
        border: solid 2px rgba(65, 106, 120, 0);
    }
    .episode-root-grid {
        margin: 8pt 12pt 0 0;
        width: 180pt;
    }
        .episode-root-grid:hover .episode-image-grid{
            border: solid 2px rgba(65, 106, 120, 0.8);
            cursor: pointer;
        }
    .episode-root-grid:hover {
        cursor: pointer;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    li {
        float: left;
    }

    .actors-list {
        color: white;
        position: absolute;
        margin: 280pt 0 0 20pt;
    }

    .metadata-div {
        margin: 8pt 0 0 0;
        color: #8A8A8A;
        font-size: 12pt;
    }

    .buttons-container {
        margin: 20pt 0 0 0;
    }

    .primary-button {
        min-width: 80pt;
        font-size: 12pt;
        margin: 0 8pt 0 0;
        float: left;
        cursor: pointer;
        border: none;
        color: white;
        height: 32pt;
        padding: 8pt;
        background-color: rgba(65, 106, 120, 0.8);
    }

    .secondary-button {
        cursor: pointer;
        min-width: 80pt;
        font-size: 12pt;
        margin: 0 8pt 0 0;
        float: left;
        border: none;
        color: white;
        height: 32pt;
        padding: 8pt;
        background-color: rgba(120, 120, 120, 0.8);
    }

    body {
        padding: 0;
        margin: 0;
        background-image: url(Images/background.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        background-attachment: fixed;
        font-family: Calibri;
    }

    .description-div {
        margin: 8pt 0 0 0;
        font-size: 12pt;
        color: #ABABAB;
    }

    .content {
        float: left;
        width: 520pt;
        margin: 20pt 0 0 20pt;
    }

    .title-div {
        color: white;
        font-size: 24pt;
        font-family: Witcher;
    }

    .content-container {
        width: 860pt;
        margin: 120pt 60pt 0 60pt;
        height: 2000pt;
        border-radius: 8pt;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .poster-image {
        margin: 20pt 0 0 20pt;
        border-radius: 8pt;
        width: 160pt;
        height: 240pt;
        float: left;
    }
</style>
</html>