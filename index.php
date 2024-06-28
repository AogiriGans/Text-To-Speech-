<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text To Speech</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="animated-title">Text To Speech</h1>
        <p>Select Language:</p>
        <select id="language">
            <option value="id-ID">Indonesian</option>
            <option value="ja-JP">Japanese</option>
        </select>

        <textarea id="text" rows="4" placeholder="Enter text here..."></textarea>
        <button onclick="synthesizeSpeech()">Generate Speech</button>
        
        <audio id="audio" controls></audio>
        <a id="download-link" download="speech.mp3">Download Speech</a>
    </div>
    <script src="script.js"></script>
</body>
</html>