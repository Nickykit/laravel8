<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .gallery-container {
            display: flex;

        }

        .gallery-image {
            width: 200px;
            height: auto;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Gallery of Kittikun 65122420035</h1>
    <div class="gallery-container">
        <p>ant
        <a href="gallery/ant"><img src="{{ $ant }}" alt="Ant-Man" class="gallery-image"></a>
        </p>
        <p>bird
        <a href="gallery/bird"><img src="{{ $bird }}" alt="Falcon" class="gallery-image"></a>
        </p>
        <p>cat
        <a href="gallery/cat"><img src="{{ $cat }}" alt="Black Panther" class="gallery-image"></a>
        </p>
        <p>god
        <a href="gallery/god"><img src="{{ $god }}" alt="Thor" class="gallery-image"></a>
        </p>
        <p>spider
        <a href="gallery/spider"><img src="{{ $spider }}" alt="Spider-Man" class="gallery-image"></a>
        </p>
    </div>
</body>
</html>